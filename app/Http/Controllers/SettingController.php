<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
        //datetimesetting
        public function datetimesetting(){
            return view('dashboard.setting.datetimesetting');
        }

            //themesetting
    public function themesetting(){
        return view('dashboard.setting.themesetting');
    }

          //prefixsetting
          public function prefixsetting(){
            return view('dashboard.setting.prefixsetting');
        }
          //languagesetting
          public function languagesetting(){
            return view('dashboard.language.language');
        }
          //languagesetting
          public function invoicesetting(){
            return view('dashboard.setting.invoicesetting');
        }
}
