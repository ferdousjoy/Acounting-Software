<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfitController extends Controller
{
      //profitstatement
      public function profitstatement(){
        return view('dashboard.profit.profitstatement');
    }

}
