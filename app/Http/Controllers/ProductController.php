<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategoryModel;
use App\ProductModel;
use App\AccountModel;
use App\AssetModel;
use App\CustomerModel;
use App\InvestModel;
use App\VendorModel;
use App\InvoiceModel;
use App\UnitModel;
use App\TaxModel;
use App\QuoteModel;
use App\BankModel;
use App\Country;
use App\City;
use Carbon\Carbon;
use Image;
use DB;
class ProductController extends Controller
{
    //prodectcategory
    public function productcategory(){
        $ProductCategory=ProductCategoryModel::orderBy('id','DESC')->get();
        $no=1;
        return view('dashboard.product.productcategory',compact('ProductCategory','no'));
    }
    //product

    //project Edit
    public function editproductcategory($id){
        $EditProductCategory =ProductCategoryModel::find($id);
        return view('dashboard.product.editproductcategory',compact('EditProductCategory'));
    }
    //project Edit Form
    public function editproductcategoryform(Request $req){
        ProductCategoryModel::find($_POST['id'])->update([
            'category_name'=>$req['product_catname'],
            'category_description'=>$req['product_catdesc'],
            'created_at'=>Carbon::now(),
        ]);
        session()->flash('success' , 'Product Category succesfully Updated');
        return back();
    }
    //Product Category Delete
    public function deleteproductcategory($id){
        $projects =ProductCategoryModel::find($id)->delete();
        session()->flash('success' , 'Product Category succesfully Deleted');
        return back();
    }
    //prodectcat
    public function productcat(){
        return view('dashboard.product.productcat');
    }


    //Add prodectcategory
    public function addproductcategory(){
        return view('dashboard.product.addproductcategory');
    }
    public function addproductcategoryform(Request $req){
        ProductCategoryModel::insert([
            'category_name'=>$req['product_catname'],
            'category_description'=>$req['product_catdesc'],
            'created_at'=>Carbon::now(),
        ]);
        session()->flash('success' , 'Customer succesfully Updated');
        return back();
    }
    //productasservicesetting
    public function productasservicesetting(){
        return view('dashboard.product.productasservicesetting');
    }
    //productsstatement
    public function productsstatement(){
        return view('dashboard.product.productsstatement');
    }
    //Products
    public function products(){
        $allproducts=ProductModel::orderBy('id','DESC')->get();
        $no=1;
        return view('dashboard.product.products',compact('allproducts','no'));
    }
    //vendors
     public function products2(){
            $ven=VendorModel::all();
        $no=1;
        return view('dashboard.product.products2',compact('ven','no'));
    }
public function editvendor($id)
{
  $country=Country::all();
  $bank=BankModel::all();
  $ven=VendorModel::find($id);
return view('dashboard.product.Editvendor',compact('ven','country','bank'));
}

function updatevendor(Request $req){
  VendorModel::findOrFail($req->product_id)->update([
    'name'=>$req['name'],
    'company'=>$req['company'],
    'phone'=>$req['phone2'],
    'phone2'=>$req['phone'],
    'email'=>$req['email'],
    'address'=>$req['address'],
    'city'=>$req['city'],
    'region'=>$req['region'],
    'country'=>$req['country'],
    'postbox'=>$req['postbox'],
    'taxid'=>$req['taxid'],
    'bank_name'=>$req['bank_name'],
    'bank_name1'=>$req['bank_name1'],
    'bank_name2'=>$req['bank_name2'],
    'bank_account'=>$req['bank_account'],
    'bank_account2'=>$req['bank_account2'],
    'bank_account1'=>$req['bank_account1'],
    'bank_branch'=>$req['bank_branch'],
    'bank_branch1'=>$req['bank_branch1'],
    'bank_branch2'=>$req['bank_branch2'],
   'created_at'=>Carbon::now(),

]);

session()->flash('success' , 'Vendor succesfully Updated');
return back();
}



    public function viewProduct2(){
           $ven=ProductModel::all();
        $no=1;
       return view('dashboard.product.viewproduct',compact('ven','no'));

   }


