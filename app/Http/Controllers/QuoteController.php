<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuoteModel;
use App\ProductModel;
use App\WarehouseModel;
use App\CustomerModel;
use App\UnitModel;
use App\TaxModel;
use App\InvoiceModel;
use App\CompanySettingModel;
use Carbon\Carbon;
class QuoteController extends Controller
{
        //quotes
        public function quotes(){
            $no=1;
            $quotes=QuoteModel::orderBy('id','DESC')->get();
            return view('dashboard.quote.quotes',compact('quotes','no'));
        }
        //Newquote
        public function quotelist($id)
        {
          $cus=CustomerModel::all();
          $product=ProductModel::all();
          $chalan=InvoiceModel::all();
          $unit=UnitModel::all();
          $tax=TaxModel::all();
          $quote=QuoteModel::findOrfail($id);
        return view('dashboard.quote.EditInvoice',compact('cus','product','chalan','quote','unit','tax'));
        }
        public function newquote(){
              $cus=CustomerModel::all();
              $product=ProductModel::all();
              $chalan=InvoiceModel::all();
              $unit=UnitModel::all();
              $tax=TaxModel::all();
              $quote=QuoteModel::all()->last()->purchase_order;
            return view('dashboard.quote.Newquote',compact('cus','product','chalan','quote','unit','tax'));
        }


        

        public function getPoByUserId(){

        }
        public function getChallanByPo(){

        }



        public function quoteupdate(Request $req){
          $req->validate([
              'purchase_order' => 'required|integer',
          ]);
              $i = 0;
               foreach($req->product as $ss){

                QuoteModel::find($req['quote_id'])->update(
                  [
                      'purchase_order'=>$req['purchase_order'],
                      'country_id'=>$req['customer'],
                      'ship_address'=>$req['ship_address'],
                      'Issue_date'=>$req['Issue_date'],

                      'currency'=>$req['currency'],
                      'expire_date'=>$req['expire_date'],
                      'notes'=>$req['notes'],
                      'product'=>$req['product'][$i],

                      'description'=>$req['description'][$i],
                      'quantity'=>$req['quantity'][$i],
                      'unit'=>$req['unit'][$i],
                      'price'=>$req['price'][$i],
                      'tax'=>$req['tax'][$i],

                      'created_at'=>Carbon::now(),
                  ]);
                  $i=$i+1;
               }

               session()->flash('success' , 'POS  succesfully Created');
               return back();
        }
    //Newquote form
    //  public function newquoteform(Request $req){
    //        $q= $_POST['quantity'];
    //        $p= $_POST['price'];
    //        $k=$q*$p;
    //        QuoteModel::insert(
    //         [
    //             'purchase_order'=>$req['invovie_num'],
    //             'country_id'=>$req['customer'],
    //             'purchase_date'=>$req['purchase_date'],
    //             'description'=>$req['description'],
    //             'currency'=>$req['currency'],
    //             'exdate'=>$req['exdate'],
    //             'quantity'=>$req['quantity'],
    //             'po_name'=>$req['po_name'],
    //             'product'=>$req['product'],
    //             'unit'=>$req['unit'],
    //             'tax'=>$req['tax'],
    //
    //             'chalan_no'=>$req['chalan_no'],
    //             'price'=>$req['price'],
    //             'total'=>$k,
    //             'created_at'=>Carbon::now(),
    //         ]);
    //             session()->flash('success' , 'Item successfully added');
    //         return back();
    // }

    public function newquoteform(Request $req){


        $req->validate([
          'purchase_order' => 'required|integer',
        ]);
          //$i = 0;

         foreach($req->product as $i=>$ss){




              QuoteModel::insert([
                  'purchase_order'=>$req['purchase_order'],
                  'country_id'=>$req['customer'],
                  //'customer_id'=>$req['customer'],
                  'ship_address'=>$req['ship_address'],
                  'Issue_date'=>$req['Issue_date'],

                  'currency'=>$req['currency'],
                  'expire_date'=>$req['expire_date'],
                  'notes'=>$req['notes'],
                  'product'=>$req['product'][$i],

                  'description'=>$req['description'][$i],
                  'quantity'=>$req['quantity'][$i],
                  'unit'=>$req['unit'][$i],
                  'price'=>$req['price'][$i],
                  'tax'=>$req['tax'][$i],
                  'total'=>$req['total'][$i],

                  'created_at'=>Carbon::now(),
              ]);
            //$i=$i+1;
         }

         //dd($req);

         session()->flash('success' , 'POS  succesfully Created');
         return back();
   }
































         //Quote View
     public function viewquote($id){
         $invoice=QuoteModel::find($id);
         $company=CompanySettingModel::find('1');
        return view('dashboard.quote.viewquote',compact('invoice','company'));
    }
 //edit Quote
 public function editquote($id){
    $warehouses=WarehouseModel::orderBy('id')->get();
     $quote=QuoteModel::find($id);
    return view('dashboard.quote.editquote',compact('quote','warehouses'));
}
 public function editquoteform(Request $req){
    QuoteModel::find($req['id'])->update(
        [
            'billing_name'=>$req['billing_name'],
            'billing_address'=>$req['billing_address'],
            'billing_phone'=>'billing_phone',
            'billing_email'=>$req['billing_email'],
            'billing_warehouse'=>$req['warehouse'],
            'billing_quote_no'=>$req['number'],
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
            'created_at'=>Carbon::now(),
        ]);
        session()->flash('success' , 'Quote Updated succesfully Updated');
    return back();
}
 //delete quote
 public function deletequote($id){
    QuoteModel::find($id)->delete();
    session()->flash('success' , 'Quote Category succesfully Deleted');
    return back();
}
         //Search
         public function search(Request $req){
            $warehouses=WarehouseModel::orderBy('id')->get();
             $search=$req['search'];
              $posts=CustomerModel::where('billing_name','like', '%' .$search. '%')->orWhere('billing_email','like', '%' .$search. '%')->orWhere('billing_phone','like', '%' .$search. '%')->get();
              return view('dashboard.quote.Newquote',compact('posts','warehouses'));
        }
}
