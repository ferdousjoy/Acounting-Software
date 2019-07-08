<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoleModel;
use App\DepartmentModel;
use App\EmployeeModel;
use App\User;
use Carbon\Carbon;
use Image;
use Auth;
use Hash;
class EmployeeController extends Controller
{
        //employeepermission
        public function employeepermission(){
            return view('dashboard.employee.employeepermission');
        }
        //employeeslist
        public function employeeslist(){
            $employees=EmployeeModel::orderBy('id','DESC')->get();
            $no=1;
            return view('dashboard.employee.employeeslist',compact('employees','no'));
        }
        //employeeslist
        public function addemployeeslist (){
            $roles=RoleModel::orderBy('id')->get();
            $dept=DepartmentModel::orderBy('id')->get();
            return view('dashboard.employee.employeeslistadd',compact('roles','dept'));
        }
        //change/password
        function ChangePassword(Request $request){

          if (Hash::check($request->current_password,Auth::user()->password)) {
               User::find(Auth::id())->update([
              'password' => bcrypt($request->password)
            ]);
             $request->session()->flash('success', 'Password has changed succesfully');
              return redirect('changepassword');


          } else {
              // $request->session()->flash('error', 'Password does not match');
              // return redirect('changepassword');
              echo "Your Current password does not match";
          }
        }
        //aDD eMPLOYEE form
    public function addemployeeslistform(Request $req){
        $this->validate($req,[
            'username'=>'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', ],
            'location'=>'required',
            'name'=>'required',
            'address'=>'required',
            'city'=>'required',
            'region'=>'required',
            'country'=>'required',
            'postbox'=>'required',
            'phone'=>'required',
            'salary'=>'required',
            'commission'=>'required',
            'department'=>'required',
            'joiningdate'=>'required',
           ]);
           EmployeeModel::insert(
            [
                'user_id'=>$req['username'],
                'email'=>$req['email'],
                'password'=>hash::make($req['password']),
                'name'=>$req['name'],
                'user_phone'=>$req['phone'],
                'joiningdate'=>$req['joiningdate'],
                'user_address'=>$req['address'],
                'user_region'=>$req['region'],
                'user_city'=>$req['city'],
                'user_role'=>$req['user_role'],
                'user_country'=>$req['country'],
                'business_location'=>$req['location'],
                'postbox'=>$req['postbox'],
                'user_salery'=>$req['salary'],
                'sales_commission'=>$req['commission'],
                'department'=>$req['department'],
                'created_at'=>Carbon::now(),
            ]);
            session()->flash('success' , 'Employee  succesfully Created');
            return back();
    }

    //ChangePasswordForm
         function ChangePasswordForm(){
        return view('dashboard.user.changepassword');
    }
             //deleteinvoice
             public function viewemployee($id){
                $employee = EmployeeModel::find($id);
                return view('dashboard.employee.viewemployeeslist',compact('employee'));
             }

//user table
public function userprofile()
{
  $user=Auth::user()->name;
  $email=Auth::user()->email;
  $phone=Auth::user()->phone;
  $img=Auth::user()->user_image;
  return view('dashboard.user.userprofile',compact('user','email','phone','img'));
}
             public function user(){
                return view('dashboard.user.createuser');
             }

             function useradd(Request $req){


                if($req->hasFile('user_image')){
                      $ban_image=$req->file('user_image');
                      $filename= str_random(4).'.'.$ban_image->getClientOriginalExtension();
                      Image::make($ban_image)->resize(400,400)->save(base_path('public/user_image/'.$filename),60);
                      User::insert(
                       [
                           'name'=>$req['name'],
                           'full_name'=>$req['full_name'],
                           'phone'=>$req['phone'],
                           'password'=>hash::make($req['password']),
                           'email'=>$req['email'],
                           'user_role'=>$req['user_role'],
                            'user_image'=>'banner_img/'.$filename,
                           'created_at'=>Carbon::now(),
                       ]);
                       session()->flash('success' , 'Employee  succesfully Created');
                       return back();



                    }else{
                        return back();
                    }







             }
             //deleteinvoice
             public function deleteemployee($id){
                EmployeeModel::find($id)->delete();
                 session()->flash('success' , 'Employe Succesfully Deleted');
                 return back();
             }
             //Report
             //Role
             public function role(){
                 return view('dashboard.employee.addrole');
             }
             public function insertrole(Request $req){
               $this->validate($req,[
                   'Role_name'=>'required',
                  ]);
                  RoleModel::insert(
                   [
                       'Role_name'=>$req['Role_name'],
                       'created_at'=>Carbon::now(),
                   ]);
                   session()->flash('success' , 'Role succesfully Created');
                   return back();
           }


        //employeessalaries
        public function employeessalaries(){
            return view('dashboard.employee.employeessalaries');
        }
        //employeepayrolltransactions
        public function employeepayrolltransactions(){
            return view('dashboard.transaction.employeepayrolltransactions');
        }
}
