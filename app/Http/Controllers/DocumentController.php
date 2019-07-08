<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
        //document
        public function document(){
            return view('dashboard.document.document');
        }
   
}
