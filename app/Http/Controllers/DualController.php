<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DualController extends Controller
{
        //dualsetting
        public function dualsetting(){
            return view('dashboard.dual.dualsetting');
        }
}
