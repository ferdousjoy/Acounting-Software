<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportController extends Controller
{
        //importprocuctscustomer
        public function importprocuctscustomer(){
            return view('dashboard.import.importprocuctscustomer');
        }
        //importproducts
        public function importproducts(){
            return view('dashboard.import.importproducts');
        }
}
