@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div id="notify" class="alert" style="display:none;">
    <a href="#" class="close" data-dismiss="alert">&times;</a>

    <div class="message"></div>
</div>
<div id="thermal_a" class="alert alert-success" style="display:none;">
    <a href="#" class="close" data-dismiss="alert">&times;</a>

    <div class="message"></div>
</div>
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">


<form method="post" id="data_form" class="content-body">
    <div class="sidebar-left  bg-white">
        <div class="sidebar">
            <div class="sidebar-content ">
                <div class="card-body chat-fixed-search">

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="ft-search"></i></span>
                        </div>
                        <input type="text" class="form-control" id="pos-customer-box"
                               placeholder="Enter Customer Name or Mobile Number to search"
                               aria-describedby="button-addon2">
                        <div class="input-group-append" id="button-addon2">
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                    data-target="#Pos_addCustomer"> Add</button>
                        </div>
                    </div>
                    <div id="customer-box-result" class="col-md-12"></div>
                    <div id="customer" class="col-md-12 ml-3">
                        <div class="clientinfo">

                            <input type="hidden" name="customer_id" id="customer_id" value="1">
                            <div id="customer_name">Default: <strong>Walk
                                    In </strong></div>
                        </div>


                    </div>

                </div>
                <div>
                    <div class="users-list-padding media-list">

                        <br>
                        <div class="row bg-gradient-directional-purple white m-0 pt-1 pb-1">
                            <div class="col-6 ">
                                <i class="fa fa-briefcase"></i>
                                Products</th>
                            </div>
                            <div class="col-3">
                                <i class="fa fa-money"></i> Price                            </div>
                            <div class="col-3">
                                <i
                                        class="fa fa-shopping-bag"></i> Total                            </div>
                        </div>
                        <div id="saman-pos2">
                            <div id="pos_items"></div>
                        </div>
                        <input type="hidden" name="total" class="form-control"
                               id="invoiceyoghtml" readonly="">
                        <hr class="mt-1">
                        <div class="row m-2">
                            <div class="col-3">
                                <strong>  Shipping</strong>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control form-control-sm shipVal"
                                       onkeypress="return isNumber(event)"
                                       placeholder="Value"
                                       name="shipping" autocomplete="off"
                                       onkeyup="billUpyog()">
                            </div>
                            <div class="col-3">
                                ( Tax $                                <span id="ship_final">0</span> )
                            </div>
                        </div>


                        <div class="row m-2">
                            <div class="col-3">
                                <strong>  Total Tax</strong>
                            </div>
                            <div class="col-3">$                                <span id="taxr" class="mr-1">0</span>
                            </div>
                        </div>
                        <div class="row m-2">
                            <div class="col-3">
                                <strong>  Total Discount</strong>
                            </div>
                            <div class="col-9">$                                <span id="discs"
                                      class="lightMode mr-1">0</span>
                                <small>(Products)</small>
                            </div>
                        </div>
                        <div class="row m-2">
                            <div class="col-3">
                                <strong>  Grand Total</strong>
                            </div>
                            <div class="col-9">$                                <span class="font-medium-1 blue text-bold-600"
                                      id="bigtotal">0.00</span>
                            </div>
                        </div>
                        <div class="row m-2">
                            <div class="col-3">
                                <strong> Extra  Discount</strong>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control form-control-sm discVal"
                                       onkeypress="return isNumber(event)"
                                       placeholder="Value" value="0"
                                       name="disc_val" autocomplete="off"
                                       onkeyup="billUpyog()">
                                <input type="hidden"
                                       name="after_disc" id="after_disc" value="0">
                            </div>
                            <div class="col-3">
                                ( $                                <span id="disc_final">0</span> )
                            </div>
                        </div>


                        <hr>

                        <div class="m-1">

                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="btn btn-outline-primary  mr-1 mb-1" id="base-tab1" data-toggle="tab"
                                       aria-controls="tab1" href="#tab1" role="tab" aria-selected="false"><i
                                                class="fa fa-trophy"></i>
                                        Coupon</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-outline-secondary mr-1 mb-1" id="base-tab2" data-toggle="tab"
                                       aria-controls="tab2" href="#tab2" role="tab" aria-selected="false"><i
                                                class="icon-handbag"></i>
                                        POS Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-outline-danger  mr-1 mb-1" id="base-tab3" data-toggle="tab"
                                       aria-controls="tab3" href="#tab3" role="tab" aria-selected="false"><i
                                                class="fa fa-save"></i> Draft(s)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-outline-success mb-1" id="base-tab4" data-toggle="tab"
                                       aria-controls="tab4" href="#tab4" role="tab" aria-selected="false"><i
                                                class="fa fa-cogs"></i>
                                        Invoice Properties</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div class="tab-pane" id="tab1" role="tabpanel" aria-labelledby="base-tab1">
                                    <div class="input-group">

                                        <input type="text" class="form-control"
                                               id="coupon" name="coupon"><input type="hidden"
                                                                                name="coupon_amount"
                                                                                id="coupon_amount"
                                                                                value="0"><span
                                                class="input-group-addon round"> <button
                                                    class="apply_coupon btn btn-small btn-primary sub-btn">Apply</button></span>


                                    </div>
                                    <input type="hidden" class="text-info" name="i_coupon" id="i_coupon"
                                           value="">
                                    <span class="text-primary text-bold-600" id="r_coupon"></span>
                                </div>
                                <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="base-tab2">
                                    <div class="row">
                                        <div class="col-4 blue text-xs-center">Warehouse                                            <select
                                                    id="v2_warehouses"
                                                    class="selectpicker form-control round teal">
                                                <option value="0">*All</option><option value="0">All</option><option value="1">Main WareHouse</option><option value="2">France</option><option value="3">China</option><option value="4">Croatia</option><option value="5">Albania</option><option value="6">Bulgaria</option><option value="7">Japan</option><option value="8">Guatemala</option><option value="9">USA</option><option value="10">UK</option><option value="11">USA</option>
                                            </select></div>
                                        <div class="col-4 blue text-xs-center">Tax                                            <select class="form-control round"
                                                    onchange="changeTaxFormat(this.value)"
                                                    id="taxformat">
                                                <option value="yes" data-tformat="yes" selected>&raquo;On</option><option value="yes" data-tformat="yes">On</option>
                                            <option value="inclusive"  data-tformat="incl">Inclusive</option>
                                            <option value="off" data-tformat="off">Off</option>
                                            <option value="yes" data-tformat="cgst">CGST + SGST</option>
                                            <option value="yes" data-tformat="igst">IGST</option> <option value="inclusive" data-tformat="inclusive" data-trate="10">Custom 10% Inclusive</option> <option value="yes" data-tformat="cgst" data-trate="12">CGST 6% + SGST 6% Exclusive</option> <option value="yes" data-tformat="yes" data-trate="20">VAT 20% Exclusive</option>                                             </select></div>
                                        <div class="col-4 blue text-xs-center">   Discount                                            <select class="form-control round teal"
                                                    onchange="changeDiscountFormat(this.value)"
                                                    id="discountFormat">

                                                <option value="%">--% Discount After TAX--</option> <option value="%"> % Discount After TAX</option>
                                                <option value="flat">Flat Discount After TAX</option>
                                                  <option value="b_p"> % Discount Before TAX</option>
                                                <option value="bflat">Flat Discount Before TAX</option>                                             </select></div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="base-tab3">
                                    <li class="indigo p-1"><a href=" pos_invoices/draft?id=9"> #1083 (2019-02-16)</a></li><li class="indigo p-1"><a href=" pos_invoices/draft?id=8"> #1080 (2019-02-16)</a></li><li class="indigo p-1"><a href=" pos_invoices/draft?id=7"> #1080 (2019-02-16)</a></li><li class="indigo p-1"><a href=" pos_invoices/draft?id=6"> #1074 (2019-02-16)</a></li><li class="indigo p-1"><a href=" pos_invoices/draft?id=5"> #1074 (2019-02-16)</a></li><li class="indigo p-1"><a href=" pos_invoices/draft?id=4"> #1071 (2019-02-16)</a></li><li class="indigo p-1"><a href=" pos_invoices/draft?id=2"> #1065 (2019-02-16)</a></li><li class="indigo p-1"><a href=" pos_invoices/draft?id=1"> #1056 (2019-02-16)</a></li>                                </div>
                                <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="base-tab4">
                                    <div class="form-group row">
                                        <div class="col-sm-3"><label for="invocieno"
                                                                     class="caption">Invoice Number</label>

                                            <div class="input-group">
                                                <div class="input-group-addon"><span class="icon-file-text-o"
                                                                                     aria-hidden="true"></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Invoice #"
                                                       name="invocieno" id="invocieno"
                                                       value="1084">
                                            </div>
                                        </div>
                                        <div class="col-sm-3"><label for="invocieno"
                                                                     class="caption">Reference</label>

                                            <div class="input-group">
                                                <div class="input-group-addon"><span class="icon-bookmark-o"
                                                                                     aria-hidden="true"></span>
                                                </div>
                                                <input type="text" class="form-control"
                                                       placeholder="Reference #"
                                                       name="refer">
                                            </div>
                                        </div>


                                        <div class="col-sm-3"><label for="invociedate"
                                                                     class="caption">Invoice Date</label>

                                            <div class="input-group">
                                                <div class="input-group-addon"><span class="icon-calendar4"
                                                                                     aria-hidden="true"></span>
                                                </div>
                                                <input type="text" class="form-control required"
                                                       placeholder="Billing Date" name="invoicedate"
                                                       data-toggle="datepicker"
                                                       autocomplete="false">
                                            </div>
                                        </div>
                                        <div class="col-sm-3"><label for="invocieduedate"
                                                                     class="caption">Invoice Due Date</label>

                                            <div class="input-group">
                                                <div class="input-group-addon"><span class="icon-calendar-o"
                                                                                     aria-hidden="true"></span>
                                                </div>
                                                <input type="text" class="form-control required" id="tsn_due"
                                                       name="invocieduedate"
                                                       placeholder="Due Date" data-toggle="datepicker"
                                                       autocomplete="false">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                             Payment Terms <select
                                                    name="pterms"
                                                    class="selectpicker form-control"><option value="1">Payment On Receipt</option>
                                            </select>
                                            Payment Currency for your client                                                                                                                                        <select name="mcurrency"
                                                        class="selectpicker form-control">
                                                <option value="0">Default</option>
                                                <option value="1">£ (GBP)</option><option value="2">BTC (BTC)</option><option value="3">₹ (INR)</option>
                                                </select>                                        </div>
                                        <div class="col-sm-6">
                                            <label for="toAddInfo"
                                                   class="caption">Invoice Note</label>
                                            <textarea class="form-control" name="notes" rows="2"></textarea>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
