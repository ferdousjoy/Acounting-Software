<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 
class ChequeModel extends Model
{ 
    
     protected $fillable=['name','price','rate','remarks'];
    
}