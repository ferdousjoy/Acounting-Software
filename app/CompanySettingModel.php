<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CompanySettingModel extends Model
{ 
    use SoftDeletes;
    protected $guarded = [];
}
