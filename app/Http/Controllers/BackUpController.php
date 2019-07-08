<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackUpController extends Controller
{
        //DB Backup
        public function dbbackup(){
            return view('dashboard.backup.dbbackup');

        }
        
}
