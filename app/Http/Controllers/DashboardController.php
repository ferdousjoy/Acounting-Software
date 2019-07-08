<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientModel;
class DashboardController extends Controller
{
    //Home
    public function dashboard(){
        return view('dashboard.home.home');
    }
}
