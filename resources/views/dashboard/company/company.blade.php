@extends('layouts.dashboard')
@section('title','Company Setting')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5>Edit Company Details</h5>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-content">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                <div class="message"></div>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-6 border-right-blue">
                        <form method="post" class="form-horizontal" action="{{Route('edit_company_form')}}">
                        @csrf
                        @method('put')

                            <input type="hidden" name="id" value="1">


                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label"
                                       for="name">Company Name</label>

                                <div class="col-sm-10">
                                    <input type="text" placeholder="Name" class="form-control margin-bottom  required" name="name"
                                           value="{{$company->company_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"
                                       for="address"> Address</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="address"
                                           class="form-control margin-bottom  required" name="address"
                                           value="{{$company->company_address}}">
                                </div>
                            </div>
                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label"
                                       for="city">City</label>

                                <div class="col-sm-10">
                                    <input type="text" placeholder="city"
                                           class="form-control margin-bottom  required" name="city"
                                           value="{{$company->company_city}}">
                                </div>
                            </div>
                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label"
                                       for="city">Region</label>

                                <div class="col-sm-10">
                                    <input type="text" placeholder="city"
                                           class="form-control margin-bottom  required" name="region"
                                           value="{{$company->company_region}}">
                                </div>
                            </div>
                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label"
                                       for="country">Country</label>

                                <div class="col-sm-10">
                                    <input type="text" placeholder="Country"
                                           class="form-control margin-bottom  required" name="country"
                                           value="{{$company->company_country}}">
                                </div>
                            </div>

                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label"
                                       for="postbox">PostBox</label>

                                <div class="col-sm-10">
                                    <input type="text" placeholder="PostBox"
                                           class="form-control margin-bottom  required" name="postbox"
                                           value="{{$company->company_postbox}}">
                                </div>
                            </div>

                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label"
                                       for="phone"> Phone</label>

                                <div class="col-sm-10">
                                    <input type="text" placeholder="phone"
                                           class="form-control margin-bottom  required" name="phone"
                                           value="{{$company->company_phone}}">
                                </div>
                            </div>
                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label"
                                       for="email"> Email</label>

                                <div class="col-sm-10">
                                    <input type="text" placeholder="email"
                                           class="form-control margin-bottom  required" name="email"
                                           value="{{$company->company_email}}">
                                </div>
                            </div>
                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label"
                                       for="email">Tax ID </label>

                                <div class="col-sm-10">
                                    <input type="text" placeholder="TAX ID"
                                           class="form-control margin-bottom" name="taxid"
                                           value="{{$company->company_tax}}">
                                </div>
                            </div>
                            <div class="form-group row">


                                <div class="col-sm-12"><label class=" col-form-label"
                                                              for="data_share">Product Data Sharing with Other
                                        Locations</label><select name="data_share" class="form-control">

                                        <option value="{{$company->company_data_share}}">{{$company->company_data_share}}</option>                                                                              
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>


                                    </select>

                                </div>
                            </div>

                    </div>
                    <div class="col-6">
                        <div class="card card-block">
                            <div id="notify" class="alert alert-success" style="display:none;">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>

                                <div class="message"></div>
                            </div>
                                <div class="grid_3 grid_4">

                                    <h5>Company Logo</h5>
                                    <hr>

                                    <div class="ibox-content no-padding border-left-right">
                                        <img alt="image" src="{{asset('uploads/company')}}/{{$company->company_logo}}" height="100" class="rounded-circle">
                                    </div>
                                    <hr>
                                    <p>
                                        <label for="fileupload"></label><input  type="file" name="files"></p>
                                    <pre>Recommended logo size is 500x200px.</pre>
                                </div>
                        </div>
                    </div>
                    <div class="form-group row">

                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit"  class="btn btn-success margin-bottom"
                            value="Update Company">
                            <input type="hidden" value="{{$company->id}}" name="id">
                    </div>
                    </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection