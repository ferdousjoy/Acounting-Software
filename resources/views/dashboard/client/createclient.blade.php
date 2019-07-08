@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
@include('layouts.inc.success')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add New Customer</h4>

            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-body"> 
            <form method="post"  class="form-horizontal" action="{{Route('create_customer_form')}}">
            @csrf
                <div class="card">

                    <div class="card-content">
                        <div class="card-body">

                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" id="base-tab1" data-toggle="tab"
                                       aria-controls="tab1" href="#tab1" role="tab"
                                       aria-selected="true">Billing Address</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2"
                                       href="#tab2" role="tab"
                                       aria-selected="false">Shipping Address</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3"
                                       href="#tab3" role="tab"
                                       aria-selected="false">Other Settings</a>
                                </li>

                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div class="tab-pane active show" id="tab1" role="tabpanel" aria-labelledby="base-tab1">
                                    <div class="form-group row mt-1">

                                        <label class="col-sm-2 col-form-label"
                                               for="name">Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" placeholder="Name"
                                                   class="form-control margin-bottom b_input" name="name"
                                                   id="mcustomer_name">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"
                                               for="name">Company</label>

                                        <div class="col-sm-8">
                                            <input type="text" placeholder="Company"
                                                   class="form-control margin-bottom b_input" name="company">
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"
                                               for="phone"> Phone</label>

                                        <div class="col-sm-8">
                                            <input type="text" placeholder="phone"
                                                   class="form-control margin-bottom b_input" name="phone"
                                                   id="mcustomer_phone">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label" for="email">Email</label>

                                        <div class="col-sm-8">
                                            <input type="text" placeholder="email"
                                                   class="form-control margin-bottom b_input" name="email"
                                                   id="mcustomer_email">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"
                                               for="address"> Address</label>

                                        <div class="col-sm-8">
                                            <input type="text" placeholder="address"
                                                   class="form-control margin-bottom b_input" name="address"
                                                   id="mcustomer_address1">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"
                                               for="city">City</label>

                                        <div class="col-sm-8">
                                            <input type="text" placeholder="city"
                                                   class="form-control margin-bottom b_input" name="city"
                                                   id="mcustomer_city">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"
                                               for="region">Region</label>

                                        <div class="col-sm-8">
                                            <input type="text" placeholder="Region"
                                                   class="form-control margin-bottom b_input" name="region"
                                                   id="region">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"
                                               for="country">Country</label>

                                        <div class="col-sm-8">
                                            <input type="text" placeholder="Country"
                                                   class="form-control margin-bottom b_input" name="country"
                                                   id="mcustomer_country">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"
                                               for="postbox">PostBox</label>

                                        <div class="col-sm-6">
                                            <input type="text" placeholder="PostBox"
                                                   class="form-control margin-bottom b_input" name="postbox"
                                                   id="postbox">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="base-tab2">
                                    <div class="form-group row">

                                        <div class="input-group mt-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="customer1"
                                                       id="copy_address">
                                                <label class="custom-control-label"
                                                       for="copy_address">Same As Billing</label>
                                            </div>

                                        </div>

                                        <div class="col-sm-10 text-info">
                                            Please leave Shipping Address blank if you do not want to print it on the invoice.                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"
                                               for="name_s">Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" placeholder="Name"
                                                   class="form-control margin-bottom b_input" name="name_s"
                                                   id="mcustomer_name_s">
                                        </div>
                                    </div>


                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"
                                               for="phone_s"> Phone</label>

                                        <div class="col-sm-8">
                                            <input type="text" placeholder="phone"
                                                   class="form-control margin-bottom b_input" name="phone_s"
                                                   id="mcustomer_phone_s">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label" for="email_s">Email</label>

                                        <div class="col-sm-8">
                                            <input type="text" placeholder="email"
                                                   class="form-control margin-bottom b_input" name="email_s"
                                                   id="mcustomer_email_s">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"
                                               for="address"> Address</label>

                                        <div class="col-sm-8">
                                            <input type="text" placeholder="address_s"
                                                   class="form-control margin-bottom b_input" name="address_s"
                                                   id="mcustomer_address1_s">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"
                                               for="city_s">City</label>

                                        <div class="col-sm-8">
                                            <input type="text" placeholder="city"
                                                   class="form-control margin-bottom b_input" name="city_s"
                                                   id="mcustomer_city_s">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"
                                               for="region_s">Region</label>

                                        <div class="col-sm-8">
                                            <input type="text" placeholder="Region"
                                                   class="form-control margin-bottom b_input" name="region_s"
                                                   id="region_s">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"
                                               for="country_s">Country</label>

                                        <div class="col-sm-8">
                                            <input type="text" placeholder="Country"
                                                   class="form-control margin-bottom b_input" name="country_s"
                                                   id="mcustomer_country_s">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"
                                               for="postbox">PostBox</label>

                                        <div class="col-sm-6">
                                            <input type="text" placeholder="PostBox"
                                                   class="form-control margin-bottom b_input" name="postbox_s"
                                                   id="postbox_s">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="base-tab3">
                                    <div class="form-group row"><label class="col-sm-2 col-form-label"
                                                                       for="Discount"> Discount </label>
                                        <div class="col-sm-6">
                                            <input type="text" placeholder="Custom Discount"
                                                   class="form-control margin-bottom b_input" name="discount">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"
                                               for="taxid">TAX ID</label>

                                        <div class="col-sm-6">
                                            <input type="text" placeholder="TAX ID"
                                                   class="form-control margin-bottom b_input" name="taxid">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"
                                               for="docid">Document ID</label>

                                        <div class="col-sm-6">
                                            <input type="text" placeholder="Document ID"
                                                   class="form-control margin-bottom b_input" name="docid">
                                        </div>
                                    </div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label"
                                                                       for="c_field">Extra </label>
                                        <div class="col-sm-6">
                                            <input type="text" placeholder="Custom Field"
                                                   class="form-control margin-bottom b_input" name="c_field">
                                        </div>
                                    </div>
                                    

                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"
                                               for="customergroup">Customer group</label>

                                        <div class="col-sm-6">
                                            <select name="customergroup" class="form-control b_input">
                                                <option value='1'>Default Group</option>                                            </select>


                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"
                                               for="currency">Language</label>

                                        <div class="col-sm-6">
                                            <select name="language" class="form-control b_input">

                                                <option value="english">--english--</option><option value="english">English</option> <option value="arabic">Arabic</option><option value="bengali">Bengali</option>
                       <option value="czech">Czech</option><option value="chinese-simplified">Chinese-simplified</option> <option value="chinese-traditional">Chinese-traditional</option> <option value="dutch">Dutch</option><option value="french">French</option><option value="german">German</option><option value="greek">Greek</option><option value="hindi">Hindi</option><option value="indonesian">Indonesian</option>  <option value="italian">Italian</option><option value="japanese">Japanese</option><option value="korean">Korean</option><option value="latin">Latin</option> <option value="polish">Polish</option><option value="portuguese">Portuguese</option> <option value="russian">Russian</option> <option value="swedish">Swedish</option><option value="spanish">Spanish</option><option value="turkish">Turkish</option><option value="urdu">Urdu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"
                                               for="currency">Customer Login</label>

                                        <div class="col-sm-6">
                                            <select name="c_login" class="form-control b_input">

                                                <option value="1">Yes</option>
                                                <option value="0">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"
                                               for="password_c">New Password</label>

                                        <div class="col-sm-6">
                                            <input type="text" placeholder="Leave blank for auto generation"
                                                   class="form-control margin-bottom b_input" name="password_c"
                                                   id="password_c">
                                        </div>
                                    </div>


                                </div>
                                <div>
                                    <input type="submit" class="btn btn-lg btn btn-primary margin-bottom round float-xs-right mr-2" value="Add customer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
</div>
</div>
@endsection