<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    public function RelationRoleName()
    {
      return $this->belongsTo('App\User','id','user_role');
    }
}
