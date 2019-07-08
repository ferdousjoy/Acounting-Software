<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerModel;
use App\WarehouseModel;
use App\InvoiceModel;
use App\CompanySettingModel;
use App\ProductModel;
use App\UnitModel;
use App\TaxModel;
use App\CashModel;
use App\QuoteModel;
use App\AccountModel;
use App\PosModel;
use App\ExpenseModel;
use PDF;
use Carbon\Carbon;
class InvoiceController extends Controller
{

  function updatechallan2(Request $req){
    InvoiceModel::findOrFail($req->product_id)->update([
      'chalan_name'=>$req['chalan_name'],
      'po_number'=>$req['po_number'],
      'customer'=>$req['customer'],
      'driver_name'=>$req['drivername'],
      'shipping_address'=>$req['shippingaddress'],
      'driver_mobile'=>$req['drivermobile'],
      'date'=>$req['date'],
      'track_number'=>$req['tracknumber'],
      'product'=>$req['product'],
      'description'=>$req['description'],
      'quantity'=>$req['quantity'],
      'price'=>$req['price'],
      'transport'=>$req['transport'],
      'ammount'=>$req['total'],
  ]);
      return redirect('invoices');
  }
     //newinvoice
     public function invoices(){
         $invoices=InvoiceModel::orderBy('id')->get();
         $no=1;
        return view('dashboard.invoice.invoices',compact('invoices','no'));
    }

     public function viewinvoice($id){
         $in=InvoiceModel::all();
         $iv=CustomerModel::all();
         $pro=ProductModel::all();
         $unit=UnitModel::all();
         $invoice = InvoiceModel::find($id);
        return view('dashboard.invoice.viewinvoice',compact('invoice','iv','in','pro','unit'));
    }
     public function viewchalan($id){
   $in=InvoiceModel::find($id);
         $iv=CustomerModel::find($id);
         $pro=ProductModel::find($id);
         $unit=UnitModel::find($id);

        return view('dashboard.invoice.viewchalan',compact('iv','in','pro','unit'));

    }
     //newinvoice
     public function newinvoice(){
         $warehouses=WarehouseModel::orderBy('id')->get();
         $qoute=QuoteModel::all();
         $cus=CustomerModel::all();
         $last_challan= InvoiceModel::latest()->first();
         $challan_number = (!empty($last_challan))? $last_challan->chalan_number:0;

         $product=ProductModel::all();
         $unit=UnitModel::all();
        return view('dashboard.invoice.newinvoice',compact('warehouses','qoute','cus','challan_number','product','unit'));
    }
     //editinvoice
    //  public function editinvoice($id){
    //     $warehouses=WarehouseModel::orderBy('id')->get();
    //     $qoute=QuoteModel::all();
    //     $cus=CustomerModel::all();
    //     $challan_number=InvoiceModel::findOrFail($id);;
    //     $product=ProductModel::all();
    //     $unit=UnitModel::all();
    // return view('dashboard.invoice.editinvoice',compact('warehouses','qoute','cus','challan_number','product','unit'));

    //}


    function challanedit($product_id){
       $challan_number=InvoiceModel::findOrFail($product_id);
       $qoute=QuoteModel::all();
       $cus=CustomerModel::all();
       $product=ProductModel::all();
       $unit=UnitModel::all();
      return view('dashboard.invoice.editinvoice',compact('qoute','cus','product','unit','challan_number'));
    }






