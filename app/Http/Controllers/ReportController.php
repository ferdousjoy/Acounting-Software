<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
        //expensereport
        public function expensereport(){
            return view('dashboard.report.expensereport');
        }
        //expensereport
        public function salereport(){
            return view('dashboard.report.salereport');
        }

        //depositreport
        public function depositreport(){
            return view('dashboard.report.depositreport');
        }
        //paymentreport
        public function paymentreport(){
            return view('dashboard.report.paymentreport');
        }

           //incomeroports
    public function incomeroports(){
        return view('dashboard.report.incomeroports');
    }
        //cutomerreport
        public function cutomerreport(){
            return view('dashboard.report.cutomerreport');
        }
            //profitreports
    public function profitreports(){
        return view('dashboard.report.profitreports');
    }
    public function event(){
        return view('dashboard.report.event');
    }
}
