<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SupplierModel;
use App\SupplierrecordModel;
use App\CustomerModel;
use App\WarehouseModel;
use App\ProductModel;
use App\CompanySettingModel;
use App\CustomerrecordModel;
use Carbon\Carbon;
class StockController extends Controller
{
    
    //Supplier Record
    public function supplierrecord(){
        $supplierrecords=SupplierrecordModel::orderBy('id')->get();
        $no=1;
        return view('dashboard.stock.supplierrecord',compact('no','supplierrecords'));
    }
     //viewsupplierrecord View
     public function viewsupplierrecord ($id){
        $view=SupplierrecordModel::find($id);
        $company=CompanySettingModel::find('1');
       return view('dashboard.stock.viewsupplierrecord',compact('view','company'));
   }
    //viewsupplierrecord vew
    public function newsupplierrecord (){
        $warehouses=WarehouseModel::orderBy('id')->get();
       return view('dashboard.stock.newsupplierrecord',compact('warehouses'));
   }
    //viewsupplierrecord edit
    public function editsupplierrecord ($id){
       $warehouses=WarehouseModel::orderBy('id')->get();
        $editsupplier=SupplierrecordModel::find($id);
       return view('dashboard.stock.editsupplierrecord',compact('editsupplier','warehouses'));
   }
    public function editsupplierrecordform (Request $req){
       SupplierrecordModel::find($req['id'])->update(             
           [
               'billing_name'=>$req['billing_name'],
               'billing_address'=>$req['billing_address'],
               'billing_phone'=>'billing_phone',
               'billing_email'=>$req['billing_email'],
               'billing_warehouse'=>$req['warehouse'],
               'billing_supplier_no'=>$req['suppliernumber'],
               'billing_reference'=>$req['refer'],
               'billing_date'=>$req['supplierdate'],
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
               'stock_update'=>$req['stock_update'],
               'created_at'=>Carbon::now(),
           ]);
           session()->flash('success' , 'Supplier Record Updated succesfully Updated');
       return back();
   }
    //viewsupplierrecord Delete
    public function deletesupplierrecord ($id){
      SupplierrecordModel::find($id)->delete();
       session()->flash('success' , 'Supplier succesfully Deleted');
       return back();
   }
    //viewsupplierrecord  form
    public function newsupplierrecordform(Request $req){
       $this->validate($req,[
           'billing_name'=>'required',
           'billing_phone'=>'required',
           'billing_address'=>'required',
           'billing_email'=>'required',
           'warehouse'=>'required',
           'suppliernumber'=>'required',
           'product_description'=>'required',
           'discount'=>'required',
           'supplierdate'=>'required',
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
           'stock_update'=>'required',
          ]);
       SupplierrecordModel::insert(             
           [
               'billing_name'=>$req['billing_name'],
               'billing_address'=>$req['billing_address'],
               'billing_phone'=>'billing_phone',
               'billing_email'=>$req['billing_email'],
               'billing_warehouse'=>$req['warehouse'],
               'billing_supplier_no'=>$req['suppliernumber'],
               'billing_reference'=>$req['refer'],
               'billing_date'=>$req['supplierdate'],
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
               'stock_update'=>$req['stock_update'],
               'created_at'=>Carbon::now(),
           ]);
           session()->flash('success' , 'Supplier Record  succesfully Created');
           return back();
   }
    //Search
   public function search(Request $req){
           $warehouses=WarehouseModel::orderBy('id')->get();
            $search=$req['search'];
             $posts=SupplierModel::where('name','like', '%' .$search. '%')->orWhere('email','like', '%' .$search. '%')->orWhere('phone','like', '%' .$search. '%')->get();
             return view('dashboard.stock.newsupplierrecord',compact('posts','warehouses'));
       }
    //Customer Recorrd
    public function customerrecord(){
        $customers=CustomerrecordModel::orderBy('id')->get();
        $no=1;
        return view('dashboard.stock.customerrecord',compact('customers','no'));
    }
     //viewsupplierrecord View
     public function viewcustomerrecord ($id){
        $view=CustomerrecordModel::find($id);
        $company=CompanySettingModel::find('1');
       return view('dashboard.stock.viewcustomerrecord',compact('view','company'));
   }
    //viewsupplierrecord vew
    public function newcustomerrecord  (){
        $warehouses=WarehouseModel::orderBy('id')->get();
       return view('dashboard.stock.newcustomerrecord',compact('warehouses'));
   }
   
    //viewsupplierrecord Delete
    public function deletecustomerrecord ($id){
        CustomerrecordModel::find($id)->delete();
       session()->flash('success' , 'Supplier succesfully Deleted');
       return back();
   }
    //viewsupplierrecord  form
    public function newcustomerrecordform(Request $req){
       $this->validate($req,[
           'billing_name'=>'required',
           'billing_phone'=>'required',
           'billing_address'=>'required',
           'billing_email'=>'required',
           'warehouse'=>'required',
           'customernumber'=>'required',
           'product_description'=>'required',
           'discount'=>'required',
           'customerdate'=>'required',
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
           'stock_update'=>'required',
          ]);
          CustomerrecordModel::insert(             
           [
               'billing_name'=>$req['billing_name'],
               'billing_address'=>$req['billing_address'],
               'billing_phone'=>'billing_phone',
               'billing_email'=>$req['billing_email'],
               'billing_warehouse'=>$req['warehouse'],
               'billing_customer_no'=>$req['customernumber'],
               'billing_reference'=>$req['refer'],
               'billing_date'=>$req['customerdate'],
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
               'stock_update'=>$req['stock_update'],
               'created_at'=>Carbon::now(),
           ]);
           session()->flash('success' , 'Supplier Record  succesfully Created');
           return back();
   }

    //viewsupplierrecord edit
    public function editcustomerrecord ($id){
        $warehouses=WarehouseModel::orderBy('id')->get();
         $editsupplier=CustomerrecordModel::find($id);
        return view('dashboard.stock.editcustomerrecord',compact('editsupplier','warehouses'));
    }
     public function editcustomerrecordform (Request $req){
        CustomerrecordModel::find($req['id'])->update(             
            [
                'billing_name'=>$req['billing_name'],
                'billing_address'=>$req['billing_address'],
                'billing_phone'=>'billing_phone',
                'billing_email'=>$req['billing_email'],
                'billing_warehouse'=>$req['warehouse'],
                'billing_customer_no'=>$req['customernumber'],
                'billing_reference'=>$req['refer'],
                'billing_date'=>$req['customerdate'],
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
                'stock_update'=>$req['stock_update'],
                'created_at'=>Carbon::now(),
            ]);
            session()->flash('success' , 'Customer Record Updated succesfully Updated');
        return back();
    }
    //Search
   public function searchcustomer(Request $req){
           $warehouses=WarehouseModel::orderBy('id')->get();
            $search=$req['search'];
             $posts=CustomerModel::where('billing_name','like', '%' .$search. '%')->orWhere('billing_email','like', '%' .$search. '%')->orWhere('billing_phone','like', '%' .$search. '%')->get();
             return view('dashboard.stock.newcustomerrecord',compact('posts','warehouses'));
       }
    //stocktransfer
    public function stocktransfer(){
        return view('dashboard.stock.stocktransfer');
    }
    public function stocktransferform(){
        return view('dashboard.stock.stocktransfer');
    }
}
