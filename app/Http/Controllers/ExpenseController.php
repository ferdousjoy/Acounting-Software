<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransactionModel;
use App\ExpenseModel;
use App\VendorstatementModel;
use App\AdvancepaymentModel;
use Carbon\Carbon;

class ExpenseController extends Controller
{
        //expensetransaction
        public function expensetransaction(){
            $no=1;
            $incometransactions = TransactionModel::where('category', '=' , 'expenses')->get();
            return view('dashboard.expense.expensetransaction',compact('incometransactions','no'));
        }
        //expensestatement
        public function expensestatement(){
            // return view('dashboard.expense.expensestatement');
        }
                     //deleteinvoice
             public function expensetransactiondelete($id){
                TransactionModel::find($id)->delete();
                 session()->flash('success' , 'Expens Transaction Succesfully Deleted');
                 return back();
             }



              // add cheque
        public function addexpenseform(Request $req){

        ExpenseModel::insert([
            'account_head'=>$req['account_head'],
            'particular'=>$req['particular'],
            'paymentmode'=>$req['paymentmode'],
            'amount'=>$req['amount'],
            
            'cheque_number'=>$req['cheque_number'],
            'bank_name'=>$req['bank_name'],
            'check_date'=>$req['check_date'],

            'PayOrder_name'=>$req['PayOrder_name'],
            'PayOrder_account'=>$req['PayOrder_account'],
            'PayOrder_date'=>$req['PayOrder_date'],


            'MFS_name'=>$req['MFS_name'],
            'MFS_mobile'=>$req['MFS_mobile'],
            'MFS_id'=>$req['MFS_id'],
            'created_at'=>Carbon::now(),
        ]);
        session()->flash('success' , 'Item succesfully Created');
        return back();
        }

              // add vendorstatement form
        public function addvendorstatementform(Request $req){
             $this->validate($req,[
                'name'=>'required',
                'account_head'=>'required',
                'particular'=>'required',
                'payment_mode'=>'required',
                'amount'=>'required',
                'cheque_no'=>'required',
                'remarks'=>'required',
                'cheque_date'=>'required',

          ]);
        VendorstatementModel::insert([
            'name'=>$req['name'],
            'account_head'=>$req['account_head'],
            'particular'=>$req['particular'],
            'payment_mode'=>$req['payment_mode'],
            'amount'=>$req['amount'],
            'remarks'=>$req['remarks'],
            'cheque_no'=>$req['cheque_no'],
            'cheque_date'=>$req['cheque_date'],
            'created_at'=>Carbon::now(),
        ]);
        session()->flash('success' , 'Item succesfully Created');
        return back();
        }


              public function addadvancepaymentform(Request $req){
             $this->validate($req,[
                'name'=>'required',
                'account_head'=>'required',
                'particular'=>'required',
                'payment_mode'=>'required',
                'amount'=>'required',
                'cheque_no'=>'required',
                'remarks'=>'required',
                'cheque_date'=>'required',

          ]);
        AdvancepaymentModel::insert([
            'name'=>$req['name'],
            'account_head'=>$req['account_head'],
            'particular'=>$req['particular'],
            'payment_mode'=>$req['payment_mode'],
            'amount'=>$req['amount'],
            'remarks'=>$req['remarks'],
            'cheque_no'=>$req['cheque_no'],
            'cheque_date'=>$req['cheque_date'],
            'created_at'=>Carbon::now(),
        ]);
        session()->flash('success' , 'Item succesfully added');
        return back();
        }

}
