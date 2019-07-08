<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DepartmentModel;
use Carbon\Carbon;
class DepartmentController extends Controller
{
        //departments
        public function departments(){
            $departments = DepartmentModel::orderBy('id')->get();
            $no=1;
            return view('dashboard.department.departments',compact('departments','no'));
        } 
        //departments
        public function adddepartments(){
            return view('dashboard.department.adddepartment');
        } 

         //Department form
     public function adddepartmentsform(Request $req){
        $this->validate($req,[
            'department'=>'required',
           ]);
           DepartmentModel::insert(             
            [
                'department_name'=>$req['department'],
                'created_at'=>Carbon::now(),
            ]);
            session()->flash('success' , 'Department  succesfully Created');
            return back();
    }
         //Department View
         public function editdepartments($id){
            $departments =DepartmentModel::find($id);
           return view('dashboard.department.editdepartment',compact('departments'));
       }
       public function editdepartmentsform(Request $req){
        DepartmentModel::find($req['id'])->update(             
           [
               'department_name'=>$req['department'],
               'created_at'=>Carbon::now(),
           ]);
           session()->flash('success' , 'Department Updated succesfully Updated');
       return back();
   }
         //Department Delete
         public function deletedepartments($id){
            DepartmentModel::find($id)->delete();
             session()->flash('success' , 'Department Succesfully Deleted');
             return back();
         }
}