    public function units(Request $req){

        UnitModel::insert(
            [
                'unit_name'=>$req['unit_name'],

               'created_at'=>Carbon::now(),
            ]);

            session()->flash('success' , 'Unit succesfully added');
            return back();

    }
       public function update_units(Request $update){
           $update->validate([
               "Uname"=>"required",
            ],[
                "Uname.required"=>"Please input unit name",
            ]);



            UnitModel::find($update->Uid)->update([
                "unit_name"=>$update->Uname,
                "created_at"=>Carbon::now(),
            ]);

        return back()->with('update','One unit name has been updated');

    }
    //all delete
    //all edit
      public function update_account(Request $update){
           $update->validate([
               "account_name"=>"required",
               "description"=>"required",
            ],[
                "account_name.required"=>"Please input Account Title",
                "description.required"=>"Please input Description",
            ]);



            AccountModel::find($update->Uid)->update([
                "description"=>$update->description,
                "account_name"=>$update->account_name,
                "created_at"=>Carbon::now(),
            ]);

        return back()->with('update','One unit name has been updated');

    }
      public function update_asset(Request $update){
          $update->validate([
              "name"=>"required",
              "rate"=>"required",
              "price"=>"required",
              "remarks"=>"required",

            ]);



            AssetModel::find($update->Uid)->update([
                "asset_name"=>$update->asset_name,
                "rate"=>$update->rate,
                "price"=>$update->price,
                "remarks"=>$update->remarks,
                "created_at"=>Carbon::now(),
            ]);

        return back()->with('update','One unit name has been updated');

    }
         public function update_invest(Request $update){
          $update->validate([
              "name"=>"required",
              "rate"=>"required",
              "price"=>"required",
              "remarks"=>"required",

            ]);



            InvestModel::find($update->Uid)->update([
                "name"=>$update->name,
                "rate"=>$update->rate,
                "price"=>$update->price,
                "remarks"=>$update->remarks,
                "created_at"=>Carbon::now(),
            ]);

        return back()->with('update','One unit name has been updated');

    }
    //all edit

     public function deleteaccount($id){
        AccountModel::findorfail($id)->delete();
        session()->flash('success' , 'Purches succesfully Deleted');
        return back();
   }
    //all delete

     public function deleteunit($id){
         DB::table('unit_models')->where('id',$id)->delete();
        // UnitModel::findorfail($id)->delete();
        session()->flash('success' , 'Item succesfully Deleted');
        return back();
   }

     public function deleteasset($id){
         DB::table('asset_models')->where('id',$id)->delete();
        session()->flash('success' , 'Item succesfully Deleted');
        return back();
   }
      public function deleteinvest($id){
         DB::table('invest_models')->where('id',$id)->delete();
        session()->flash('success' , 'Item succesfully Deleted');
        return back();
   }

    public function addproduct(){
        $ProductCategory=ProductCategoryModel::orderBy('id','DESC')->get();
        $lists=UnitModel::all();
        $vendor=VendorModel::all();
        $account=AccountModel::where('account_type', 1)->get();
        $account2=AccountModel::where('account_type', 2)->get();
        $tax=TaxModel::all();
         return view('dashboard.product.addproduct',compact('ProductCategory','lists','vendor','account','tax','account2'));
    }
       //Add buy Product Form


public function addbuyproduct(){
      $pro=ProductModel::all();
     return view('dashboard.product.buyproduct',compact('pro'));
}





     //Add Product Form
     public function addproduct2(){
         $country=Country::all();
         $bank=BankModel::all();
         return view('dashboard.product.viewVendor',compact('country','bank'));
    }



public function getlist(Request $request){
  $stringToSend = '<option value="">-Select-</option>';
  $cityLists = ProductModel::where('name', $request->country_id)->get();
  foreach($cityLists as $cityList){
  $stringToSend = $stringToSend.'<textarea value="'.$cityList->id.'">'.$cityList->Describtion.'</textarea>';

  }
  echo $stringToSend;
}

public function getshiplist(Request $request){
  $stringToSend = '<option value="">-Select-</option>';
  $cityLists = CustomerModel::where('id', $request->country_id)->get();
  foreach($cityLists as $cityList){
    $stringToSend = $stringToSend.'<option value="'.$cityList->contact2.'">'.$cityList->contact2.'</option>';
    $stringToSend = $stringToSend.'<option value="'.$cityList->contact.'">'.$cityList->contact.'</option>';
    $stringToSend = $stringToSend.'<option value="'.$cityList->contact_ship.'">'.$cityList->contact_ship.'</option>';
    $stringToSend = $stringToSend.'<option value="'.$cityList->contact_ship2.'">'.$cityList->contact_ship2.'</option>';

  }
  echo $stringToSend;
}
public function getAjaxProduct(Request $request){
    $product = ProductModel::where('name', $request->country_id)->first();
    //$product = ProductModel::find($request->product_id);
    echo json_encode([
      'description' => $product->Describtion,
      'price' => (!empty($product->price))?$product->price:0,
      'tax' => (!empty($product->sales_tax))?$product->sales_tax:0,
      'unit' =>$product->unit,
    ]);
}


