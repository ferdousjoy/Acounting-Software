<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['password'];
     protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function RelationRoleName()
    {
      return $this->belongsTo('App\RoleModel','user_role','id');
    }

    public function RelationMessageReciever()
    {
      return $this->belongsTo('App\MeassageModel','id','reciever_id');
    }
    public function RelationMessageSender()
    {
      return $this->belongsTo('App\MessaegModel','id','sender_id');
    }
}
