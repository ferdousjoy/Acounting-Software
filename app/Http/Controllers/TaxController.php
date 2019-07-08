<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxController extends Controller
{
       //taxsetting
       public function taxsetting(){
        return view('dashboard.tax.taxsetting');
    }
    //taxslabs
    public function taxslabs(){
        return view('dashboard.tax.taxslabs');
    }
    //taxstatementexport
    public function taxstatementexport(){
        return view('dashboard.tax.taxstatementexport');
    }
    //taxstatement
    public function taxstatement(){
        return view('dashboard.tax.taxstatement');
    }
}
