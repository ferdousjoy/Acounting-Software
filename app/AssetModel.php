<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 
class AssetModel extends Model
{ 
    
     protected $fillable=['asset_name','price','rate','remarks'];
    
}
