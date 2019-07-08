<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class PosModel extends Model
{
protected $fillable=['estimate','customer','date','subheading','currency','exdate','memo','description','quantity','price','product','unit','tax','total'];

  function get_info(){
   return $this->hasOne('App\CustomerModel','id','customer');
  }

}
