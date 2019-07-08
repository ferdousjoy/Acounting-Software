<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientModel;
use App\CustomerModel;
use App\ClientGroupModel;
use Session\Session;
use Carbon\Carbon;
class ClientController extends Controller
{
        //clientgroup
        public function clientgroup(){
            $clientgroups=ClientGroupModel::orderBy('id')->get();
            return view('dashboard.client.clientgroup',compact('clientgroups'));
        }
        //clientgroup
        public function addclientgroup(){
            return view('dashboard.client.addclientgroup');
        }
          //Client Group Add
          public function addclientgroupform(Request $req){
              $this->validate($req,[
                    'group_name'=>'required',
                    'group_desc'=>'required',
              ]);
            ClientGroupModel::insert([
                'group_name'=>$req['group_name'],
                'group_description'=>$req['group_desc'],
                'created_at'=>Carbon::now(),
            ]);
            session()->flash('success' , 'Client Group succesfully Added');
            return back();
        }       
        //Group edit
         public function editgroup($id){
            $groups=ClientGroupModel::find($id);
            return view('dashboard.client.editclientgroup',compact('groups'));
            } 
                //Edit Customer Form
        public function editgroupform(Request $req){
            ClientGroupModel::find($_POST['id'])->update([
                'group_name'=>$req['group_name'],
                'group_description'=>$req['group_desc'],
                'created_at'=>Carbon::now(),
            ]);
            session()->flash('success' , 'Group succesfully Updated');
            return back();

        }
          //Delete Group
          public function deletegroup($id){
            ClientGroupModel::findOrFail($id)->delete();
           session()->flash('success' , 'Group succesfully Added');
          return back();
      }      
        //client list
        public function clients(){
            $clients=CustomerModel::orderBy('id','DESC')->get();
            return view('dashboard.client.client',compact('clients'));
        }
        //clientgroup
        public function createclient(){
            return view('dashboard.client.createclient');
        }
        //Client add Invoice Page
        public function addclientforminvoice(Request $req){
            ClientModel::insert([
                'billing_name'=>$req['name'],
                'billing_email'=>$req['email'],
                'billing_phone'=>$req['phone'],
                'billing_address'=>$req['address'],
                'billing_city'=>$req['city'],
                'billing_region'=>$req['region'],
                'billing_country'=>$req['country'],
                'billing_post'=>$req['postbox'],
                'billing_company'=>$req['company'],
                'billing_taxid'=>$req['taxid'],
                'billing_companygroup'=>$req['customergroup'],
                'shipping_name'=>$req['name_s'],
                'shipping_email'=>$req['email_s'],
                'shipping_phone'=>$req['phone_s'],
                'shipping_address'=>$req['address_s'],
                'shipping_city'=>$req['city_s'],
                'shipping_region'=>$req['region_s'],
                'shipping_country'=>$req['country_s'],
                'shipping_post'=>$req['postbox_s'],
                'created_at'=>Carbon::now(),
            ]);
            session()->flash('success' , 'Client succesfully Added');
            return back();
        }
        //Client Add Quote PAge
        public function addclientformquote(Request $req){
            ClientModel::insert([
                'billing_name'=>$req['name'],
                'billing_email'=>$req['email'],
                'billing_phone'=>$req['phone'],
                'billing_address'=>$req['address'],
                'billing_city'=>$req['city'],
                'billing_region'=>$req['region'],
                'billing_country'=>$req['country'],
                'billing_post'=>$req['postbox'],
                'billing_company'=>$req['company'],
                'billing_taxid'=>$req['taxid'],
                'billing_companygroup'=>$req['customergroup'],
                'shipping_name'=>$req['name_s'],
                'shipping_email'=>$req['email_s'],
                'shipping_phone'=>$req['phone_s'],
                'shipping_address'=>$req['address_s'],
                'shipping_city'=>$req['city_s'],
                'shipping_region'=>$req['region_s'],
                'shipping_country'=>$req['country_s'],
                'shipping_post'=>$req['postbox_s'],
                'created_at'=>Carbon::now(),
            ]);
            session()->flash('success' , 'Client succesfully Added');
            return back();
        }
        //Client Add Subscription PAge
        public function addclientformsubscription(Request $req){
            ClientModel::insert([
                'billing_name'=>$req['name'],
                'billing_email'=>$req['email'],
                'billing_phone'=>$req['phone'],
                'billing_address'=>$req['address'],
                'billing_city'=>$req['city'],
                'billing_region'=>$req['region'],
                'billing_country'=>$req['country'],
                'billing_post'=>$req['postbox'],
                'billing_company'=>$req['company'],
                'billing_taxid'=>$req['taxid'],
                'billing_companygroup'=>$req['customergroup'],
                'shipping_name'=>$req['name_s'],
                'shipping_email'=>$req['email_s'],
                'shipping_phone'=>$req['phone_s'],
                'shipping_address'=>$req['address_s'],
                'shipping_city'=>$req['city_s'],
                'shipping_region'=>$req['region_s'],
                'shipping_country'=>$req['country_s'],
                'shipping_post'=>$req['postbox_s'],
                'created_at'=>Carbon::now(),
            ]);
            session()->flash('success' , 'Client succesfully Added');
            return back();
        }
}
