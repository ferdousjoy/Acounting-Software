<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosController extends Controller
{
        //pos
        public function pos(){
            return view('dashboard.pos.pos');
        }
        //pos
        public function payment(){
            return view('dashboard.payment.payment');
        }

            //pos_style seting
    public function pos_styleseting(){
        return view('dashboard.pos.pos_styleseting');
    }
 
}
