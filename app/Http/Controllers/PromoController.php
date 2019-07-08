<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PromoModel;
use App\AccountModel;
Use Carbon\Carbon;
class PromoController extends Controller
{
        //promo
        public function promo(){
            $promos=PromoModel::orderBy('id','DESC')->get();
            $no=1;
            return view('dashboard.promo.promo',compact('promos','no'));
        }
            //Add addpromo
    public function addpromo(){
        $accounts =AccountModel::orderBy('id','DESC')->get();
        return view('dashboard.promo.addpromo',compact('accounts'));
    }
    public function addpromoform(Request $req){
        $this->validate($req,[
            'code'=>'required',
            'amount'=>'required',
            'qty'=>'required',
            'valid'=>'required',
            'link_ac'=>'required',
            'note'=>'required',
            'pay_acc'=>'required',
           ]);
           PromoModel::insert(             
            [
                'promo_code'=>$req['code'],
                'promo_amount'=>$req['amount'],
                'promo_quantity'=>'qty',
                'promo_valid'=>$req['valid'],
                'promo_link_account'=>$req['link_ac'],
                'promo_note'=>$req['note'],
                'promo_account'=>$req['pay_acc'],
                'created_at'=>Carbon::now(),
            ]);
            session()->flash('success' , 'Purches  succesfully Created');
            return back();						
    }
        //Promo Delete
        public function deletepromo($id){
           PromoModel::find($id)->delete();
            session()->flash('success' , 'Promo succesfully Deleted');
            return back();
        }
}