     public function editinvoiceform(Request $req){
        InvoiceModel::find($req['id'])->update(
            [
                'billing_name'=>$req['billing_name'],
                'billing_address'=>$req['billing_address'],
                'billing_phone'=>'billing_phone',
                'billing_email'=>$req['billing_email'],
                'billing_warehouse'=>$req['warehouse'],
                'billing_invoice_no'=>$req['invocienomber'],
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
            session()->flash('success' , 'Invoice Updated succesfully Updated');
        return back();
    }
     //deleteinvoice
     public function deleteinvoice($id){
       InvoiceModel::find($id)->delete();
        session()->flash('success' , 'Invoice succesfully Deleted');
        return back();
    }
     //newinvoice form
     public function newinvoiceform(Request $req){


        if($id = $this->storeChallan($req)){

              if($req->_type=='SAVE'){// SAVE....

              }elseif ($req->_type=='SEND') { // SEND....
                // code...

              }else{ // PRINT....
                return redirect()->route('view_invoice',$id);
              }
        }


        return back()->with('success' , 'Chalan  succesfully Created');
    }

    private function storeChallan(Request $req){

      $req->validate([
         "_type"=>"required|string|min:4|max:5",
         "chalan_number" => "required|integer",
         "customer" => "required|integer",
         "po_number" => "required|integer",
         "drivername" => "required|string",
         "drivermobile" => "required|string|max:16",
         "shippingaddress" => "required|string",
         "date" => "required|date",
         "tracknumber" => "required|string|max:20",
         "product" => "required|array",
         "description" => "required|array",
         "quantity" => "required|array",
         "price" => "required|array",
         "transport" => "required|array",
         "total" => "required|array",
     ]);


     $invoice = new InvoiceModel;


     $invoice->chalan_number = $req->chalan_number;
     $invoice->po_number = $req->po_number;
     $invoice->customer = $req->customer;
     $invoice->driver_name = $req->drivername;
     $invoice->driver_mobile = $req->drivermobile;
     $invoice->shipping_address = $req->shippingaddress;
     $invoice->date = $req->date;
     $invoice->track_number = $req->tracknumber;

     $products = [];

     foreach ($req->product as $k => $product) {
       $products[] = [
         'id' => $req->product[$k],
         'name' => $req->product[$k],
         'description' => $req->description[$k],
         'quantity' => $req->quantity[$k],
         //'units' => $req->quantity[$k],
         'price' => $req->price[$k],
         'transport' => $req->transport[$k],
         'ammount' => $req->total[$k],
       ];
     }

     $invoice->products = json_encode($products);
     $invoice->subtotal = array_sum($req->total);
     $invoice->transport = array_sum( $req->transport);
     //$invoice->labour_cost = array_sum( $req->labour_cost);
     $invoice->total = $invoice->subtotal + $invoice->transport /* + $invoice->labour_cost*/;

     $invoice->created_at = Carbon::now();
     $invoice->save();


      $purchess=QuoteModel::where('purchase_order',$req->po_number)->get();
      foreach ($purchess as $k => $purch) {
        if(array_key_exists($k,$req->quantity)){

          if($purch->quantity > $req->quantity[$k]){
            $purch->quantity -= $req->quantity[$k];
            $purch->total -= $req->total[$k];

            $purch->save();

          }else{
            $purch->delete();
          }
        }
      }

      return $invoice->id;

    }

    /*
    private function getProductIdByName($name=""){
      $product = ProductModel::where('name',$name);

      if(!empty($product)) return $product->id;
      return null;
    }*/


    function updatechallan(Request $req){



      $products = [];

      foreach ($req->product as $k => $product) {
        $products[] = [
          'id' => $req->product[$k],
          'name' => $req->product[$k],
          'description' => $req->description[$k],
          'quantity' => $req->quantity[$k],
          'price' => $req->price[$k],
          'transport' => $req->transport[$k],
          'ammount' => $req->total[$k],
        ];
      }


     InvoiceModel::findOrFail($req->challan_id)->update([
       'chalan_number'=>$req['chalan_name'],
       'po_number'=>$req['po_number'],
       'customer'=>$req['customer'],
       'driver_name'=>$req['drivername'],
       'shipping_address'=>$req['shippingaddress'],
       'driver_mobile'=>$req['drivermobile'],
       'date'=>$req['date'],
       'track_number'=>$req['tracknumber'],
       'products'=> json_encode($products),
       'transport'=> array_sum($req->transport),
       //'labour_cost'=>$req['labour_cost'],
       'subtotal'=>array_sum($req->total),
       'total'=> array_sum($req->total) + array_sum($req->transport) /*+ array_sum($req->transport) */,
   ]);
   return back();
}
     //Searchchalan_name
    public function search(Request $req){
            $warehouses=WarehouseModel::orderBy('id')->get();
             $search=$req['search'];
              $posts=CustomerModel::where('billing_name','like', '%' .$search. '%')->orWhere('billing_email','like', '%' .$search. '%')->orWhere('billing_phone','like', '%' .$search. '%')->get();
              return view('dashboard.invoice.newinvoice',compact('posts','warehouses'));
        }
        //pos_invoices
        public function pos_invoices(){
            $invoices=PosModel::all()->unique('estimate');
            $no=1;
            return view('dashboard.invoice.pos_invoices',compact('invoices','no'));
        }

        function productdelete($product_id){
         QuoteModel::find($product_id)->delete();
         return back()->with('successdelte','Product delete Successfully');
        }



        public function updatequotion($id){
          $q = PosModel::find($id);
          $customers=CustomerModel::all();
          $products=ProductModel::all();
          $units=UnitModel::all();
          $taxs=TaxModel::all();
          $pos=PosModel::where('estimate',$q->estimate)->get();

          //dd($q);
          return view('dashboard.invoice.UpdateQuotion',compact('customers','products','pos','units','taxs'));

        }
        //pos_invoicescreate
        public function pos_invoicescreate(){
            $customer=CustomerModel::all();
            $productmodel=ProductModel::all();
            $unit=UnitModel::all();
            $tax=TaxModel::all();
            $pos=PosModel::all()->last()->estimate;
            return view('dashboard.invoice.pos_invoicescreate',compact('customer','productmodel','pos','unit','tax'));
        }
             //Search customer
    public function searchcustomerpos(Request $req){
         $search=$req['search'];
         $products=ProductModel::orderBy('id')->paginate('10');
          $posts=CustomerModel::where('billing_name','like', '%' .$search. '%')->orWhere('billing_email','like', '%' .$search. '%')->orWhere('billing_phone','like', '%' .$search. '%')->get();
          return view('dashboard.invoice.pos_invoicescreate',compact('posts','products'));
    }
     //newinvoice form
     public function pos_invoicescreateform(Request $req){
       $req->validate([
          'estimate' => 'required|integer',

      ]);
           $i = 0;
            foreach($req->product as $ss){

              PosModel::insert(
               [
                   'estimate'=>$req['estimate'],
                   'customer'=>$req['customer'],
                   'date'=>$req['date'],
                   'currency'=>$req['currency'],
                   'exdate'=>$req['exdate'],
                   'memo'=>$req['memo'],
                   'product'=>$req['product'][$i],
                   'description'=>$req['description'][$i],
                   'quantity'=>$req['quantity'][$i],
                   'price'=>$req['price'][$i],
                   'unit'=>$req['unit'][$i],
                   'tax'=>$req['tax'][$i],
                   'created_at'=>Carbon::now(),
               ]);

               $i=$i+1;

            }

            session()->flash('success' , 'POS  succesfully Created');
            return back();
    }
    public function updatequotionform(Request $req){

          $i = 0;
           foreach($req->product as $ss){

             PosModel::findOrFail($req->pos_id)->update(
              [
                  'estimate'=>$req['estimate'],
                  'customer'=>$req['customer'],
                  'date'=>$req['date'],
                  'currency'=>$req['currency'],
                  'exdate'=>$req['exdate'],
                  'memo'=>$req['memo'],
                  'product'=>$req['product'][$i],
                  'description'=>$req['description'][$i],
                  'quantity'=>$req['quantity'][$i],
                  'price'=>$req['price'][$i],
                  'unit'=>$req['unit'][$i],
                  'tax'=>$req['tax'][$i],
                  'created_at'=>Carbon::now(),
              ]);

              $i=$i+1;

           }

           session()->flash('success' , 'Quotation succesfully Created');
           return back();
   }
         //invoice View
         public function viewposinvoices($id){
            $invoice=PosModel::find($id);
            $account=AccountModel::orderBy('id')->get();
            $company=CompanySettingModel::find('1');
            return view('dashboard.invoice.viewpos',compact('invoice','company','account'));
       }
         //deleteinvoice
         public function deleteposinvoices($id){
            PosModel::find($id)->delete();
             session()->flash('success' , 'Pos Invoice succesfully Deleted');
             return back();
         }

         public function deleteposinvoices22($id){
            CashModel::find($id)->delete();
             session()->flash('success' , 'Pos Invoice succesfully Deleted');
             return back();

         }
         public function deleteposinvoices222($id){
            ExpenseModel::find($id)->delete();
             session()->flash('success' , 'Pos Invoice succesfully Deleted');
             return back();

         }
         public function deleteposinvoices2($id){
            QuoteModel::find($id)->delete();
             session()->flash('success' , 'Pos Invoice succesfully Deleted');
             return back();
         }
         public function print($id){
            $company=CompanySettingModel::find('1');
            $invoice ['invoice']= $invoice=InvoiceModel::find($id);
           $pdf = PDF::loadView('pdf', $invoice);
          return $pdf->stream('pdf',array("Attachment" => false));

       }
}
