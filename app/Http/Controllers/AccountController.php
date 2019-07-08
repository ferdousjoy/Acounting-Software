<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccountModel;
use App\BankModel;
use App\ExpenseModel;
use App\AssetModel;
use App\InvestModel;
use Carbon\Carbon;
class AccountController extends Controller

{


        //Accoumt
        public function account(){
            $accounts=AccountModel::orderBy('id')->get();
            return view('dashboard.account.account',compact('accounts'));
        }
        //Accoumt Add
        public function addaccount(){
            $account=AccountModel::all();
            $no=1;
            return view('dashboard.account.addaccount',compact('account','no'));
        }
        //Accoumt Add Form
        public function addaccountform(Request $req){
            $this->validate($req,[
                'account_name'=>'required',

          ]);
        AccountModel::insert([
            'account_name'=>$req['account_name'],
            'account_type'=>$req['account_type'],
            'description'=>$req['description'],
            'created_at'=>Carbon::now(),
        ]);
        session()->flash('success' , 'Account  succesfully Created');
        return back();
        }

                //Edit Account
        public function viewaccount($id){
            $viewaccount=AccountModel::find($id);
            return view('dashboard.account.viewaccount',compact('viewaccount'));
        }
                //view Account
        public function editaccount($id){
            $accountedit=AccountModel::find($id);
            return view('dashboard.account.editaccount',compact('accountedit'));
        }
           //Edit  Account Form
        public function editaccountform(Request $req){
            $this->validate($req,[
                'accno'=>'required',
                'holder'=>'required',
                'notes'=>'required',
                'businesslocation'=>'required',
          ]);
            AccountModel::find($_POST['id'])->update([
                'account_no'=>$req['accno'],
                'name'=>$req['holder'],
                'notes'=>$req['notes'],
                'business_location'=>$req['businesslocation'],
                'created_at'=>Carbon::now(),
            ]);
            session()->flash('success' , 'Account succesfully Updated');
            return back();

        }
                //Delete Account
        public function deleteaccount($id){
            AccountModel::findOrFail($id)->delete();
             session()->flash('success' , 'Accoutn succesfully Added');
            return back();
        }
        //accountstatement
        public function accountstatement(){
            return view('dashboard.account.accountstatement');
        }

        //Fixed Asset
        public function fixedasset(){
            $asset=AssetModel::all();
            $no=1;
            return view('dashboard.account.fixedasset',compact('asset','no'));
        }

           public function addassetform(Request $req){
            $this->validate($req,[
                'asset_name'=>'required',
                'price'=>'required',
                'rate'=>'required',
                'remarks'=>'required',

          ]);
        AssetModel::insert([
            'asset_name'=>$req['asset_name'],
            'rate'=>$req['rate'],
            'price'=>$req['price'],
            'remarks'=>$req['remarks'],
            'created_at'=>Carbon::now(),
        ]);
        session()->flash('success' , 'Account  succesfully Created');
        return back();
        }



        //Invest Ment
        public function investment(){
            $invest=InvestModel::all();
            $no=1;
            return view('dashboard.account.investment',compact('invest','no'));
        }
         public function addinvestform(Request $req){
            $this->validate($req,[
                'name'=>'required',
                'price'=>'required',
                'rate'=>'required',
                'remarks'=>'required',

          ]);
        InvestModel::insert([
            'name'=>$req['name'],
            'rate'=>$req['rate'],
            'price'=>$req['price'],
            'remarks'=>$req['remarks'],
            'created_at'=>Carbon::now(),
        ]);
        session()->flash('success' , 'Account  succesfully Created');
        return back();
        }



        //Expenses Insert Function
        public function expenses_statements(){
          $account=AccountModel::orderBy('id')->get();
            return view('dashboard.expense.expensestatement',compact('account'));
        }



        //Vendor Payment View Function
        public function vendor_payment(){
            return view('dashboard.expense.vendorpayment');
        }




        //Advance Payment View Function
        public function advance_payment(){
            return view('dashboard.expense.advancepayment');
        }
        //Expenses View Page
        public function expenses_list(){
            $cash=ExpenseModel::all();
            $no=1;
            return view('dashboard.expense.expenselist',compact('cash','no'));
        }




        //Cheque View Page
        public function cheque_collection(){
            return view('dashboard.account.chequecollection');
        }


        public function banklist(){
            $no=1;
            $banks=BankModel::orderBy('id','DESC')->get();
            return view('dashboard.bank.bank',compact('banks','no'));
        }
        //Add Bank
        public function addbank(){
            return view('dashboard.bank.addbank');
        }
         //Add Bank Form
        public function addbankform(Request $req){
            $this->validate($req,[
                'bankname'=>'required',

               ]);
               BankModel::insert([
                    'bank'=>$req['bankname'],
                    'created_at'=>Carbon::now(),
                ]);
                session()->flash('success' , 'Bank succesfully Added');
                return back();
            }
               //Delete customer
        public function deletebank($id){
            BankModel::findOrFail($id)->delete();
           session()->flash('success' , 'Bank succesfully Deleted');
          return back();
      }
        public function bankbalance(){
            $accounts=AccountModel::orderBy('id')->get();
            return view('dashboard.bank.bankbalance',compact('accounts'));
        }
}
