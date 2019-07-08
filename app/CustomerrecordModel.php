<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CustomerrecordModel extends Model
{
    
    use SoftDeletes;
    protected $guarded = [];
}
