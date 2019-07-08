<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class AccountModel extends Model
{
 
    use SoftDeletes;
     protected $fillable=['account_name','description'];
    protected $guarded = [];
}
