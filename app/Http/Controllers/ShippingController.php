<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShippingController extends Controller
{
        //discountandshipping
        public function discountandshipping(){
            return view('dashboard.shipping.discountandshipping');
        }
}
