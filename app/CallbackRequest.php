<?php

namespace ukvp;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class CallbackRequest extends Model
{
   protected $table = 'callback_requests';
   
   public function scopeOpen($query){
      return $query->where([['status','open'],['callback_at','<=',Carbon::now()]])->orderBy('callback_at');
   }
}