<div class="content-right">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="chat-app-window">
                    <div class="row ">


                        <div class="col-sm-9">


                            <div class="position-relative has-icon-left">
                                <input type="text" class="form-control text-center round mousetrap"
                                       name="product_barcode"
                                       placeholder="Enter Product name, code or scan barcode" id="v2_search_bar"
                                       autocomplete="off" autofocus="autofocus">
                                <div class="form-control-position">
                                    <i class="icon-barcode2"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3  grey text-xs-center"><select
                                    id="v2_categories"
                                    class="selectpicker form-control round teal">
                                <option value="0">All</option><option value='13'>جوال</option><option value='12'>Shoes</option><option value='11'>Home</option><option value='10'>Automotive</option><option value='9'>Tools</option><option value='8'>Music</option><option value='7'>Home</option><option value='6'>Automotive</option><option value='5'>Toys</option><option value='4'>Home</option><option value='3'>Computers</option><option value='2'>Health</option><option value='1'>General</option>                            </select></div>


                    </div>
                    <hr class="white">


                    <div class="row m-0">
                        <div class="col-md-12 pt-0 " id="pos_item">
                            <!-- pos items -->
                        </div>
                    </div>
                </section>
                <section class="chat-app-form">
                    <div class="form-group text-center">
                        <!-- Button Group with Icons in different sizes -->
                        <div class="btn-group btn-group-lg" role="group">
                            <button type="button" class="possubmit btn btn-warning"><i
                                        class="fa fa-save"></i> Draft </button>
                            <button type="button" class="btn btn-success possubmit3" data-type="6" data-toggle="modal"
                                    data-target="#basicPay"><i
                                        class="fa fa-money"></i> Payment                            </button>                                 <button type="button" class="btn btn-primary possubmit2" data-type="4"
                                        data-toggle="modal" data-target="#cardPay"><i
                                            class="fa fa-credit-card"></i> Card                                </button>     
                        </div>
                    </div>


                </section>
            </div>
        </div>
    </div>
    <input type="hidden" value="pos_invoices/action" id="action-url">
    <input type="hidden" value="0" id="subttlform"
           name="subtotal">
    <input type="hidden" value="search" id="billtype">
    <input type="hidden" value="0" name="counter" id="ganak">
    <input type="hidden" value="0" id="custom_discount">
    <input type="hidden" value="$" name="currency">
    <input type="hidden" value="%" name="taxformat" id="tax_format">

    <input type="hidden" value="yes" name="tax_handle" id="tax_status">
    <input type="hidden" value="yes" name="applyDiscount" id="discount_handle">

    <input type="hidden" value="%" name="discountFormat"
           id="discount_format">
    <input type="hidden" value="10.00" name="shipRate"
           id="ship_rate">
    <input type="hidden" value="incl" name="ship_taxtype"
           id="ship_taxtype">
    <input type="hidden" value="0" name="ship_tax" id="ship_tax">
