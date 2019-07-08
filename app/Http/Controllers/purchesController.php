<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PurchesModel;
use App\WarehouseModel;
use App\QuoteModel;
use App\UnitModel;
use App\CompanySettingModel;
use App\CustomerModel;
use App\VendorModel;
use App\TaxModel;
use App\ProductModel;
use Carbon\Carbon;
class purchesController extends Controller
{

         //purches
     public function purches(){
        $purchess=QuoteModel::orderBy('id')->get();
        $no=1;
       return view('dashboard.purches.purches',compact('purchess','no'));
   }
         //purches
     public function satementpurches(){

       return view('dashboard.purches.purchasesstatement');
   }
//purchse new
 public function listpurchase(){
      $cus=PurchesModel::all();
       $no=1;
     return view('dashboard.purches.PurchaseList',compact('cus','no'));

   }


       public function insertpurchase(Request $req){

      $this->validate($req,[
          'vendor_name'=>'required',
          'product'=>'required',
          'description'=>'required',
          'exdate'=>'required',
          'purchase_date'=>'required',
          'note'=>'required',
          'quantity'=>'required',
          'Pnumber'=>'required',
          'currency'=>'required',
          'price'=>'required',



          ]);

       $l= $_POST['quantity'];
       $ll= $_POST['price'];
       $k=$l*$ll;

          PurchesModel::insert(
          [
              'Pnumber'=>$req['Pnumber'],
              'vendor_name'=>$req['vendor_name'],
              'purchase_date'=>$req['purchase_date'],
              'exdate'=>$req['exdate'],
              'note'=>$req['note'],
              'description'=>$req['description'],
              'product'=>$req['product'],
              'currency'=>$req['currency'],
              'quantity'=>$req['quantity'],
              'price'=>$req['price'],
              'receipt'=>$req['receipt'],
              'total'=>$k,

              'created_at'=>Carbon::now(),
          ]);
          session()->flash('success' , 'Purches  succesfully Created');
          return back();
   }
      public function newpurchase(){
        $product=ProductModel::all();
        $cus=VendorModel::all();
        // $no=1;
       return view('dashboard.purches.AddPurchase',compact('product','cus'));
   }
//purchse new
    //newinvoice
    public function newpurches(){
        $product=ProductModel::orderBy('id')->get();
        $poNumer=QuoteModel::orderBy('id')->get();
        $cus=CustomerModel::orderBy('id')->get();
        $product=ProductModel::orderBy('id')->get();
        $unit=UnitModel::orderBy('id')->get();
        $tax=TaxModel::orderBy('id')->get();
       return view('dashboard.purches.newpurches',compact('product','poNumer','cus','product','unit','tax'));
   }


   public function updatepo(Request $req)
   {
     $i = 0;
      foreach($req->product as $ss){

       QuoteModel::find($req['po_id'])->update(
         [
             'purchase_order'=>$req['purchase_order'],
             'country_id'=>$req['customer'],
             'purchase_date'=>$req['purchase_date'],
             'description'=>$req['description'][$i],
             'currency'=>$req['currency'],
             'exdate'=>$req['exdate'],
             'quantity'=>$req['quantity'][$i],
             'po_name'=>$req['po_name'],
             'product'=>$req['product'][$i],
             'unit'=>$req['unit'][$i],
             'tax'=>$req['tax'][$i],
             'chalan_no'=>$req['chalan_no'],
             'price'=>$req['price'][$i],
             'created_at'=>Carbon::now(),
         ]);
         $i=$i+1;
      }

      session()->flash('success' , 'POS  succesfully Updated');
      return back();
   }
       //invoice View
       public function viewpurches($id){
        $view=PurchesModel::find($id);
        $company=CompanySettingModel::find('1');
       return view('dashboard.purches.viewpurches',compact('view','company'));
   }
    //editinvoice
    public function editpurches($id){
      $q = QuoteModel::find($id);
      $editpurches=QuoteModel::where('purchase_order',$q->purchase_order)->get();

        $products=ProductModel::all();
        $units=UnitModel::all();

        $taxs=TaxModel::all();
        $cus=CustomerModel::orderBy('id')->get();
        //print_r($editpurches);
       return view('dashboard.purches.editpurches',compact('editpurches','cus','products','units','taxs','q'));
   }




