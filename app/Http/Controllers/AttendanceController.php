<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
        //Admin attendance
        public function adminattendance(){
            return view('dashboard.attendance.adminattendance');
        }
        //attendance
        public function attendance(){
            return view('dashboard.attendance.attendance');
        }
        //autoattendance
        public function autoattendance(){
            return view('dashboard.attendance.autoattendance');
        }
    
}
