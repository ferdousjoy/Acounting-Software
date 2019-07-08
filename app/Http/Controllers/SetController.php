<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetController extends Controller
{
       //setgoals
       public function setgoals(){
        return view('dashboard.set.setgoals');
    }
}
