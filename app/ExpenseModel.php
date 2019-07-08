<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class ExpenseModel extends Model
{

          protected $fillable=['account_head','particular','paymentmode','amount','MFS_id','cheque_number','bank_name','check_date','check_amount','PayOrder_name','PayOrder_date','MFS_name','MFS_mobile'];

}
