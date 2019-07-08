<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailSmsController extends Controller
{
       //misc_automail
       public function misc_automail(){
        return view('dashboard.emailsms.misc_automail');
    }

        //automailsmssetting
        public function automailsmssetting(){
            return view('dashboard.emailsms.automailsmssetting');
        }
        //emailtemplate
        public function emailtemplate(){
            return view('dashboard.emailsms.emailtemplate');
        }
        //SMS
        public function smsmessage(){
            return view('dashboard.emailsms.smsmessage');
        }
}
