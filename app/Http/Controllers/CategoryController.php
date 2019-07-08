<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
        //category
        public function category(){
            return view('dashboard.category.category');
        }
}
