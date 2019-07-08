<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class SupplierModel extends Model
{
  
 use SoftDeletes;
    protected $guarded = [];
}
