<?php
namespace App\Http\Controllers;

use App\City;
//use App\State;
use App\Country;
use App\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;


class CustomerController extends Controller{

  public function index(){
    $customers=Customer::orderBy('id')->get();
    return view('dashboard.customer.index',[
      'customers' => $customers
    ]);
  }

  public function show(Customer $customer){
    return view('dashboard.customer.show',[
      'customer' => $customer
    ]);
  }

  public function create(){
    return view('dashboard.customer.create',[
      'countries' => Country::all(),
    ]);
  }


  public function store(Request $request){

    $request->validate([
      'name' => 'required|unique:customers|string|max:191',
      'email' => 'required|unique:customers|email|max:191',
      'phone' => 'required|unique:customers|string|max:18',
      'contact' => 'nullable|string|max:18',
      'contact2' => 'nullable|string|max:18',
      'currency' => 'nullable|string',
      //'country' => 'nullable|string',

      'billing_address' => 'required|array',
      // 'billing_address.line' => 'required_if:billing_addresses|string',
      // 'billing_address.line2' => 'nullable|string',
      // 'billing_address.city' => 'required_if:billing_addresses|string',
      // 'billing_address.zip' => 'required_if:billing_addresses|string',
      // 'billing_address.state' => 'required_if:billing_addresses|string',

      'shipping_addresses' => 'required|array',
      //'shipping_addresses.line' => 'required_if:shipping_addresses|string',
      //'shipping_addresses.line2' => 'nullable|string',
      // 'shipping_addresses.city' => 'required_if:shipping_addresses|string',
      // 'shipping_addresses.zip' => 'required_if:shipping_addresses|string',
      // 'shipping_addresses.state' => 'required_if:shipping_addresses|string',
    ]);

    Customer::insert([
      'name'    => $request->name,
      'email'    => $request->email,
      'phone'    => $request->phone,
      'contact'    => $request->contact,
      'contact2'    => $request->contact2,
      'currency'    => $request->currency,
      'country'    => $request->billing_address['country'],
      'billing_address'    => json_encode($request->billing_address),
      'shipping_addresses'    => json_encode($this->preperShippingAddress($request->shipping_addresses)),
      'created_at'=>Carbon::now()
    ]);


    return back()->with('success', 'Customer succesfully Added');
  }


  public function edit(Customer $customer){
    return view('dashboard.customer.edit',[
      'customer' => $customer,
      'countries' => Country::all()
    ]);
  }


  public function update(Request $request, Customer $customer){

    Validator::make($request->all(), [
        'name' => ['required','string','max:191',Rule::unique('customers')->ignore($customer->id)],
        'email' => ['required','email','max:191',Rule::unique('customers')->ignore($customer->id)],
        'phone' => ['required','string','max:18',Rule::unique('customers')->ignore($customer->id)],
        'contact' => 'nullable|string|max:18',
        'contact2' => 'nullable|string|max:18',
        'currency' => 'nullable|string',
        //'country' => 'nullable|string',

        'billing_address' => 'required|array',
        // 'billing_address.line' => 'required_if:billing_addresses|string',
        // 'billing_address.line2' => 'nullable|string',
        // 'billing_address.city' => 'required_if:billing_addresses|string',
        // 'billing_address.zip' => 'required_if:billing_addresses|string',
        // 'billing_address.state' => 'required_if:billing_addresses|string',

        'shipping_addresses' => 'required|array',
        //'shipping_addresses.line' => 'required_if:shipping_addresses|string',
        //'shipping_addresses.line2' => 'nullable|string',
        // 'shipping_addresses.city' => 'required_if:shipping_addresses|string',
        // 'shipping_addresses.zip' => 'required_if:shipping_addresses|string',
        // 'shipping_addresses.state' => 'required_if:shipping_addresses|string',
    ]);


    $customer->update([
      'name'    => $request->name,
      'email'    => $request->email,
      'phone'    => $request->phone,
      'contact'    => $request->contact,
      'contact2'    => $request->contact2,
      'currency'    => $request->currency,
      'country'    => $request->billing_address['country'],
      'billing_address'    => json_encode($request->billing_address),
      'shipping_addresses'    => json_encode($this->preperShippingAddress($request->shipping_addresses)),
      'updated_at'=>Carbon::now(),
    ]);
    return back()->with('success', 'Customer succesfully Updated');
  }




  public function destroy(Customer $customer){
    $customer->delete();
    return back()->with('success', 'Customer succesfully Deleted');
  }




  public function getCityList(Request $request){
      $options = '<option selected disabled>--Select City--</option>';
      $cities = City::where('country_id', $request->country_id)->get();
      foreach($cities as $city){
        $options .= '<option value="'.$city->id.'">'.html_entity_decode(stripslashes($city->name)).'</option>';
      }
      echo $options;
      //return $options;
  }

  public function getStateList(Request $request){
      $options = '';
      $states = State::where('country_id', $request->country_id)->get();
      foreach($states as $state){
        $options .= '<option value="'.$state->id.'">'.$state->name.'</option>';
      }
      echo $options;
      return $options;
  }


  private function preperShippingAddress($addresses){
    $_address=[];
    foreach($addresses['contact'] as $k=>$val){
      $_address[$k]['contact'] = $addresses['contact'][$k];
      $_address[$k]['phone'] = $addresses['phone'][$k];
      $_address[$k]['line'] = $addresses['line'][$k];
      $_address[$k]['line2'] = $addresses['line2'][$k];
      $_address[$k]['country'] = $addresses['country'][$k];
      $_address[$k]['state'] = $addresses['state'][$k];
      $_address[$k]['city'] = $addresses['city'][$k];
      $_address[$k]['zip'] = $addresses['zip'][$k];
      $_address[$k]['note'] = $addresses['note'][$k];
    }
    return $_address;
  }

}
