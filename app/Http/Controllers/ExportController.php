<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExportController extends Controller
{
        //exportcrmdata
        public function exportcrmdata(){
            return view('dashboard.export.exportcrmdata');
        }
        //exportproducts
        public function exportproducts(){
            return view('dashboard.export.exportproducts');
        }
        //exporttransactionsaccount
        public function exporttransactionsaccount(){
            return view('dashboard.export.exporttransactionsaccount');
        }
        //exporttransactions
        public function exporttransactions(){
            return view('dashboard.export.exporttransactions');
        }
}
