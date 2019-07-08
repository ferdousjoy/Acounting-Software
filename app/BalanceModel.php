<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 
class BalanceModel extends Model
{ 
    
     protected $fillable=['name','price','rate','remarks'];
    
}
