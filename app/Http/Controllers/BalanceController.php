<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccountModel;
class BalanceController extends Controller
{
       //balancesummary
       public function balancesummary(){
        $Liabilities= AccountModel::where('account_type','=','Liabilities')->get(); 
        $Basics= AccountModel::where('account_type','=','Basic')->get(); 
        $Assets= AccountModel::where('account_type','=','Assets')->get(); 
        $Expensess= AccountModel::where('account_type','=','Expenses')->get(); 
        $Incomes= AccountModel::where('account_type','=','Income')->get(); 
        $Equitys= AccountModel::where('account_type','=','Equity')->get(); 
        $no=1;
        return view('dashboard.balance.balancesummary',compact('Liabilities','Basics','Assets','Expensess','Incomes','Equitys','no'));
    }
}