</form>
<audio id="beep" src=" assets/js/beep.wav" autoplay="false"></audio>

<div class="modal fade" id="Pos_addCustomer" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content ">
            <form method="post" id="product_action" class="form-horizontal">
                <!-- Modal Header -->
                <div class="modal-header bg-gradient-directional-blue white">
                    <i class="icon-user-plus"></i>  Add Customer</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only"> Close</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <p id="statusMsg"></p><input type="hidden" name="mcustomer_id" id="mcustomer_id" value="0">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5>Billing Address</h5>
                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label"
                                       for="name">Name</label>

                                <div class="col-sm-10">
                                    <input type="text" placeholder="Name"
                                           class="form-control margin-bottom" id="mcustomer_name" name="name"
                                           required>
                                </div>
                            </div>

                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label"
                                       for="phone"> Phone</label>

                                <div class="col-sm-10">
                                    <input type="text" placeholder="Phone"
                                           class="form-control margin-bottom" name="phone" id="mcustomer_phone">
                                </div>
                            </div>
                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label"
                                       for="email"> Email</label>

                                <div class="col-sm-10">
                                    <input type="email" placeholder="Email"
                                           class="form-control margin-bottom" name="email"
                                           id="mcustomer_email">
                                </div>
                            </div>
                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label"
                                       for="address"> Address</label>

                                <div class="col-sm-10">
                                    <input type="text" placeholder="Address"
                                           class="form-control margin-bottom " name="address"
                                           id="mcustomer_address1">
                                </div>
                            </div>

                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label"
                                       for="customergroup"> Group</label>

                                <div class="col-sm-10">
                                    <select name="customergroup" class="form-control">
                                        <option value='1'>Default Group</option>                                    </select>


                                </div>
                            </div>


                        </div>


                    </div>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                            data-dismiss="modal"> Close</button>
                    <input type="submit" id="mclient_add" class="btn btn-primary submitBtn" value="ADD"/ >
                </div>
            </form>
        </div>
    </div>
