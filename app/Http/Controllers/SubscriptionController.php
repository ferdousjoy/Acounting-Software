<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvoiceModel;
use App\WarehouseModel;
use App\SubscriptionModel;
use App\CustomerModel;
use App\UnitModel;
use App\CompanySettingModel;
use Carbon\Carbon;
class SubscriptionController extends Controller
{
        //managesubscriptions
        public function subscriptions(){
            // $subscriptions=SubscriptionModel::orderBy('id')->get();
            $list=UnitModel::all();
            
            $no=1;
            return view('dashboard.subscription.subscriptions',compact('list'));
        }
        //managesubscriptions
        public function newsubscription(){
            $warehouses=WarehouseModel::orderBy('id')->get();
            return view('dashboard.subscription.newsubscription',compact('warehouses'));
        }

    //invoice View
     public function viewsubscription($id){
        $view=SubscriptionModel::find($id);
        $company=CompanySettingModel::find('1');
       return view('dashboard.subscription.viewsubscription',compact('view','company'));
   }
    //editinvoice
    public function editsubscription($id){
        $warehouses=WarehouseModel::orderBy('id')->get();
         $subscription=SubscriptionModel::find($id);
        return view('dashboard.subscription.editsubscription',compact('subscription','warehouses'));
    }
     public function editsubscriptionform(Request $req){
        SubscriptionModel::find($req['id'])->update(             
            [
                'billing_name'=>$req['billing_name'],
                'billing_address'=>$req['billing_address'],
                'billing_phone'=>'billing_phone',
                'billing_email'=>$req['billing_email'],
                'billing_warehouse'=>$req['warehouse'],
                'billing_subscription_no'=>$req['invocienomber'],
                'billing_reference'=>$req['refer'],
                'billing_date'=>$req['invoicedate'],
                'billing_next_payment'=>$req['nextpayment'],
                'billing_tax'=>$req['tax'],
                'billing_discount'=>$req['discount'],
                'billing_note'=>$req['notes'],
                'billing_description'=>$req['product_description'],
                'product_name'=>$req['product_name'],
                'product_quantity'=>$req['product_qty'],
                'product_price'=>$req['total'],
                'payment_terms'=>$req['pterms'],
                'payment_status'=>$req['status'],
                'payment_currency'=>$req['mcurrency'],
                'created_at'=>Carbon::now(),
            ]);
            session()->flash('success' , 'subscription Updated succesfully Updated');
        return back();
    }
     //deleteinvoice
     public function deletesubscription($id){
        SubscriptionModel::find($id)->delete();
        session()->flash('success' , 'subscription  succesfully Deleted');
        return back();
    }
     //newinvoice form
     public function newsubscriptionform(Request $req){
        $this->validate($req,[
            'billing_name'=>'required',
            'billing_phone'=>'required',
            'billing_address'=>'required',
            'billing_email'=>'required',
            'warehouse'=>'required',
            'invocienomber'=>'required',
            'product_description'=>'required',
            'discount'=>'required',
            'invoicedate'=>'required',
            'notes'=>'required',
            'product_qty'=>'required',
            'product_description'=>'required',
            'nextpayment'=>'required',
            'product_name'=>'required',
            'mcurrency'=>'required',
            'total'=>'required',
            'pterms'=>'required',
            'status'=>'required',
            'tax'=>'required',
           ]);
           SubscriptionModel::insert(             
            [
                'billing_name'=>$req['billing_name'],
                'billing_address'=>$req['billing_address'],
                'billing_phone'=>'billing_phone',
                'billing_email'=>$req['billing_email'],
                'billing_warehouse'=>$req['warehouse'],
                'billing_subscription_no'=>$req['invocienomber'],
                'billing_reference'=>$req['refer'],
                'billing_date'=>$req['invoicedate'],
                'billing_next_payment'=>$req['nextpayment'],
                'billing_tax'=>$req['tax'],
                'billing_discount'=>$req['discount'],
                'billing_note'=>$req['notes'],
                'billing_description'=>$req['product_description'],
                'product_name'=>$req['product_name'],
                'product_quantity'=>$req['product_qty'],
                'product_price'=>$req['total'],
                'payment_terms'=>$req['pterms'],
                'payment_status'=>$req['status'],
                'payment_currency'=>$req['mcurrency'],
                'created_at'=>Carbon::now(),
            ]);
            session()->flash('success' , 'subscription  succesfully Created');
            return back();
    }
     //Search
    public function search(Request $req){
            $warehouses=WarehouseModel::orderBy('id')->get();
             $search=$req['search'];
              $posts=CustomerModel::where('billing_name','like', '%' .$search. '%')->orWhere('billing_email','like', '%' .$search. '%')->orWhere('billing_phone','like', '%' .$search. '%')->get();
              return view('dashboard.subscription.newsubscription',compact('posts','warehouses'));
        }
}
