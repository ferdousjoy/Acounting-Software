<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PurchesModel extends Model
{
   
    use SoftDeletes;
       function get_info()
  {
   return $this->hasOne('App\VendorModel','id','vendor_name');
  }
    protected $guarded = [];
}
