<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class MessageModel extends Model
{
    
        use SoftDeletes;
        protected $guarded = [];
        public function RelationMessageReciever()
        {
          return $this->belongsTo('App\user','reciever_id','id');
        }
        public function RelationMessageSender()
        {
          return $this->belongsTo('App\user','sender_id','id');
        }
}