</div>
<!--card-->
<div class="modal fade" id="cardPay" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Make Payment</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    <span class="sr-only"> Close</span>

            </div>

            <!-- Modal Body -->
            <div class="modal-body ">
                <p id="statusMsg"></p>
                <form role="form" id="card_data">

                    <div class="row">
                        <div class="col-6">
                            <label for="cardNumber">Payment Gateways</label>
                            <select class="form-control" name="gateway"><option value='1'>Stripe (<span class="gate_total"></span>+8.00 %)</option><option value='2'>Authorize.Net (<span class="gate_total"></span>+3.00 %)</option><option value='4'>PayPal </option><option value='6'>2Checkout </option><option value='8'>RazorPay </option>                            </select>
                        </div>
                        <div class="col-4"><br><img class="img-responsive pull-right"
                                                    src=" assets/images/accepted_c22e0.png">
                        </div>
                    </div>


                    <div class="row mt-1">
                        <div class="col">
                            <button class="btn btn-success btn-lg"
                                    type="submit"
                                    id="pos_card_pay"
                                    data-type="2"><i
                                        class="fa fa-credit-card"></i> Pay now                            </button>
                        </div>
                    </div>
                    <div class="form-group">

                        <br>Note: Payment Processing fee may apply for some gateways.
                    </div>
                    <div class="row" style="display:none;">
                        <div class="col-xs-12">
                            <p class="payment-errors"></p>
                        </div>
                    </div>

                    <input type="hidden" value="pos_invoices/action" id="pos_action-url">
                </form>

                <!-- shipping -->


            </div>
            <!-- Modal Footer -->


        </div>
    </div>
