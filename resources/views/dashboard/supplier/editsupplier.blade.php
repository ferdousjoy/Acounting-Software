@extends('layouts.dashboard')
@section('title','Edit Supplier Form')
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
            <form method="post" class="form-horizontal" action="{{Route('edit_supplier_form')}}">
            @csrf
            @method('put')
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="name">Name</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Name"
                               class="form-control margin-bottom required" name="name" value="{{$editsupplier->name}}">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="name">Company</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Company"
                               class="form-control margin-bottom" name="company" value="{{$editsupplier->company}}">
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="phone"> Phone</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="phone"
                               class="form-control margin-bottom  required" name="phone" value="{{$editsupplier->phone}}">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="email"> Email</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="email"
                               class="form-control margin-bottom required" name="email" value="{{$editsupplier->email}}">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="address"> Address</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="address"
                               class="form-control margin-bottom" name="address" value="{{$editsupplier->address}}">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="city">City</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="city"
                               class="form-control margin-bottom" name="city" value="{{$editsupplier->city}}">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="region">Region</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Region"
                               class="form-control margin-bottom" name="region" value="{{$editsupplier->region}}">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="country">Country</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Country"
                               class="form-control margin-bottom" name="country" value="{{$editsupplier->country}}">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="postbox">PostBox</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="PostBox"
                               class="form-control margin-bottom" name="postbox" value="{{$editsupplier->postbox}}"> 
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="postbox">TAX ID</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="TAX"
                               class="form-control margin-bottom" name="taxid" value="{{$editsupplier->tax}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit"class="btn btn-success margin-bottom"
                               value="Add" data-loading-text="Adding...">
                               <input type="hidden" value="{{$editsupplier->id}}" name="id">
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