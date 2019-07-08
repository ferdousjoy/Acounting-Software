<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDoModel;
use App\CustomerModel;
use Carbon\Carbon;
class ToDoController extends Controller
{
      //todolist
      public function todolist(){
        $todolists=ToDoModel::orderBy('id')->get();
        $no=1;
        return view('dashboard.todo.todolist',compact('todolists','no'));
    }
    //Add Todo
      public function addtodo(){
        $customers=CustomerModel::orderBy('id')->get();
        return view('dashboard.todo.addtodo',compact('customers'));
    }
    //Add Todo
      public function edittodo($id){
        $customers=CustomerModel::orderBy('id')->get();
        $todoedit=ToDoModel::find($id);
        return view('dashboard.todo.edittodo',compact('customers','todoedit'));
    }
    public function edittodoform(Request $req){
      ToDoModel::find($_POST['id'])->update([
          'task_title'=>$req['title'],
          'task_status'=>$req['status'],
          'task_priority'=>$req['priority'],
          'task_start_date'=>$req['sdate'],
          'task_due_date'=>$req['ddate'],
          'task_assign_to'=>json_encode($req['employee']),
          'task_description'=>$req['notes'],
          'created_at'=>Carbon::now(),
      ]);
      session()->flash('success' , 'To Do succesfully Updated');
      return back();
  }

    //Add To DO Form
    public function addtodoform(Request $req){
      $this->validate($req,[
        'title'=>'required',
        'status'=>'required',
        'priority'=>'required',
        'sdate'=>'required',
        'ddate'=>'required',
        'employee'=>'required',
        'notes'=>'required',
       ]);
      ToDoModel::insert([
          'task_title'=>$req['title'],
          'task_status'=>$req['status'],
          'task_priority'=>$req['priority'],
          'task_start_date'=>$req['sdate'],
          'task_due_date'=>$req['ddate'],
          'task_assign_to'=>json_encode($req['employee']),
          'task_description'=>$req['notes'],
          'created_at'=>Carbon::now(),
      ]);
      session()->flash('success' , 'Task succesfully Created');
      return back();
  }
    //Delete 
    public function deletetodo($id){
      ToDoModel::find($id)->delete();
      session()->flash('success' , 'Task succesfully Delete');
      return back();
  }
  
}