</div>
<div class="modal fade" id="basicPay" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content ">
            <form method="post" id="basicpay_data" class="form-horizontal">
                <!-- Modal Header -->
                <div class="modal-header">

                    <h4 class="modal-title">Make Payment</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only"> Close</span>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <p id="statusMsg"></p>

                    <div class="text-center"><h1 id="b_total"></h1></div>
                    <div class="row">


                        <div class="col-6">
                            <div class="card-title">
                                <label for="cardNumber">Amount</label>
                                <div class="input-group">
                                    <input
                                            type="number"
                                            class="form-control  text-bold-600 blue-grey"
                                            name="p_amount"
                                            placeholder="Amount"
                                            id="p_amount" onkeyup="update_pay_pos()"
                                    />
                                    <span class="input-group-addon"><i
                                                class="icon icon-cash"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-title">
                                <label for="cardNumber">Payment Method</label>
                                <select class="form-control" name="p_method" id="p_method">
                                    <option value='Cash'>Cash</option>
                                    <option value='Card Swipe'>Card Swipe</option>
                                    <option value='Bank'>Bank</option>

                                </select></div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group  text-bold-600 red">
                                <label for="amount">Balance Due                                </label>
                                <input type="number" class="form-control red" name="amount" id="balance1"
                                       value="0.00"
                                       required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group text-bold-600 text-g">
                                <label for="b_change">Change</label>
                                <input
                                        type="number"
                                        class="form-control green"
                                        name="b_change" id="change_p" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-success btn-lg btn-block mb-1"
                                    type="submit"
                                    id="pos_basic_pay" data-type="4"><i
                                        class="fa fa-arrow-circle-o-right"></i> Pay now                            </button>
                            <button class="btn btn-info btn-lg btn-block"
                                    type="submit"
                                    id="pos_basic_print" data-type="4"><i
                                        class="fa fa-print"></i> Pay now                                + Print</button>
                        </div>
                    </div>

                    <div class="row" style="display:none;">
                        <div class="col-xs-12">
                            <p class="payment-errors"></p>
                        </div>
                    </div>


                    <!-- shipping -->


                </div>
                <!-- Modal Footer -->

            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="register" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content ">

            <!-- Modal Header -->
            <div class="modal-header">

                <h4 class="modal-title">Your Register</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only"> Close</span>
                </button>

            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <div class="text-center m-1">Active - <span id="r_date"></span></div>


                <div class="row">
                    <div class="col-6">
                        <div class="form-group  text-bold-600 green">
                            <label for="amount">Cash                                ($)
                            </label>
                            <input type="number" class="form-control green" id="r_cash"
                                   value="0.00"
                                   readonly>
                        </div>
                    </div>
                    <div class="col-5 col-md-5 pull-right">
                        <div class="form-group text-bold-600 blue">
                            <label for="b_change blue">Card</label>
                            <input
                                    type="number"
                                    class="form-control blue"
                                    id="r_card" value="0" readonly>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group  text-bold-600 indigo">
                            <label for="amount">Bank                            </label>
                            <input type="number" class="form-control indigo" id="r_bank"
                                   value="0.00"
                                   readonly>
                        </div>
                    </div>
                    <div class="col-5 col-md-5 pull-right">
                        <div class="form-group text-bold-600 red">
                            <label for="b_change">Change(-)</label>
                            <input
                                    type="number"
                                    class="form-control red"
                                    id="r_change" value="0" readonly>
                        </div>
                    </div>
                </div>


                <div class="row" style="display:none;">
                    <div class="col-xs-12">
                        <p class="payment-errors"></p>
                    </div>
                </div>


                <!-- shipping -->


            </div>
            <!-- Modal Footer -->


        </div>
    </div>
</div>
<div class="modal fade" id="close_register" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content ">

            <!-- Modal Header -->
            <div class="modal-header">

                <h4 class="modal-title"> CloseYour Register</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only"> Close</span>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">

                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <a href=" /register/close" class="btn btn-danger btn-lg btn-block"
                           type="submit"
                        ><i class="icon icon-arrow-circle-o-right"></i> Yes</a>
                    </div>
                    <div class="col-4"></div>
                </div>

            </div>
            <!-- Modal Footer -->


        </div>
    </div>
