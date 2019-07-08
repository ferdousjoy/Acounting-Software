@extends('layouts.dashboard')
@section('title','Create Product')
@section('content')
@php
    $lists=DB::table('unit_models')->get();
    $no=1;
@endphp
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            @include('layouts.inc.success')
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5 class="w-100 text-center">Add Product</h5>
            <hr>
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
                <form method="post" action="{{Route('product_add_form')}}"  enctype="multipart/form-data">
                @csrf
                 <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label" for="name">Name</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Name"
                               class="form-control margin-bottom required" name="name">
                    </div>
                </div>
                 <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label" for="phone"> Description</label>


                    <div class="col-sm-6">
                        <textarea type="text" placeholder="Describtion"
                               class="form-control margin-bottom  required" name="Describtion">
                              </textarea>
                    </div>
                </div>
                <hr>
                  <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label" for="name">Unit</label>

                    <div class="col-sm-6">
                               <select class="form-control margin-bottom required" name="unit">

                              <option>--Select One--</option>

                                @foreach ($lists as $category)
                                <option value="{{ $category->unit_name }}">{{ $category->unit_name}} </option>
                                @endforeach
                               </select>
                    </div>
                </div>
                    <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label" for="phone"> Sales Price</label>

                    <div class="col-sm-6">
                        <input type="number" placeholder="Price"
                               class="form-control margin-bottom  required" name="price">
                    </div>
                </div>


                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label" for="phone"> Income account</label>

                    <div class="col-sm-6">

                               <select  class="form-control margin-bottom  required" name="income_account">
                                 <option>--choose One-- </option>
                                 @foreach($account as $key)
                                 <option value="{{$key->account_name}}">{{$key->account_name}}</option>
                                 @endforeach

                               </select>
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label" for="email"> Expense account</label>

                    <div class="col-sm-6">
                               <select class="form-control margin-bottom required" name="expense_account">
                                       <option>--choose One-- </option>
                                       @foreach($account2 as $key)
                                       <option value="{{$key->account_name}}">{{$key->account_name}}</option>
                                       @endforeach
                               </select>


                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label"
                           for="address">Tax</label>

                    <div class="col-sm-6">
                               <select class="form-control margin-bottom" name="sales_tax">
                                       <option>--choose One-- </option>
                                       @foreach($tax as $key)
                                       <option value="{{$key->percentage}}">{{$key->tax}}</option>
                                       @endforeach
                               </select>


                    </div>
                </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4" style="padding-left: 18%;">
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
@endsection
