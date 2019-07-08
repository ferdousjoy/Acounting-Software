<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\MessageModel;
use App\User;
use Carbon\Carbon;
class MessageController extends Controller
{
    //  message area
    public function message(){
        $no=1;
        $emails=User::all();
        $messages=MessageModel::where('reciever_id',Auth::id())->get();
       return view('dashboard.message.inbox',compact('messages','no','emails'));
    }
     public function messagesendform(Request $req){
            $this->validate($req,[
                'to'=>'required',
                'subject'=>'required|max:30',
                'message'=>'required',
            ],[
                'subject.max'=>'Subject may not be greater than 30 characters!'
            ]);

            MessageModel::insert([
                'sender_id'=>$req['sender'],
                'reciever_id'=>$req['to'],
                'subject'=>$req['subject'],
                'message'=>$req['message'],
                'created_at'=>Carbon::now(),
            ]);
            session()->flash('success','Message has been send');
            return back();
            
     }

     public function viewmessage($id){
         $reads=MessageModel::find($id);
         MessageModel::find($id)->update([
             'status'=>2,
         ]);
         return view('dashboard.message.read',compact('reads'));
    }


    public function deletemessage($id){
        MessageModel::find($id)->delete();
        session()->flash('success' , 'Message succesfully Deleted');
        return back();
     }
}
