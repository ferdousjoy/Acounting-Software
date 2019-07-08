<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerModel;
use App\CashModel;
use App\TransactionModel;
class IncomeController extends Controller
{
        //incomestatement
        public function incomestatement(){
            return view('dashboard.income.incomestatement');
        }
        //incometransaction
        public function incometransaction(){
            $no=1;
            $incometransactions = TransactionModel::where('category', '=' , 'income')->get();
            return view('dashboard.income.incometransaction',compact('incometransactions','no'));
        }
        //incomevsexpense
        public function incomevsexpense(){
            return view('dashboard.income.incomevsexpense');
        }
                     //deleteinvoice
             public function incometransactiondelete($id){
                TransactionModel::find($id)->delete();
                 session()->flash('success' , 'Income Transaction Succesfully Deleted');
                 return back();
             }
}
