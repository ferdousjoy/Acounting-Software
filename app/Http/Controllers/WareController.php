<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WarehouseModel;
use App\ProductModel;
use Carbon\Carbon;
class WareController extends Controller
{
       //Default werehouse
       public function defaultwarehouse(){
        return view('dashboard.warehouse.defaultwarehouse');
    }
    //WareHouse
       public function warehouse(){
           $warehouses=WarehouseModel::orderBy('id')->get();
           $no=1;
           $totalproduct=ProductModel::orderBy('product_warehouse');
        return view('dashboard.warehouse.warehouse',compact('warehouses','no','totalproduct'));
    }
    //WareHouse
       public function warehouseadd(){
        return view('dashboard.warehouse.addwarehouse');
    }
    //WareHouse Edit
    public function warehouseaddform(Request $req){
        $this->validate($req,[
            'ware_name'=>'required',
            'ware_desc'=>'required',
            'location'=>'required',
           ]);
           WarehouseModel::insert([
            'name'=>$req['ware_name'],
            'description'=>$req['ware_desc'],
            'location'=>$req['location'],
            'created_at'=>Carbon::now(),
        ]);
        session()->flash('success' , 'Warehouse succesfully Added');
        return back();
    }
    //WareHouse Edit
       public function editwarehouseform(){
        WarehouseModel::find($_POST['id'])->update([
            'name'=>$req['ware_name'],
            'description'=>$req['war_desc'],
            'location'=>$req['locarion'],
            'created_at'=>Carbon::now(),
        ]);
        session()->flash('success' , 'Warehouse succesfully Updated');
        return back();
    }
    //WareHouse Delete
    public function deletewarehouse($id){
        WarehouseModel::findOrFail($id)->delete();
       session()->flash('success' , 'Warehouse succesfully Deleted');
      return back();
  }
}
