<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 
class InvestModel extends Model
{ 
    
     protected $fillable=['name','price','rate','remarks'];
    
}