      public function getcitylist(Request $request){
        $stringToSend = '<option value="">-Select-</option>';
        $cityLists = City::where('country_id', $request->country_id)->get();
        foreach($cityLists as $cityList){
        $stringToSend = $stringToSend.'<option value="'.$cityList->id.'">'.$cityList->name.'</option>';
        }
        echo $stringToSend;
    }


  public function getcitylist2(Request $request){
   $stringToSend = '<option value="">-Select-</option>';
   $cityLists = QuoteModel::where('country_id', $request->country_id)->get();

   foreach($cityLists->unique('purchase_order') as $cityList){
     $stringToSend = $stringToSend.'<option value="'.$cityList->purchase_order.'">'.$cityList->purchase_order.'</option>';
   }
   $stringToSend = $stringToSend.'###';
   $customer_billing_address = CustomerModel::where('id', $request->country_id)->first();
   $stringToSend = $stringToSend.'<option value="'.$customer_billing_address->BL_Ad.'">'.$customer_billing_address->BL_Ad.'</option>';
   $stringToSend = $stringToSend.'<option value="'.$customer_billing_address->BL_Ad2.'">'.$customer_billing_address->BL_Ad2.'</option>';
   $stringToSend = $stringToSend.'<option value="'.$customer_billing_address->BL_Ad222.'">'.$customer_billing_address->BL_Ad222.'</option>';
   echo $stringToSend;
}

public function getaddress(Request $request){

  $stringToSend = '<option value="">-Select-</option>';
  $cityLists = CustomerModel::where('customer', $request->country_id)->get();
  foreach($cityLists as $cityList){
  $stringToSend = $stringToSend.'<textarea value="contact">'.$cityList->contact.'</textarea>';
  $stringToSend2 = $stringToSend.'<textarea value="BL_Ad">'.$cityList->BL_Ad.'</textarea>';

  }
 echo $stringToSend;
 echo $stringToSend2;

 }



public function getcitylist3(Request $request){

  $stringToSend =$stringToSend2=$stringToSend3= '<option value="">-Select-</option>';
  $products = InvoiceModel::where('customer', $request->customer_id)->get();
  $productsId=[];

  foreach($products as $product){
  $stringToSend = $stringToSend.'<option value="'.$product->id.'">'.$product->po_number.'</option>';
  $stringToSend3 = $stringToSend3.'<option value="'.$product->chalan_name.'">'.$product->chalan_name.'</option>';
  $productsId[] =$product->product;
  }

  $products = ProductModel::find($productsId);
    foreach($products as $product){
        $stringToSend2 = $stringToSend2.'<option value="'.$product->id.'">'.$product->name.'</option>';

  }

  echo json_encode([
      'products'=> $stringToSend2 ,
      'chalan'=> $stringToSend3 ,
      'pono'=>$stringToSend,
]);

}

public function insertbuyproduct(Request $req){
    $insert=ProductModel::insert(
        [
            'name'=>$req['name'],
            'buyprice'=>$req['buyprice'],
            'created_at'=>Carbon::now(),
        ]);

        session()->flash('success' , 'Product succesfully added');
        return back();

}


