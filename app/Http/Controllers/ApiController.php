<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
       //restapikeys
       public function restapikeys(){
        return view('dashboard.api.restapikeys');
    }
}
