@extends('layouts.dashboard')
@section('title','Add Bank')
@section('content')
@include('layouts.inc.success')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <div class="card card-block">
            <form action="{{Route('add_bank_form')}}" class="card-body"  method="post" accept-charset="utf-8">
                @csrf                                                                                              
            <h5> Add Your Bank</h5>
            <hr>
            <div class="form-group row">

                <label class="col-sm-2 col-form-label text-right"
                       for="accno">Bank Name</label>

                <div class="col-sm-6 col-lg-2">
                    <input type="text" placeholder="Bank Name"
                           class="form-control margin-bottom required" name="bankname">
                </div>
            </div>
          
            <div class="form-group row">

                <label class="col-sm-2 col-form-label"></label>

                <div class="col-sm-4">
                    <input type="submit" class="btn btn-success margin-bottom"
                           value="Add Bank" data-loading-text="Adding...">
                </div>
            </div>


            </form>
        </div>
    </div></div>
</div>
</div>

@endsection