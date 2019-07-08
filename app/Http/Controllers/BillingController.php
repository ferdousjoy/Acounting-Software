<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController extends Controller
{
        //balancesummary
        public function billingandtexsetting(){
            return view('dashboard.billing.billingandtexsetting');
        }
        //BillingTerms
        public function billingterms(){
            return view('dashboard.billing.billingterms');
        }
}
