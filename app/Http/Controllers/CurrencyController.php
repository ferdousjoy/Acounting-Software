<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
        //currencysetting
        public function currencysetting(){
            return view('dashboard.currency.currencysetting');
        }
        //currency
        public function currency(){
            return view('dashboard.currency.currency');
        }
        //currency Exchange
        public function currencyexchange(){
            return view('dashboard.currency.currencyexchange');
        }
        //Bank Account
        public function bankaccount(){
            return view('dashboard.currency.bankaccount');
        }
}
