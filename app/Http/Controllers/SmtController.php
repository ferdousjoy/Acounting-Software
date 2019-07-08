<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmtController extends Controller
{
        //smtpconfigemail
        public function smtpconfigemail(){
            return view('dashboard.smt.smtpconfigemail');
        }
}