    public function editpurchesform(Request $req){
        PurchesModel::find($req['id'])->update(
           [
               'billing_name'=>$req['billing_name'],
               'billing_address'=>$req['billing_address'],
               'billing_phone'=>'billing_phone',
               'billing_email'=>$req['billing_email'],
               'billing_warehouse'=>$req['warehouse'],
               'billing_purches_no'=>$req['purchese_number'],
               'billing_reference'=>$req['refer'],
               'billing_date'=>$req['date'],
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
               'update_stock'=>$req['update_stock'],
               'created_at'=>Carbon::now(),
           ]);
           session()->flash('success' , 'Purches Updated succesfully Updated');
       return back();
   }
    //deleteinvoice
    public function deletepurches($id){
        PurchesModel::find($id)->delete();
       session()->flash('success' , 'Purches succesfully Deleted');
       return back();
   }
   public function deletepurchespo($id){
       QuoteModel::find($id)->delete();
      session()->flash('success' , 'Purches succesfully Deleted');
      return back();
  }
     //deleteinvoice
     public function deletepurches2($id){
         VendorModel::find($id)->delete();
        session()->flash('success' , 'Purches succesfully Deleted');
        return back();
    }
    public function deletepurches3($id){
        ProductModel::find($id)->delete();
       session()->flash('success' , 'Purches succesfully Deleted');
       return back();
   }

    //newinvoice form
    public function newpurchesform (Request $req){
       $this->validate($req,[
           'billing_name'=>'required',
           'billing_phone'=>'required',
           'billing_address'=>'required',
           'billing_email'=>'required',
           'warehouse'=>'required',
           'purchese_number'=>'required',
           'product_description'=>'required',
           'discount'=>'required',
           'date'=>'required',
           'notes'=>'required',
           'product_qty'=>'required',
           'product_description'=>'required',
           'nextpayment'=>'required',
           'product_name'=>'required',
           'mcurrency'=>'required',
           'total'=>'required',
           'pterms'=>'required',
           'status'=>'required',
           'update_stock'=>'required',
           'tax'=>'required',
          ]);
          PurchesModel::insert(
           [
               'billing_name'=>$req['billing_name'],
               'billing_address'=>$req['billing_address'],
               'billing_phone'=>'billing_phone',
               'billing_email'=>$req['billing_email'],
               'billing_warehouse'=>$req['warehouse'],
               'billing_purches_no'=>$req['purchese_number'],
               'billing_reference'=>$req['refer'],
               'billing_date'=>$req['date'],
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
               'update_stock'=>$req['update_stock'],
               'created_at'=>Carbon::now(),
           ]);
           session()->flash('success' , 'Purches  succesfully Created');
           return back();
   }
    //Search
   public function search(Request $req){
           $warehouses=WarehouseModel::orderBy('id')->get();
            $search=$req['search'];
             $posts=CustomerModel::where('billing_name','like', '%' .$search. '%')->orWhere('billing_email','like', '%' .$search. '%')->orWhere('billing_phone','like', '%' .$search. '%')->get();
             return view('dashboard.purches.newpurches',compact('posts','warehouses'));
       }

     //newinvoice
    public function createbill(){
       return view('dashboard.bill.newpurches');
   }

   public function bills(){
    $purchess=PurchesModel::orderBy('id')->get();
    $no=1;
   return view('dashboard.bill.purches',compact('purchess','no'));
}
     //newinvoice
    public function createvendor(){
       return view('dashboard.vendor.newpurches');
   }

   public function vendor(){
    $purchess=PurchesModel::orderBy('id')->get();
    $no=1;
   return view('dashboard.vendor.purches',compact('purchess','no'));
}
}
