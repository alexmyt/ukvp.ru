<?php

namespace ukvp;

use ukvp\CallbackRequest;
use ukvp\Utils;

use libphonenumber\PhoneNumberFormat;
use libphonenumber\PhoneNumberType;
use libphonenumber\PhoneNumberUtil;

use PAMI\Client\Impl\ClientImpl;
use PAMI\Listener\IEventListener;
use PAMI\Message\Event\EventMessage;
use PAMI\Message\Action\StatusAction;
use PAMI\Message\Action\OriginateAction;
use PAMI\Message\Action\CoreShowChannelsAction;

class PBXUtils{
   
   protected $pbx_host;
   protected $pbx_ami_port;
   protected $pbx_ami_name;
   protected $pbx_ami_secret;
   protected $callbackManager;
   
   public function __construct(){
      $this->pbx_host = env("PBX_HOST");
      $this->pbx_ami_port = env("PBX_AMI_PORT");
      $this->pbx_ami_name = env("PBX_AMI_NAME","website");
      $this->pbx_ami_secret = env("PBX_AMI_SECRET");
      $this->callback_manager = env("CALBACK_MANAGER","171");
   }
   
   public function processCallbackRequest(CallbackRequest $cbRequest){
      $options = array(
          'host' => $this->pbx_host,
          'scheme' => 'tcp://',
          'port' => $this->pbx_ami_port,
          'username' => $this->pbx_ami_name,
          'secret' => $this->pbx_ami_secret,
          'connect_timeout' => 100,
          'read_timeout' => 30000
      );
      $client = new \PAMI\Client\Impl\ClientImpl($options);
      $client->registerEventListener(function($event){
         $this->eventListiner($event);
      });
      
      $client->open();

      $originateMsg = new OriginateAction('Local/s@callback-from-website-in/n'); // канал с группой менеджеров
      $originateMsg->setContext('callback-from-website-out');
      //$originateMsg->setCallerID(sprintf("%1 <%2>",$cbRequest->client_name,$cbRequest->client_phone_number));
      $originateMsg->setCallerID($cbRequest->client_phone_number);
      $originateMsg->setPriority('1');
      $originateMsg->setExtension($cbRequest->client_phone_number);
      $originateMsg->setVariable('manager',$this->callback_manager);
      $originateMsg->setVariable('siteURL',env('APP_URL'));
      $originateMsg->setVariable('requestID',$cbRequest->id);
      $originateMsg->setTimeout(30000);
      $originateMsg->setAsync(true);
      $message = $client->send($originateMsg);
      logger($message->serialize());
      
      if($message->isSuccess()){
         $cbRequest->status = 'processing';
         $cbRequest->action_id = $originateMsg->getActionID();
         $cbRequest->save();
      }
      
      
      $client->close();
   }
   
   private function eventListiner($event){
      //logger($event->serialize());
   }
}