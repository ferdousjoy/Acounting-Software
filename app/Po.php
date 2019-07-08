<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
class Po extends Model{
  protected $fillable=[
    'po_no',
    'customer_id',
    'shipping_address',
    'po_date',
    'subheading',
    'currency',
    'po_exdate',
    'notes',
    'description',
    'quantity',
    'price',
    'product_id',
    'unit',
    'tax',
    'total'
  ];




  function customerInfo(){
   return $this->belongsTo('App\Customer','customer_id');
  }

}
