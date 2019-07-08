<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
        //locations
        public function locations(){
            return view('dashboard.location.locations');
        }
}
