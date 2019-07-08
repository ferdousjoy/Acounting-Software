<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Challan;
use App\CustomerModel;
use App\ProductModel;
use Carbon\Carbon;


class ChallanController extends Controller{

  public function index(){
    $challans=Challan::orderBy('id')->get();
    return view('dashboard.challan.index',[
      'challans' => $challans
    ]);
  }

  public function show(Challan $challan){

  }

  public function create(){
    //$warehouses=WarehouseModel::orderBy('id')->get();
    //$qoute=QuoteModel::all();

    $customers = CustomerModel::all();
    $challanLast= Challan::latest()->first();
    //dd($challanLast);
    $products=ProductModel::all();

    return view('dashboard.challan.create',[
      'products' => $products,
      'customers' => CustomerModel::all(),
      'challan_no' => (!empty($challanLast))?$challanLast->challan_no:0,
    ]);
  }


  public function store(Request $request){

  }


  public function edit(Challan $challan){

  }


  public function update(Request $request, Challan $challan){

  }




  public function destroy(Challan $challan){

  }





  public function getPoAndShiping(Request $request){
     $stringToSend = '<option value="">-Select-</option>';
     $cityLists = QuoteModel::where('country_id', $request->country_id)->get();

     foreach($cityLists->unique('purchase_order') as $cityList){
       $stringToSend = $stringToSend.'<option value="'.$cityList->purchase_order.'">'.$cityList->purchase_order.'</option>';
     }

     $customer_billing_address = CustomerModel::where('id', $request->country_id)->first();

     $stringToSend = $stringToSend.'<option value="'.$customer_billing_address->BL_Ad.'">'.$customer_billing_address->BL_Ad.'</option>';
     $stringToSend = $stringToSend.'<option value="'.$customer_billing_address->BL_Ad2.'">'.$customer_billing_address->BL_Ad2.'</option>';
     $stringToSend = $stringToSend.'<option value="'.$customer_billing_address->BL_Ad222.'">'.$customer_billing_address->BL_Ad222.'</option>';
     echo json_encode([
       '' => $stringToSend,
       '' => '',
     ]);
  }

}
