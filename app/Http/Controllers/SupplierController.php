<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SupplierModel;
Use Carbon\Carbon;
use Image;
class SupplierController extends Controller
{
    
    //supplierstatement
    public function supplierstatement(){
        return view('dashboard.supplier.supplierstatement');
    }
    //supplier
    public function supplier(){
        $suppliers=SupplierModel::orderBy('id','DESC')->get();
        $no=1;
        return view('dashboard.supplier.supplier',compact('suppliers','no'));
    }
        //Create createsuplier
        public function createsupplier(){
            return view('dashboard.supplier.createsupplier');
        }
        //Add Supplier Form
        public function addsupplierform(Request $req){
            $this->validate($req,[
                'name'=>'required',
                'company'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'address'=>'required',
                'city'=>'required',
                'region'=>'required',
                'country'=>'required',
                'postbox'=>'required',
                'taxid'=>'required',
               ]);
               $insert= SupplierModel::insertGetId([
                'name'=>$req['name'],
                'company'=>$req['company'],
                'phone'=>$req['phone'],
                'email'=>$req['email'],
                'address'=>$req['address'],
                'city'=>$req['city'],
                'region'=>$req['region'],
                'country'=>$req['country'],
                'postbox'=>$req['postbox'],
                'image'=>'default.png',
                'tax'=>$req['taxid'],
                'created_at'=>Carbon::now(),
            ]);
            if($req->hasFile('files')){

                $image= $req->file('files');
                $imageName= 'supp-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,200)->save(base_path('public/uploads/supplier/'.$imageName));

                SupplierModel::where('id',$insert)->update([
                    'image'=> $imageName,
                ]);
            };
            session()->flash('success' , 'Supplier succesfully Added');
            return back();
        }
        //View Supplier
        public function viewsupplier($id){
            $viewsupplier=SupplierModel::find($id);
            return view('dashboard.supplier.viewsupplier',compact('viewsupplier'));
        }
        //Edit Supplier
        public function editsupplier($id){
            $editsupplier=SupplierModel::find($id);
            return view('dashboard.supplier.editsupplier',compact('editsupplier'));
        }
        //Supplier Edit
           public function editsupplierform(Request $req){
            SupplierModel::find($_POST['id'])->update([
                'name'=>$req['name'],
                'company'=>$req['company'],
                'phone'=>$req['phone'],
                'email'=>$req['email'],
                'address'=>$req['address'],
                'city'=>$req['city'],
                'region'=>$req['region'],
                'country'=>$req['country'],
                'postbox'=>$req['postbox'],
                'tax'=>$req['taxid'],
                'created_at'=>Carbon::now(),
            ]);
            session()->flash('success' , 'Suplier succesfully Updated');
            return back();
        }

            //Supplier Delete
    public function deletesupplier($id){
        SupplierModel::findOrFail($id)->delete();
       session()->flash('success' , 'Supplier succesfully Deleted');
      return back();
  }
}
