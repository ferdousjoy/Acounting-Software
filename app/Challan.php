<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challan extends Model{
  //protected $table = 'challans';
  protected $fillable=['challan_no','po_number','customer_id','driver_name','shipping_address','driver_mobile','date','track_number','product','price','product','description','quantity','transport','ammount','labour_cost'];

  function cusinfo(){
    return $this->belongsTo('App\CustomerModel','customer_id');
  }
}
