<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransactionModel;
use App\SupplierModel;
use App\CustomerModel;
use App\AccountModel;
use Carbon\Carbon;
class TransactionController extends Controller
{
        //transaction
        public function transaction(){
            $no=1;
            $transactions=TransactionModel::orderBy('id','DESC')->get();
            return view('dashboard.transaction.transaction',compact('transactions','no'));
        }
    //Add addtransaction
    public function addtransaction(){
        $accounts = AccountModel::orderBy('id')->get();
        return view('dashboard.transaction.addtransaction',compact('accounts'));
    }    
        //employee payroll transactions
        public function employeepayrolltransactions(){
            return view('dashboard.transaction.employeepayrolltransactions');
        }

        //Add Transaction Form
    public function addtransactiondorm(Request $req){
        $this->validate($req,[
            'payer_name'=>'required',
            'pay_acc'=>'required',
            'amount'=>'required',
            'date'=>'required',
            'pay_type'=>'required',
            'pay_cat'=>'required',
            'paymethod'=>'required',
            'note'=>'required',
           ]);
           TransactionModel::insert([
            'supplier'=>$req['supplier'],
            'name'=>$req['payer_name'],
            'account'=>$req['pay_acc'],
            'amount'=>$req['amount'],
            'date'=>$req['date'],
            'type'=>$req['pay_type'],
            'category'=>$req['pay_cat'],
            'method'=>$req['paymethod'],
            'note'=>$req['note'],
            'supplier'=>$req['ty_p'],
            'created_at'=>Carbon::now(),
        ]);
        session()->flash('success' , 'Transaction succesfully Created');
        return back();
    }
      //Delete Transaction
      public function deletetransaction($id){
        TransactionModel::find($id)->delete();
        session()->flash('success' , 'Transaction succesfully Delete');
        return back();
    }
         //Search
         public function searchcustomersupplier(Request $req){
             $search=$req['search'];
             $accounts = AccountModel::orderBy('id')->get();
              $posts=SupplierModel::where('name','like', '%' .$search. '%')->get();
              $posts=CustomerModel::where('billing_name','like', '%' .$search. '%')->orWhere('billing_email','like', '%' .$search. '%')->orWhere('billing_phone','like', '%' .$search. '%')->get();
              return view('dashboard.transaction.addtransaction',compact('posts','accounts'));
        } 


    }




 