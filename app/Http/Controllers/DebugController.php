<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebugController extends Controller
{
       //Debug Setting
       public function debugset(){
        return view('dashboard.debug.debugsetting');
    }
}
