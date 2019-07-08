<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompanySettingModel;
use Image;
use Carbon\Carbon;
class CompanyController extends Controller
{
        //company
        public function company(){
            $company=CompanySettingModel::find(1);
            return view('dashboard.company.company',compact('company'));
        }
        public function editcompanyform(Request $req){
            $insert=CompanySettingModel::find($req['id'])->update(             
                [
                    'company_name'=>$req['name'],
                    'company_address'=>$req['address'],
                    'company_city'=>'city',
                    'company_region'=>$req['region'],
                    'company_country'=>$req['country'],
                    'company_postbox'=>$req['postbox'],
                    'company_phone'=>$req['phone'],
                    'company_email'=>$req['email'],
                    'company_tax'=>$req['taxid'],
                    'company_data_share'=>$req['data_share'],
                    'company_logo'=>'default.png',
                    'created_at'=>Carbon::now(),
                ]);
                
                if($req->hasFile('files')){
    
                    $image= $req->file('files');
                    $imageName= 'sett-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
                    Image::make($image)->resize(300,200)->save(base_path('public/uploads/company'.$imageName));
    
                    CompanySettingModel::where('id',$insert)->update([
                        'company_logo'=> $imageName,
                    ]);
                };
                session()->flash('success' , 'Company Details succesfully added');
                return back();
        }
}
