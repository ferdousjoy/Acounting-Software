<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
        //customformsetting
        public function customformsetting(){
            return view('dashboard.custom.customformsetting');
        }
    
}
