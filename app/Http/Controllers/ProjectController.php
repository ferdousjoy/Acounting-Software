<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectModel;
use App\CustomerModel;
use Carbon\Carbon;
class ProjectController extends Controller
{
        //Add addproject
        public function addproject(){
            $customers=CustomerModel::orderBy('id')->get();
            return view('dashboard.project.addproject',compact('customers'));
        }
        //Add addproject
        public function addprojectform(Request $req){
            ProjectModel::insert([
                'project_title'=>$req['title'],
                'project_status'=>$req['status'],
                'project_progress'=>$req['progress'],
                'project_priority'=>$req['priority'],
                'project_customer'=>$req['projectcustomer'],
                'project_customer_view'=>$req['customerview'],
                'project_customer_comment'=>$req['customercomment'],
                'project_budget'=>$req['budget'],
                'project_start_date'=>$req['sdate'],
                'project_due_date'=>$req['ddate'],
                'project_assign_to'=>json_encode($req['employee']),
                'project_phase'=>$req['phase'],
                'project_link_to_calender'=>$req['link_to_cal'],
                'project_tags'=>$req['tags'],
                'project_notes'=>$req['notes'],
                'project_task_communication'=>$req['ptype'],
                'created_at'=>Carbon::now(),
            ]);
            session()->flash('success' , 'Project succesfully Created');
            return back();
        }

            //projectlist
    public function projectlist(){
        $projects =ProjectModel::orderBy('id','DESC')->get();
        return view('dashboard.project.projectlist',compact('projects'));
    }
            //project Edit
    public function editproject($id){
        $customers=CustomerModel::orderBy('id')->get();
        $projectedit =ProjectModel::find($id);
        return view('dashboard.project.editproject',compact('projectedit','customers'));
    }
    public function editprojectform(Request $req){
        ProjectModel::find($_POST['p_id'])->update([
            'project_title'=>$req['title'],
            'project_status'=>$req['status'],
            'project_progress'=>$req['progress'],
            'project_priority'=>$req['priority'],
            'project_customer'=>$req['customer'],
            'project_customer_view'=>$req['customerview'],
            'project_customer_comment'=>$req['customercomment'],
            'project_budget'=>$req['budget'],
            'project_start_date'=>$req['sdate'],
            'project_due_date'=>$req['ddate'],
            'project_assign_to'=>json_encode($req['employee']),
            'project_phase'=>$req['phase'],
            'project_link_to_calender'=>$req['link_to_cal'],
            'project_tags'=>$req['tags'],
            'project_notes'=>$req['notes'],
            'project_task_communication'=>$req['ptype'],
            'created_at'=>Carbon::now(),
        ]);
        session()->flash('success' , 'Project succesfully Updated');
        return back();
    }
    public function destroy($id){
        $projects =ProjectModel::find($id)->delete();
        session()->flash('success' , 'Project succesfully Deleted');
        return back();
    }
}
