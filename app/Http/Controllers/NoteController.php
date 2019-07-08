<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerModel;
use App\WarehouseModel;
use App\CompanySettingModel;
use App\CreditnotesModel;
use App\NoteModel;
use Carbon\Carbon;
class NoteController extends Controller
{
        //Credit notes
        public function creditnotes(){
            $credits=CreditnotesModel::orderBy('id')->get();
            $no=1;
            return view('dashboard.notes.creditnotes',compact('credits','no'));
        }
         //invoice View
     public function viewcreditnotes($id){
        $invoice=CreditnotesModel::find($id);
        $company=CompanySettingModel::find('1');
       return view('dashboard.notes.viewcreditnote',compact('invoice','company'));
   }
    //newinvoice
    public function newcreditnotes(){
        $warehouses=WarehouseModel::orderBy('id')->get();
       return view('dashboard.notes.newcreditnote',compact('warehouses'));
   }
    //editinvoice
    public function editcreditnotes($id){
       $warehouses=WarehouseModel::orderBy('id')->get();
        $edit=CreditnotesModel::find($id);
       return view('dashboard.notes.editcreditnote',compact('edit','warehouses'));
   }
    public function editcreditnotesform(Request $req){
        CreditnotesModel::find($req['id'])->update(             
           [
               'billing_name'=>$req['billing_name'],
               'billing_address'=>$req['billing_address'],
               'billing_phone'=>'billing_phone',
               'billing_email'=>$req['billing_email'],
               'billing_warehouse'=>$req['warehouse'],
               'billing_creditnote_no'=>$req['invocienomber'],
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
           session()->flash('success' , 'Creditnote Updated succesfully Updated');
       return back();
   }
    //deleteinvoice
    public function deletecreditnotes($id){
        CreditnotesModel::find($id)->delete();
       session()->flash('success' , 'Creditnote Category succesfully Deleted');
       return back();
   }
    //newinvoice form
    public function newcreditnotesform(Request $req){
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
          CreditnotesModel::insert(             
           [
               'billing_name'=>$req['billing_name'],
               'billing_address'=>$req['billing_address'],
               'billing_phone'=>'billing_phone',
               'billing_email'=>$req['billing_email'],
               'billing_warehouse'=>$req['warehouse'],
               'billing_creditnote_no'=>$req['invocienomber'],
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
           session()->flash('success' , 'Creditnotes  succesfully Created');
           return back();
   }
    //Search
   public function search(Request $req){
           $warehouses=WarehouseModel::orderBy('id')->get();
            $search=$req['search'];
             $posts=CustomerModel::where('billing_name','like', '%' .$search. '%')->orWhere('billing_email','like', '%' .$search. '%')->orWhere('billing_phone','like', '%' .$search. '%')->get();
             return view('dashboard.notes.newcreditnote',compact('posts','warehouses'));
       }
        //notes
        public function notes(){
            $notes=NoteModel::orderBy('id','DESC')->get();
            $no=1;
            return view('dashboard.notes.notes',compact('notes','no'));
        }
        //notes
        public function addnotes(){
            return view('dashboard.notes.addnote');
        }
       //Note form
     public function notesform(Request $req){
        $this->validate($req,[
            'title'=>'required',
            'details'=>'required',
           ]);
           NoteModel::insert(             
            [
                'title'=>$req['title'],
                'details'=>$req['details'],
                'created_at'=>Carbon::now(),
            ]);
            session()->flash('success' , 'Note  succesfully Created');
            return back();
    }
         //Note View
         public function viewnotes($id){
            $notes=NoteModel::find($id);
           return view('dashboard.notes.viewnote',compact('notes'));
       }
       public function editnotesform(Request $req){
        CreditnotesModel::find($req['id'])->update(             
           [
               'title'=>$req['title'],
               'details'=>'details',
               'created_at'=>Carbon::now(),
           ]);
           session()->flash('success' , 'Note Updated succesfully Updated');
       return back();
   }
         //delete Note
         public function deletenote($id){
            NoteModel::find($id)->delete();
             session()->flash('success' , 'Notes Succesfully Deleted');
             return back();
         }
}
