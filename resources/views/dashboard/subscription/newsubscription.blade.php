@extends('layouts.dashboard')
@section('title','New Subscription')
@section('content')
<!-- Horizontal navigation-->
@include('layouts.inc.success')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-content">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <div class="message"></div>
            </div>
            <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 cmp-pnl">
                            <div id="customerpanel" class="inner-cmp-pnl">
                                <div class="form-group row">
                                    <div class="fcol-sm-12">
                                        <h3 class="title">
                                        Bill To <a href='#' class="btn btn-primary btn-sm rounded" data-toggle="modal" data-target="#addCustomer">
                                                Add Client </a>
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <div class="frmSearch col-sm-12">
                                    <form method="get"" action="{{route('search_subscription')}}">
                               
                                        <label for="cst" class="caption">Search Client</label>
                                        <input type="text" class="form-control" name="search"  placeholder="Enter Customer Name or Mobile Number or Email to search"/>
                                        <input type="submit" class="btn btn-success" value="Search">
                                  </form>   
 
                                    </div>
                                </div>
                                <form method="post"" action="{{route('new_subscription_form')}}">
                                @csrf
                                <div id="customer">
                                @php if(isset($posts)) {   @endphp
                                     @foreach($posts as $post)
                                    <div class="clientinfo">
                                         Client Details                                       
                                          <hr>
                                        <input type="hidden" name="billing_name" value="{{$post->billing_name}}">
                                        <div>{{$post->billing_name}}</div>
                                    </div>
                                    <div class="clientinfo">
                                    <input type="hidden" name="billing_address" value="{{$post->billing_address}}">
                                        <div>  {{$post->billing_address}}</div>
                                    </div>
                                    <div class="clientinfo">
                                    <input type="hidden" name="billing_phone" value="{{$post->billing_phone}}">
                                        <div>  {{$post->billing_phone}}</div>
                                    </div>
                                    <div class="clientinfo">
                                    <input type="hidden" name="billing_email" value="{{$post->billing_email}}">
                                        <div>  {{$post->billing_email}}</div>
                                    </div>
                                    <hr>
                                    @endforeach
                                    @php } @endphp      
                                   <p> Warehouse</p>
                                     <select id="s_warehouses" class="form-control" name="warehouse">
                                     @php if(isset($warehouses)) {   @endphp
                                        @foreach($warehouses as $warehouse)
                                        <option value="{{$warehouse->name}}">{{$warehouse->name}}</option>
                                        @endforeach
                                        @php }   @endphp
                                    </select><hr>
                                    <p>Payment Status</p>
                                    <select id="s_warehouses" class="form-control" name="status">
                                        <option value="Due">Due</option>
                                        <option value="Paid">Paid</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 cmp-pnl">
                            <div class="inner-cmp-pnl">
                                <div class="form-group row">
                                    <div class="col-sm-12"><h3
                                                class="title">New Subscription</h3>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6"><label for="invocieno" class="caption">Invoice Number</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-file-text-o" aria-hidden="true"></span></div>
                                            <input type="text" class="form-control" placeholder="Invoice #" name="invocienomber" value="1010">
                                        </div>
                                    </div>
                                    <div class="col-sm-6"><label for="invocieno" class="caption">Reference</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-bookmark-o" aria-hidden="true"></span></div>
                                            <input type="text" class="form-control" placeholder="Reference #" name="refer">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6"><label for="invociedate" class="caption">Invoice Date</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-calendar4" aria-hidden="true"></span></div>
                                            <input type="date" class="form-control " placeholder="Billing Date" name="invoicedate" data-toggle="datepicker" autocomplete="false">
                                        </div>
                                    </div>
                                    <div class="col-sm-6"><label for="invocieduedate"  class="caption">Next Payment After</label>
                                        <select name="nextpayment"  class="selectpicker form-control">
                                            <option value="7 day">7 Days</option>
                                            <option value="14 day">14 Days</option>
                                            <option value="28 day">28 Days</option>
                                            <option value="30 day">30 Days</option>
                                            <option value="45 day">45 Days</option>
                                            <option value="2 month">2 Months</option>
                                            <option value="3 month">3 Months</option>
                                            <option value="6 month">6 Months</option>
                                            <option value="9 month">9 Months</option>
                                            <option value="1 year">1 Year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="taxformat" class="caption">Tax</label>
                                        <select class="form-control round" name="tax"  id="taxformat">
                                            <option value="yes" data-tformat="yes" selected>&raquo;On</option>
                                            <option value="yes" data-tformat="yes">On</option>
                                            <option value="inclusive"  data-tformat="incl">Inclusive</option>
                                            <option value="off" data-tformat="off">Off</option>
                                            <option value="yes" data-tformat="cgst">CGST + SGST</option>
                                            <option value="yes" data-tformat="igst">IGST</option> 
                                            <option value="inclusive" data-tformat="inclusive" data-trate="10">Custom 10% Inclusive</option>
                                             <option value="yes" data-tformat="cgst" data-trate="12">CGST 6% + SGST 6% Exclusive</option>
                                              <option value="yes" data-tformat="yes" data-trate="20">VAT 20% Exclusive</option>                                         </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="discountFormat"
                                                   class="caption"> Discount</label>
                                            <select class="form-control" name="discount"  id="discountFormat">
                                                <option value="Discount After TAX">--% Discount After TAX--</option>
                                                <option value="Flat Discount After TAX">Flat Discount After TAX</option>
                                                  <option value="Discount Before TAX"> % Discount Before TAX</option>
                                                <option value="Flat Discount Before TAX">Flat Discount Before TAX</option>                      
                                    </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="toAddInfo"
                                               class="caption">Invoice Note</label>
                                        <textarea class="form-control" name="notes" rows="2"></textarea></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="saman-row">
                        <table class="table-responsive tfr my_stripe">
                            <thead>
                            <tr class="item_header bg-gradient-directional-deep-purple white">
                                <th width="30%" class="text-center">Item Name</th>
                                <th width="8%" class="text-center"> Quantity</th>
                                <th width="10%" class="text-center">Rate</th>
                                <th width="10%" class="text-center"> Tax(%)</th>
                                <th width="10%" class="text-center">Tax</th>
                                <th width="7%" class="text-center"> Discount</th>
                                <th width="10%" class="text-center">
                                    Amount ($)
                                </th>
                                <th width="5%" class="text-center"> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="text" class="form-control" name="product_name" placeholder="Enter Product name or Code"  id='productname-0'>
                                </td>
                                <td><input type="text" class="form-control req amnt" name="product_qty" id="amount-0" onkeypress="return isNumber(event)" onkeyup="rowTotal('0'), billUpyog()" autocomplete="off" value="1"></td>
                                <td><input type="text" class="form-control req prc" name="product_price[]" id="price-0" onkeypress="return isNumber(event)" onkeyup="rowTotal('0'), billUpyog()" autocomplete="off"></td>
                                <td><input type="text" class="form-control vat " name="product_tax" id="vat-0" onkeypress="return isNumber(event)" onkeyup="rowTotal('0'), billUpyog()" autocomplete="off"></td>
                                <td class="text-center" id="texttaxa-0">0</td>
                                <td><input type="text" class="form-control discount" name="product_discount[]" onkeypress="return isNumber(event)" id="discount-0" onkeyup="rowTotal('0'), billUpyog()" autocomplete="off"></td>
                                <td><span class="currenty">$</span>
                                    <strong><span class='ttlText' id="result-0">0</span></strong></td>
                                <td class="text-center">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="8">
                                <textarea id="dpid-0" class="form-control" name="product_description" placeholder="Enter Product description" autocomplete="off"></textarea><br></td>
                            </tr>
                            <tr class="sub_c" style="display: table-row;">
                                <td colspan="6" align="right"><input type="hidden" value="0" id="subttlform" name="subtotal"><strong> Total Tax</strong>
                                </td>
                                <td align="left" colspan="2"><span class="currenty lightMode">$</span>
                                    <span id="taxr" class="lightMode">0</span></td>
                            </tr>
                            <tr class="sub_c" style="display: table-row;">
                                <td colspan="6" align="right">
                                    <strong> Total Discount</strong></td>
                                <td align="left" colspan="2"><span
                                            class="currenty lightMode">$</span>
                                    <span id="discs" class="lightMode">0</span></td>
                            </tr>

                            <tr class="sub_c" style="display: table-row;">
                                <td colspan="6" align="right">
                                    <strong> Shipping</strong></td>
                                <td align="left" colspan="2"><input type="text" class="form-control shipVal" onkeypress="return isNumber(event)" placeholder="Value" name="shipping" autocomplete="off" onkeyup="billUpyog()">
                                    ( Tax $<span id="ship_final">0</span> )
                                </td>
                            </tr>
                            <tr class="sub_c" style="display: table-row;">
                                <td colspan="2">Payment Currency for your client <small>based on live market</small>
                                    <select name="mcurrency" class="selectpicker form-control">
                                        <option value="Default">Default</option>
                                        <option value="£ (GBP)">£ (GBP)</option>
                                        <option value="BTC (BTC)">BTC (BTC)</option>
                                        <option value="₹ (INR)">₹ (INR)</option>
                                        <option value="BDT">BDT</option>
                                    </select></td>
                                <td colspan="4" align="right"><strong> Grand Total(<span class="currenty lightMode">$</span>)</strong>
                                </td>
                                <td align="left" colspan="2"><input type="text" name="total" class="form-control"  >
                                </td>
                            </tr>
                            <tr class="sub_c" style="display: table-row;">
                                <td colspan="2"> Payment Terms <select name="pterms" class="selectpicker form-control">
                                    <option value="Payment On Receipt">Payment On Receipt</option>
                                    </select></td>
                                <td align="right" colspan="6"><input type="submit" class="btn btn-success sub-btn" value=" Generate Invoice " data-loading-text="Creating...">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="addCustomer" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content ">
            <form method="post" id="product_action" class="form-horizontal" action="{{Route('add_client_form_invoice') }}">
            @csrf
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"> Add Client</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only"> Close</span>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <p id="statusMsg"></p><input type="hidden" name="mcustomer_id" id="mcustomer_id" value="0">
                    <div class="row">
                        <div class="col">
                            <h5>Billing Address</h5>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"
                                       for="name">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="Name" class="form-control margin-bottom" id="mcustomer_name" name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="phone"> Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="Phone"  class="form-control margin-bottom" name="phone" id="mcustomer_phone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"  for="email"> Email</label>
                                <div class="col-sm-10">
                                    <input type="email" placeholder="Email"  class="form-control margin-bottom crequired" name="email" id="mcustomer_email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="address"> Address</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="Address" class="form-control margin-bottom " name="address" id="mcustomer_address1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" placeholder="City" class="form-control margin-bottom" name="city" id="mcustomer_city">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Region" id="region" class="form-control margin-bottom" name="region">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Country"  class="form-control margin-bottom" name="country" id="mcustomer_country">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="PostBox" id="postbox"  class="form-control margin-bottom" name="postbox">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Company" class="form-control margin-bottom" name="company">
                                </div>

                                <div class="col-sm-6">
                                    <input type="text" placeholder="TAX ID" class="form-control margin-bottom" name="taxid" id="mcustomer_city">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"
                                       for="customergroup"> Group</label>
                                <div class="col-sm-10">
                                    <select name="customergroup" class="form-control">
                                        <option value='Default Group'>Default Group</option>                                    
                                        <option value='Shop'>Shop</option>                                    
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- shipping -->
                        <div class="col">
                            <h5>Shipping Address</h5>
                            <div class="form-group row">
                                <div class="input-group">
                                    <label class="display-inline-block custom-control custom-radio ml-1">
                                        <input type="checkbox" name="customer1"  id="copy_address">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description ml-0">Same As Billing</span>
                                    </label>
                                </div>
                                <div class="col-sm-10">
                                    Please leave Shipping Address blank if you do not want to print it on the invoice.                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"
                                       for="name_s">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="Name" class="form-control margin-bottom" id="mcustomer_name_s" name="name_s" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="phone_s"> Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="Phone" class="form-control margin-bottom" name="phone_s" id="mcustomer_phone_s">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="email_s"> Email</label>
                                <div class="col-sm-10">
                                    <input type="email" placeholder="Email" class="form-control margin-bottom" name="email_s" id="mcustomer_email_s">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="address_s"> Address</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="Address" class="form-control margin-bottom " name="address_s" id="mcustomer_address1_s">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" placeholder="City" class="form-control margin-bottom" name="city_s" id="mcustomer_city_s">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Region" id="region_s"  class="form-control margin-bottom" name="region_s">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Country" class="form-control margin-bottom" name="country_s" id="mcustomer_country_s">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="PostBox" id="postbox_s" class="form-control margin-bottom" name="postbox_s">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"  data-dismiss="modal"> Close</button>
                    <input type="submit" class="btn btn-primary" value="ADD"/>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection