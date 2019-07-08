<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogController extends Controller
{
        //log Data
        public function logdata(){
            return view('dashboard.log.logdata');
        }
    
}