    public function productaddform(Request $req){

        $insert=ProductModel::insert(
            [
                'unit'=>$req['unit'],
                'name'=>$req['name'],
                'price'=>$req['price'],
                'Describtion'=>$req['Describtion'],
                'income_account'=>$req['income_account'],
                'expense_account'=>$req['expense_account'],
                'sales_tax'=>$req['sales_tax'],
                'created_at'=>Carbon::now(),
            ]);

            session()->flash('success' , 'Product succesfully added');
            return back();

    }
    //Insert Vendor
        public function productaddform2(Request $req){
        $this->validate($req,[
            'name'=>'nullable',
            'phone'=>'nullable|integer',
            'phone2'=>'nullable|integer',
            'address'=>'nullable',
            'company'=>'nullable',
            'email'=>'nullable|email',
            'city'=>'nullable',
            'region'=>'nullable',
            'country'=>'nullable',
            'postbox'=>'nullable',
            'taxid'=>'nullable',
            'bank_branch'=>'nullable',
            'bank_name'=>'nullable',
            'bank_account2'=>'nullable',
            'bank_account1'=>'nullable',
            'bank_branch1'=>'nullable',
            'bank_branch2'=>'nullable',
            'bank_name1'=>'nullable',
            'bank_name2'=>'nullable',

          ]);

        $insert=VendorModel::insert([
                'name'=>$req['name'],
                'company'=>$req['company'],
                'phone'=>$req['phone2'],
                'phone2'=>$req['phone'],
                'email'=>$req['email'],
                'address'=>$req['address'],
                'city'=>$req['city'],
                'region'=>$req['region'],
                'country'=>$req['country'],
                'postbox'=>$req['postbox'],
                'taxid'=>$req['taxid'],
                'bank_name'=>$req['bank_name'],
                'bank_name1'=>$req['bank_name1'],
                'bank_name2'=>$req['bank_name2'],
                'bank_account'=>$req['bank_account'],
                'bank_account2'=>$req['bank_account2'],
                'bank_account1'=>$req['bank_account1'],
                'bank_branch'=>$req['bank_branch'],
                'bank_branch1'=>$req['bank_branch1'],
                'bank_branch2'=>$req['bank_branch2'],
               'created_at'=>Carbon::now(),
            ]);

            session()->flash('success' , 'Vendor succesfully added');
            return back();
    }
    //Edit Product
    public function editproduct($id){
      $ProductCategory=ProductCategoryModel::orderBy('id','DESC')->get();
      $lists=UnitModel::all();
      $vendor=VendorModel::all();
      $account=AccountModel::where('account_type', 1)->get();
      $account2=AccountModel::where('account_type', 2)->get();
      $tax=TaxModel::all();
        $editproduct=ProductModel::find($id);
        $ProductCategory=ProductCategoryModel::orderBy('id')->get();
        return view('dashboard.product.editproduct',compact('editproduct','ProductCategory','lists','vendor','account','tax','account2'));
      }
      //update product_tax
      function updateproduct(Request $req){
        ProductModel::findOrFail($req->product_id)->update([
          'unit'=>$req['unit'],
          'name'=>$req['name'],
          'price'=>$req['price'],
          'Describtion'=>$req['Description'],
          'income_account'=>$req['income_account'],
          'expense_account'=>$req['expense_account'],
          'sales_tax'=>$req['sales_tax'],
]);
session()->flash('success' , 'Product succesfully Updated');
return back();
      }
      //Edit Product Form
      public function editproductform(Request $req){

        $insert=ProductModel::find($req['id'])->update(
            [
                'product_name'=>$req['product_name'],
                'product_category'=>$req['product_cat'],
                'product_warehouse'=>'product_warehouse',
                'product_code'=>$req['product_code'],
                'product_retail_price'=>$req['product_price'],
                'product_purchase_price'=>$req['fproduct_price'],
                'product_tax_rate'=>$req['product_tax'],
                'product_discount_rate'=>$req['product_disc'],
                'product_stock_units'=>$req['product_qty'],
                'product_alert_quantity'=>$req['product_qty_alert'],
                'product_measurement_units'=>$req['unit'],
                'product_description'=>$req['product_desc'],
                'product_expire_date'=>$req['edate'],
                'product_image'=>'default.png',
                'created_at'=>Carbon::now(),
            ]);
            session()->flash('success' , 'Product succesfully Updated');
            return back();
    }
            //View Product
     public function viewproduct($id){
            $viewproducts =ProductModel::find($id);
            return view('dashboard.product.productview',compact('viewproducts'));
        }
     public function deleteproduct($id){
        ProductModel::findOrFail($id)->delete();
             session()->flash('success' , 'Product succesfully Deleted');
            return back();
        }
     //trending_products
    public function trending_products(){
         return view('dashboard.product.trending_products');
       }
     //trending_products
    public function productmeasurement(){
         return view('dashboard.product.measurement');
       }
     //trending_products
    public function productvariation(){
         return view('dashboard.product.variation');
       }
     //trending_products
    public function productvariable(){
         return view('dashboard.product.variable');
       }






   public function getProductsByPoNo(Request $request){

     $purchess=QuoteModel::where('purchase_order',$request->po_no)->get();
     echo json_encode($purchess);

   }





}