</div>
<div class="modal fade" id="stock_alert" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content ">

            <!-- Modal Header -->
            <div class="modal-header">

                <h4 class="modal-title">Stock Alert !</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only"> Close</span>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">

                <div class="row p-1">
                    <div class="alert alert-danger mb-2" role="alert">
                        <strong>Oh snap!</strong> Create a new purchase order for this product or edit the stock of item!                    </div>
                </div>

            </div>
            <!-- Modal Footer -->


        </div>
    </div>
</div>
<div id="shortkeyboard" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">ShortCuts</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <td>Alt+X</td>
                        <td>Focus to products search</td>
                    </tr>
                    <tr>
                        <td>Alt+C</td>
                        <td>Focus to customer search</td>
                    </tr>

                    <tr>
                        <td>Alt+S (twice)</td>
                        <td>PayNow + Thermal Print</td>
                    </tr>
                    <tr>
                        <td>Alt+Z</td>
                        <td>Make Card Payment</td>
                    </tr>
                    <tr>
                        <td>Alt+Q</td>
                        <td>Select First product</td>
                    </tr>
                    <tr>
                        <td>Alt+N</td>
                        <td>Create New Invoice</td>
                    </tr>


                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    $.ajax({
        url: baseurl + 'search_products/v2_pos_search',
        dataType: 'html',
        method: 'POST',
        data: 'cid=' + $('#v2_categories').val() + '&wid=' + $('#v2_warehouses option:selected').val() + '&' + crsf_token + '=' + crsf_hash,
        success: function (data) {
            $('#pos_item').html(data);
        }
    });

    function update_register() {
        $.ajax({
            url: baseurl + 'register/status',
            dataType: 'json',
            data: crsf_token + '=' + crsf_hash,
            success: function (data) {
                $('#r_cash').val(data.cash);
                $('#r_card').val(data.card);
                $('#r_bank').val(data.bank);
                $('#r_change').val(data.change);
                $('#r_date').text(data.date);
            }
        });
    }

    update_register();
    $(".possubmit").on("click", function (e) {
        e.preventDefault();
        var o_data = $("#data_form").serialize() + '&type=' + $(this).attr('data-type');
        var action_url = $('#action-url').val();
        addObject(o_data, action_url);
    });

    $(".possubmit2").on("click", function (e) {
        e.preventDefault();
        $('#card_total').val($('#invoiceyoghtml').val());
    });

    $(".possubmit3").on("click", function (e) {
        e.preventDefault();
        var roundoff = parseFloat($('#invoiceyoghtml').val()).toFixed(2);
        ;
                $('#b_total').html(' $ ' + roundoff);
        $('#p_amount').val(roundoff);

    });

    function update_pay_pos() {
        var am_pos = $('#p_amount').val();
        var ttl_pos = $('#invoiceyoghtml').val();

        
        var due = parseFloat(ttl_pos - am_pos).toFixed(2);

        if (due >= 0) {
            $('#balance1').val(due);
            $('#change_p').val(0);
        } else {
            due = due * (-1)
            $('#balance1').val(0);
            $('#change_p').val(due);
        }

    }

    $('#pos_card_pay').on("click", function (e) {
        e.preventDefault();
        $('#cardPay').modal('toggle');
        $("#notify .message").html("<strong>Processing</strong>: .....");
        $("#notify").removeClass("alert-danger").addClass("alert-primary").fadeIn();
        $("html, body").animate({scrollTop: $('body').offset().top - 100}, 1000);
        var o_data = $("#data_form").serialize() + '&' + $("#card_data").serialize() + '&type=' + $(this).attr('data-type');
        var action_url = $('#action-url').val();
        addObject(o_data, action_url);
        update_register();
    });
    $('#pos_basic_pay').on("click", function (e) {
        e.preventDefault();
        $('#basicPay').modal('toggle');
        $("#notify .message").html("<strong>Processing</strong>: .....");
        $("#notify").removeClass("alert-danger").addClass("alert-primary").fadeIn();
        $("html, body").animate({scrollTop: $('body').offset().top - 100}, 1000);
        var o_data = $("#data_form").serialize() + '&p_amount=' + $("#p_amount").val() + '&p_method=' + $("#p_method option:selected").val() + '&type=' + $(this).attr('data-type');
        var action_url = $('#action-url').val();
        addObject(o_data, action_url);
        setTimeout(
            function () {
                update_register();
            }, 3000);
    });

    $('#pos_basic_print').on("click", function (e) {
        e.preventDefault();
        $('#basicPay').modal('toggle');
        $("#notify .message").html("<strong>Processing</strong>: .....");
        $("#notify").removeClass("alert-danger").addClass("alert-primary").fadeIn();
        $("html, body").animate({scrollTop: $('body').offset().top - 100}, 1000);
        var o_data = $("#data_form").serialize() + '&p_amount=' + $("#p_amount").val() + '&p_method=' + $("#p_method option:selected").val() + '&type=' + $(this).attr('data-type') + '&printnow=1';
        var action_url = $('#action-url').val();
        addObject(o_data, action_url);

        setTimeout(
            function () {
                update_register();
            }, 3000);


    });
