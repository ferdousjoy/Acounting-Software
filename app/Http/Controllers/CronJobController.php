<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CronJobController extends Controller
{
        //CronJob Panel
        public function cronjobpanel(){
            return view('dashboard.cronjob.cronjobpanel');
        }
    
    
}
