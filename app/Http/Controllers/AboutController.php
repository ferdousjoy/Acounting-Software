<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
        //About
        public function about(){
            return view('dashboard.about.about');
        }
}
