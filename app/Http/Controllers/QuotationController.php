<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quotation;
use App\Customer;
use App\UnitModel;
use App\TaxModel;
use App\ProductModel;
use Carbon\Carbon;


class QuotationController extends Controller{

  public function index(){
    $quotations=Quotation::all()->unique('quotation_no');
    return view('dashboard.quotation.index',[
      'quotations' => $quotations
    ]);
  }

  public function show(Quotation $quotation){
    //$invoice=PosModel::find($id);
    //$account=AccountModel::orderBy('id')->get();
    //$company=CompanySettingModel::find('1');
    return view('dashboard.quotation.show',[]);
  }
  public function pdf(Quotation $quotation){

  }

  public function create(){
    $quotationLast=Quotation::all()->last();

    return view('dashboard.quotation.create',[
      'customers' => Customer::all(),
      'products' => ProductModel::all(),
      'units' => UnitModel::all(),
      'taxs' => TaxModel::all(),
      'quotation_no' => (!empty($quotationLast))?$quotationLast->quotation_no:0,
    ]);
  }


  public function store(Request $request){

    $request->validate([
      'quotation_no' => 'required|integer',
      'customer_id' => 'required|integer',
      'quotation_date' => 'required|string',
      'quotation_exdate' => 'required|string',
      'currency' => 'required|string|max:32',
      'memo' => 'nullable|string',
      'products' => 'required|array',
      'descriptions' => 'required|array',
      'quantities' => 'required|array',
      'prices' => 'required|array',
      'units' => 'required|array',
      'taxs' => 'required|array',
      'units' => 'required|array',
    ]);


    foreach($request->products as $k=>$product){

        Quotation::insert([
          'quotation_no'=>$request['quotation_no'],
          'customer_id'=>$request['customer_id'],
          'quotation_date'=>$request['quotation_date'],
          'quotation_exdate'=>$request['quotation_exdate'],
          'currency'=>$request['currency'],
          'memo'=>$request['memo'],
          'product_id'=>$request['products'][$k],
          'description'=>$request['descriptions'][$k],
          'quantity'=>$request['quantities'][$k],
          'price'=>$request['prices'][$k],
          'unit'=>$request['units'][$k],
          'tax'=>$request['taxs'][$k],
          'total'=>$request['totals'][$k],
          'created_at'=>Carbon::now(),
        ]);

    }

    return back()->with('success' , 'Quotation  succesfully Created');
  }


  public function edit(Quotation $quotation){
    $quotations=Quotation::where('quotation_no',$quotation->quotation_no)->get();
    return view('dashboard.quotation.edit',[
      'customers' => Customer::all(),
      'products' => ProductModel::all(),
      'units' => UnitModel::all(),
      'taxs' => TaxModel::all(),
      'quotation' => $quotation,
      'quotations' => $quotations
    ]);
  }


  public function update(Request $request, Quotation $quotation){

    $request->validate([
      'quotation_no' => 'required|integer',
      'customer_id' => 'required|integer',
      'quotation_date' => 'required|string',
      'quotation_exdate' => 'required|string',
      'currency' => 'required|string|max:32',
      'memo' => 'nullable|string',
      'products' => 'required|array',
      'descriptions' => 'required|array',
      'quantities' => 'required|array',
      'prices' => 'required|array',
      'units' => 'required|array',
      'taxs' => 'required|array',
      'units' => 'required|array',
    ]);
//dd($request);

    foreach($request->products as $k=>$product){
        Quotation::where([
            'quotation_no' => $quotation->quotation_no,
            'customer_id' => $quotation->customer_id,
            'product_id' => $product
          ])->update([
          'quotation_no'=>$quotation->quotation_no,
          'customer_id'=>$request['customer_id'],
          'quotation_date'=>$request['quotation_date'],
          'quotation_exdate'=>$request['quotation_exdate'],
          'currency'=>$request['currency'],
          'memo'=>$request['memo'],
          'product_id'=>$request['products'][$k],
          'description'=>$request['descriptions'][$k],
          'quantity'=>$request['quantities'][$k],
          'price'=>$request['prices'][$k],
          'unit'=>$request['units'][$k],
          'tax'=>$request['taxs'][$k],
          'total'=>$request['totals'][$k],
          'created_at'=>$quotation->created_at,
          'updated_at'=>Carbon::now(),
        ]);

    }

    return back()->with('success' , 'Quotation  succesfully Updated');
  }




  public function destroy(Quotation $quotation){
    Quotation::where('quotation_no',$quotation->quotation_no)->delete();
    return back()->with('success' , 'Quotation  succesfully Delated');
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



}