</script>

<!-- Vendor libraries -->
<script type="text/javascript">
    var $form = $('#payment-form');
    $form.on('submit', payWithCard);

    /* If you're using Stripe for payments */
    function payWithCard(e) {
        e.preventDefault();

        /* Visual feedback */
        $form.find('[type=submit]').html('Processing <i class="fa fa-spinner fa-pulse"></i>')
            .prop('disabled', true);

        jQuery.ajax({

            url: ' billing/process_card',
            type: 'POST',
            data: $('#payment-form').serialize() + '&' + crsf_token + '=' + crsf_hash,
            dataType: 'json',
            success: function (data) {

                $form.find('[type=submit]').html('Payment successful <i class="fa fa-check"></i>').prop('disabled', true);
                $("#notify .message").html("<strong>" + data.status + "</strong>: " + data.message);
                $("#notify").removeClass("alert-danger").addClass("alert-success").fadeIn();
                $("html, body").animate({scrollTop: $('#notify').offset().top}, 1000);

            },
            error: function () {
                $form.find('[type=submit]').html('There was a problem').removeClass('success').addClass('error');
                /* Show Stripe errors on the form */
                $form.find('.payment-errors').text('Try refreshing the page and trying again.');
                $form.find('.payment-errors').closest('.row').show();
                $form.find('[type=submit]').html('Error! <i class="fa fa-exclamation-circle"></i>')
                    .prop('disabled', true);
                $("#notify .message").html("<strong>Error</strong>: Please try again!");


            }

        });


    }


    $('#v2_categories').change(function () {
        var whr = $('#v2_warehouses option:selected').val();
        var cat = $('#v2_categories option:selected').val();
        $.ajax({
            type: "POST",
            url: baseurl + 'search_products/v2_pos_search',
            data: 'wid=' + whr + '&cid=' + cat + '&' + crsf_token + '=' + crsf_hash,
            beforeSend: function () {
                $("#customer-box").css("background", "#FFF url(" + baseurl + "assets/custom/load-ring.gif) no-repeat 165px");
            },
            success: function (data) {

                $("#pos_item").html(data);

            }
        });
    });
    $('#v2_warehouses').change(function () {
        var whr = $('#v2_warehouses option:selected').val();
        var cat = $('#v2_categories option:selected').val();
        $.ajax({
            type: "POST",
            url: baseurl + 'search_products/v2_pos_search',
            data: 'wid=' + whr + '&cid=' + cat + '&' + crsf_token + '=' + crsf_hash,
            beforeSend: function () {
                $("#customer-box").css("background", "#FFF url(" + baseurl + "assets/custom/load-ring.gif) no-repeat 165px");
            },
            success: function (data) {

                $("#pos_item").html(data);

            }
        });
    })
    $(document).ready(function () {
        Mousetrap.bind('alt+x', function () {
            $('#v2_search_bar').focus();
        });
        Mousetrap.bind('alt+c', function () {
            $('#pos-customer-box').focus();
        });

        Mousetrap.bind('alt+z', function () {
            $('.possubmit2').click();
        });
        Mousetrap.bind('alt+n', function () {
            window.location.href = " pos_invoices/create";
        });
        Mousetrap.bind('alt+q', function () {
            $('#posp0').click();
            $('#v2_search_bar').val('');
        });
        Mousetrap.bind('alt+s', function () {
            if ($('#basicPay').hasClass('show')) {
                $('#pos_basic_print').click();
            } else {
                $('.possubmit3').click();
            }

        });
        $('#v2_search_bar').keypress(function (event) {
            if (event.keyCode == 13) {
                setTimeout(
                    function () {
                           $('#posp0').click();
                           $('#v2_search_bar').val('');
                    }, 500);

            }
        });
    });
</script>

</div></div></div>
@endsection