<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceModel extends Model
{
  protected $fillable=['chalan_number','po_number','customer','driver_name','shipping_address','driver_mobile','date','track_number','products','transport','labour_cost','subtotal','total'];


  function cusinfo(){
    //return $this->hasOne('App\CustomerModel','customer','id');
    return $this->belongsTo('App\CustomerModel','customer');
  }
}
