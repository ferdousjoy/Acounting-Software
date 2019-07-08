<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferController extends Controller
{
       //newtransfer
       public function newtransfer(){
        return view('dashboard.transfer.newtransfer');
    }
}
