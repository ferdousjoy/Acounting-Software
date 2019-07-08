<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolidayController extends Controller
{
       //holidays
       public function holidays(){
        return view('dashboard.holiday.holidays');
    }
       //admin holidays
       public function adminholidays(){
        return view('dashboard.holiday.adminholidays');
    }
}
