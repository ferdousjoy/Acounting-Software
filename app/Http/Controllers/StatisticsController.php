<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticsController extends Controller
{
        //statistics
        public function statistics(){
            return view('dashboard.statistics.statistics');
        }
}
