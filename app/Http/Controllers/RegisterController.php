<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
       //Register
       public function registerpage(){
        return view('dashboard.register.Register');
    }
        //Add Register
        public function addregister(){
            return view('dashboard.register.addregister');
        }
        //Add Register
        public function crmregister(){
            return view('dashboard.register.crmregister');
        }
}
