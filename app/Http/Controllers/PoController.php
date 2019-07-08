<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Po;
use App\Customer;
use App\ProductModel;
use App\TaxModel;
use App\UnitModel;
use Carbon\Carbon;


class PoController extends Controller{

  public function index(){
    $pos=Po::all()->unique('po_no');
    //dd($pos);
    return view('dashboard.po.index',[
      'pos' => $pos
    ]);
  }

  public function show(Po $po){

  }

  public function create(){


    /*
    $product=ProductModel::orderBy('id')->get();
    $poNumer=QuoteModel::orderBy('id')->get();
    $cus=CustomerModel::orderBy('id')->get();
    $product=ProductModel::orderBy('id')->get();
    $unit=UnitModel::orderBy('id')->get();
    $tax=TaxModel::orderBy('id')->get();
   return view('dashboard.purches.newpurches',compact('product','poNumer','cus','product','unit','tax'));*/


    $poLast= Po::latest()->first();
    return view('dashboard.po.create',[
      'products' => ProductModel::all(),
      'customers' => Customer::all(),
      'units' => UnitModel::all(),
      'taxs' => TaxModel::all(),
      'po_no' => (!empty($poLast))?$poLast->po_no:0,
    ]);
  }


  public function store(Request $request){
      $request->validate([
        'po_no' => 'required|integer',
      ]);


     foreach($request->product as $i=>$ss){
          Po::insert([
              'po_no'=>$request['po_no'],
              'customer_id'=>$request['customer_id'],
              'shipping_address'=>$request['shipping_address'],
              'po_date'=>$request['po_date'],
              'po_exdate'=>$request['po_exdate'],
              'currency'=>$request['currency'],
              'notes'=>$request['notes'],

              'product_id'=>$request['product'][$i],
              'description'=>$request['description'][$i],
              'quantity'=>$request['quantity'][$i],
              'unit'=>$request['unit'][$i],
              'price'=>$request['price'][$i],
              'tax'=>$request['tax'][$i],
              'total'=>$request['total'][$i],
              'created_at'=>Carbon::now(),
          ]);
     }

     return back()->with('success' , 'POS  succesfully Created');
  }


  public function edit(Po $po){

    return view('dashboard.po.edit',[
      'products' => ProductModel::all(),
      'customers' => Customer::all(),
      'units' => UnitModel::all(),
      'taxs' => TaxModel::all(),
      'shipping_addresses' => $this->getShippingAddress($po->customer_id),
      'pos'=> Po::where('po_no',$po->po_no)->get(),
      'po' => $po,
    ]);
  }


  public function update(Request $request, Po $po){
      //dd($request);


       foreach($request->product as $i => $product){

          Po::where([
            'product_id' => $product,
            'customer_id' => $po->customer_id,
            'po_no' => $po->po_no
          ])->update([
            'po_no'=>$request['po_no'],
            'customer_id'=>$request['customer_id'],
            'shipping_address'=>$request['shipping_address'],
            'po_date'=>$request['po_date'],
            'po_exdate'=>$request['po_exdate'],
            'currency'=>$request['currency'],
            'notes'=>$request['notes'],

            'product_id'=>$request['product'][$i],
            'description'=>$request['description'][$i],
            'quantity'=>$request['quantity'][$i],
            'unit'=>$request['unit'][$i],
            'price'=>$request['price'][$i],
            'tax'=>$request['tax'][$i],
            'total'=>$request['total'][$i],
            'created_at'=>$po->created_at,
            'updated_at'=>Carbon::now()
          ]);
       }


       //$products = Po::where('po_no',$po->po_no)->get();

       // foreach ($products as $p) {
       //   if(!in_array($p->product_id,$request->product))
       //     $p->forceDelete();
       // }

       return back()->with('success' , 'POS  succesfully Updated');
  }



  public function destroy(Po $po){
    Quotation::where('po_no',$po->po_no)->delete();
    return back()->with('success' , 'Po succesfully Delated');
  }





  public function getShippingList(Request $request){
    $shipping_addresses = $this->getShippingAddress($request->customer_id);
    $options = '<option>--Select an item--</option>';
    foreach($shipping_addresses as $shipping_address){
      $options .= '<option value="'.$shipping_address->line.'">'.$shipping_address->line.'</option>';
    }
    echo $options;
  }


  public function getAjaxProduct(Request $request){
      $product = ProductModel::find($request->product_id);
      echo json_encode([
        'description' => $product->Describtion,
        'price' => (!empty($product->price))?$product->price:0,
        'tax' => (!empty($product->sales_tax))?$product->sales_tax:0,
        'unit' =>$product->unit,
      ]);
  }


  private function getShippingAddress($cmr_id){
    $customer = Customer::find($cmr_id);
    return (!empty($customer->shipping_addresses))?json_decode($customer->shipping_addresses):[];
  }


}
