<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
       //salesstatement
       public function salesstatement(){
        return view('dashboard.sale.salesstatement');
    }
}
