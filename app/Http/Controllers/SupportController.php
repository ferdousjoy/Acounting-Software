<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\CashModel;
use App\ChequeModel;
use App\BalanceModel;
use App\AccountModel;
use App\TaxModel;
use App\ExpenseModel;
use Carbon\Carbon;

class SupportController extends Controller
{
        //supporttickets
        public function supporttickets(){
            $cash=CashModel::all();
            $no=1;
            return view('dashboard.support.supporttickets',compact('cash','no'));
        }
        //addsupporttickets
        public function addsupporttickets(){
            return view('dashboard.support.addsupporttickets');
        }
        //addsupportticketsform
        public function addsupportticketsform(){
            return view('dashboard.support.addsupportticketsform');
        }
        //supporttickets unsolved
        public function supportticketsunsolved(){
          $account=AccountModel::orderBy('id')->get();
             return view('dashboard.support.supportticketsunsolved',compact('account'));
        }
        public function editincome($id){
          $account=AccountModel::orderBy('id')->get();
          $cash=cashModel::orderBy('id')->first();
             return view('dashboard.support.EditIncome',compact('account','cash'));
        }
        public function editincome2($id){
          $account=AccountModel::orderBy('id')->get();
          $cash=ExpenseModel::orderBy('id')->first();
             return view('dashboard.expense.EditExpense',compact('account','cash'));
        }
        //Recaptcha
        public function recaptcha(){
            return view('dashboard.support.recaptcha');
        }

        //Ticket Setting
        public function supportticketset(){
            return view('dashboard.support.supportticketset');
        }
        //Shorten
        public function shorten(){
            return view('dashboard.support.shorten');
        }
        //Sms Service
        public function smsservice(){
            return view('dashboard.support.smsservice');
        }
        //woocommerce
        public function woocommerce(){
            return view('dashboard.support.woocommerce');
        }
        //Printer
        public function printer(){
            return view('dashboard.support.printer');
        }
        //Add Printer
        public function addprinter(){
            return view('dashboard.support.addprinter');
        }
        public function UpdateIncome(Request $req)
        {
          CashModel::findOrFail($req->income_id)->update([
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
return back();
        }
        public function UpdateExpenses(Request $req)
        {
          ExpenseModel::findOrFail($req->income_id)->update([
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
return back();
        }

        // add cash
        public function addcashform(Request $req){
        CashModel::insert([
          'account_head'=>$req['account_head'],
          'particular'=>$req['particular'],
          'paymentmode'=>$req['paymentmode'],

          'cheque_number'=>$req['cheque_number'],
          'bank_name'=>$req['bank_name'],
          'check_date'=>$req['check_date'],

          'PayOrder_name'=>$req['PayOrder_name'],
          'PayOrder_account'=>$req['PayOrder_account'],
          'PayOrder_date'=>$req['PayOrder_date'],
          'amount'=>$req['amount'],

          'MFS_name'=>$req['MFS_name'],
          'MFS_mobile'=>$req['MFS_mobile'],
          'MFS_id'=>$req['MFS_id'],
          'created_at'=>Carbon::now(),
        ]);
        session()->flash('success' , 'Account  succesfully Created');
        return back();
        }

         //Printer
        public function addbalance(){
            $income=CashModel::all();
            $expense=ExpenseModel::all();

            return view('dashboard.support.balance',compact('income','expense'));
        }
        //sales
        public function addsales(){
            return view('dashboard.support.sales');
        }

public function addsaleform(Request $req){
TaxModel::insert([
    'tax'=>$req['tax'],
    'percentage'=>$req['percentage'],
    'created_at'=>Carbon::now(),
]);
session()->flash('success' , 'Tax succesfully Created');
return back();
}

public function taxlist()
{
  $tax=TaxModel::all();
return view('dashboard.tax.taxslabs',compact('tax'));
}
function deletetax($product_id){
 TaxModel::find($product_id)->delete();
 return back();
}







}
