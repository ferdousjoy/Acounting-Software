@extends('layouts.dashboard')
@section('title','Supplier Form')
@section('content')
@include('layouts.inc.success')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5>Add New supplier Details</h5>

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
            <form method="post" class="form-horizontal" action="{{Route('add_supplier_form')}}">
            @csrf
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="name">Name</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Name"
                               class="form-control margin-bottom required" name="name">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="name">Company</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Company"
                               class="form-control margin-bottom" name="company">
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="phone"> Phone</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="phone"
                               class="form-control margin-bottom  required" name="phone">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="email"> Email</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="email"
                               class="form-control margin-bottom required" name="email">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="address"> Address</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="address"
                               class="form-control margin-bottom" name="address">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="city">City</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="city"
                               class="form-control margin-bottom" name="city">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="region">Region</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Region"
                               class="form-control margin-bottom" name="region">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="country">Country</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Country"
                               class="form-control margin-bottom" name="country">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="postbox">PostBox</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="PostBox"
                               class="form-control margin-bottom" name="postbox">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="postbox">TAX ID</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="TAX"
                               class="form-control margin-bottom" name="taxid">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Bank Account</label>

                    <div class="col-sm-6">
                        <input type="text"class="form-control"
                                data-loading-text="Adding...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Bank</label>

                    <div class="col-sm-6">
                        <select class="form-control"
                                data-loading-text="Adding...">
                            <option>Bangladesh Development Bank Limited</option>
                            <option>Rupali Bank Limited</option>
                            <option>BASIC Bank Limited</option>
                            <option>Agrani Bank Limited</option>
                            <option>Janata Bank Limited</option>
                            <option>Sonali Bank Limited</option>
                            <option>Probashi Kallyan Bank</option>
                            <option>Rajshahi Krishi Unnayan Bank</option>
                            <option>Bangladesh Krishi Bank</option>
                            <option>One Bank Limited</option>
                            <option>NRB Global Bank Limited</option>
                            <option>NRB Commercial Bank Ltd</option>
                            <option>NRB Bank Limited</option>
                            <option>National Credit & Commerce Bank Limited</option>
                            <option>National Bank Limited</option>
                            <option>Mutual Trust Bank Limited</option>
                            <option>Modhumoti Bank Limited</option>
                            <option>Midland Bank Limited</option>
                            <option>Mercantile Bank Limited</option>
                            <option>Meghna Bank Limited</option>
                            <option>Jamuna Bank Limited</option>
                            <option>IFIC Bank Limited</option>
                            <option>Eastern Bank Limited</option>
                            <option>Dutch-Bangla Bank Limited</option>
                            <option>Dhaka Bank Limited</option>
                            <option>Community Bank Bangladesh Limited</option>
                            <option>City Bank Limited</option>
                            <option>BRAC Bank Limited</option>
                            <option>Bank Asia Limited</option>
                            <option>Bangladesh Commerce Bank Limited</option>
                            <option>AB Bank Limited</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit"class="btn btn-success margin-bottom"
                               value="Save" data-loading-text="Adding...">
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