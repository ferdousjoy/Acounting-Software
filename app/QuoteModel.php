<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class QuoteModel extends Model
{

    use SoftDeletes;
    protected $fillable = [
      'purchase_order','country_id', //'customer_id',
      'ship_address','Issue_date','currency',
      'expire_date','notes','product',
      'description','quantity','unit','price','tax',
      'total'
     ];

    protected $guarded = [];
   function get_product_info(){
     return $this->hasOne('App\CustomerModel','id','vendor');
   }

   function customer(){
     //return $this->belongsTo('App\User', 'foreign_key');
     return $this->belongsTo('App\CustomerModel','country_id');
   }

}
