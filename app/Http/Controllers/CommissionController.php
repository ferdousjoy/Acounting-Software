<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommissionController extends Controller
{
        //commission
        public function commission(){
            return view('dashboard.commission.commission');
        }
}
