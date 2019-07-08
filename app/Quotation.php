<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Quotation extends Model{

    use SoftDeletes;
    protected $fillable = [
      'quotation_no','customer_id',
      'quotation_date','quotation_exdate',
      'currency','memo','product_id',
      'description','quantity','unit',
      'price','tax','total'
     ];

   function productInfo(){
     return $this->belongsTo('App\ProductModel','product_id');
   }

   function customerInfo(){
     return $this->belongsTo('App\Customer','customer_id');
   }

}
