<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
        //Create
        public function create(){
            return view('dashboard.create.create');
        }
}
