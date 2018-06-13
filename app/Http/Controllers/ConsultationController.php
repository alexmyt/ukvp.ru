<?php

namespace ukvp\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use ukvp\Mail\BackCallRequested;
use ukvp\CallbackRequest;
use ukvp\Utils;
use ukvp\PBXUtils;

use Illuminate\Http\Request;

use libphonenumber\PhoneNumberFormat;
use libphonenumber\PhoneNumberType;
use libphonenumber\PhoneNumberUtil;

class ConsultationController extends Controller
{
    public function send(Request $request){
      Mail::to('amm@ukvp.ru')->send(new BackCallRequested($request->all()));
      Log::info('Consultation request sended.',$request->all());
    }
    
    public function callback(Request $request){
        
        $phoneUtil = PhoneNumberUtil::getInstance();
        $phone = $phoneUtil->parse($request['clientPhoneNumber'],'RU');
        if(!$phoneUtil->isValidNumber($phone)){
            return response()->json(['field'=>'phone','code'=>'400', 'message'=>'Неправильный номер телефона (формат)'],400);
        }
        
        $phoneType = $phoneUtil->getNumberType($phone);
        if($phoneType != PhoneNumberType::MOBILE){
            Log::info($phoneType);
            return response()->json(['field'=>'phone','code'=>'400', 'message'=>'Неправильный номер телефона (не мобильный)'],400);
        }
        
        $utils = new Utils;
        $curTime = time();
        logger($request['callbackAt']);
        $cbTime = (int) $request->input('callbackAt',$curTime);
        if($cbTime === 0) $cbTime = $curTime;
        if (!$utils->isWorkTime($cbTime)){
            logger("Запрос на обратный звонок в нерабочее время: " . strftime("%c",$cbTime));
            return response(400);
        }
        
        Log::info("Passed phone". $request['clientPhoneNumber'].", " . $phoneUtil->isValidNumber($phone));
        
        $clientPhoneNumber = '8'.$phone->getNationalNumber();

        $cbRequerst = new CallbackRequest;
        $cbRequerst->client_phone_number = $clientPhoneNumber;
        $cbRequerst->client_name = $request['clientName'];
        $cbRequerst->callback_at = date('Y-m-d H:i:s',$cbTime);
        $cbRequerst->status = ($cbTime == $curTime) ? 'processing' : 'open';
        $cbRequerst->save();
        
        // запрос на звонок в рабочее время, можно обработать немедленно
        if($cbTime == $curTime){
            $pbx = new PBXUtils;
            $pbx->processCallbackRequest($cbRequerst);
        }
    }
    
    public function updateStatus(Request $request, $id){
        
        $cbRequest = CallbackRequest::findOrFail($id);
        
        $status = $request->input('status');
        if($status == 'success'){
            $cbRequest->status = 'closed';
            $cbRequest->save();
        
        }elseif($status == 'fail'){
            $utils = new Utils;
            
            // перезвоним в через 5 минут или отложим до начала следующего рабочего дня
            $timeToRedial = time() + 300; // через 5 минут
            if(!$utils->isWorkTime($timeToRedial)) $timeToRedial = $utils->getNextWorkDay($timeToRedial);
            $cbRequest->callback_at = date('Y-m-d H:i:s',$timeToRedial);
            $cbRequest->status = 'open';
            $cbRequest->save();
        }
        
        response(200);
    }
    

}
