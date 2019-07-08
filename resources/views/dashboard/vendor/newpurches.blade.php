@extends('layouts.dashboard')
@section('title','Create  Estimate')
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
                        <div class="col-sm-12">
                            <div id="customerpanel" class="inner-cmp-pnl">
                               
                                <div class="form-group row">
                                    <div class="frmSearch col-sm-12">  
                                             <h2>Create Vendor</h2>
                                    </div>
                                </div>
                                <form method="post"" action="{{Route('new_quote_form')}}">
                                @csrf
                                <div class="col-md-6">    
                                    <div class="input-group">
                                            <input type="text" class="form-control" value="Estimate" name="number">
                                            <input style="margin-left:20px;" type="number" class="form-control" placeholder="Quote #" name="number" value="1">
                                          
                             </div>                                       

                                </div>
                            </div>
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-sm-12 cmp-pnl">
                            <div class="inner-cmp-pnl">
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                            <div class="row">
                                            <div class="col-md-4">
                                            <label for="invocieno" style="float:right" class="caption">Cutomer</label>
                                            </div>
                                          <div class="col-md-6">
                                          <select name="" id="" class="selectpicker form-control">
                                                <option value="1">Customer</option>
                                                <option value="1">Customer</option>
                                                <option value="1">Customer</option>
                                            </select>
                                          </div>
                                            </div>
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="row">
                                            <div class="col-md-4">
                                            <label for="invocieno" style="float:right" class="caption">Date</label>
                                            </div>
                                          <div class="col-md-6">
                                          <input type="date" class="form-control "  name="date" data-toggle="datepicker" autocomplete="false">
                                          </div>
                                            </div>
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="row">
                                            <div class="col-md-4">
                                            <label for="invocieno" style="float:right" class="caption">Subheading</label>
                                            </div>
                                          <div class="col-md-6">
                                             <input type="text" class="form-control "  name="subheading" >
                                          </div>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                            <div class="row">
                                            <div class="col-md-4">
                                            <label for="invocieno" style="float:right" class="caption">Currency</label>
                                            </div>
                                          <div class="col-md-6">
                                          <select name="currency" id="" class="selectpicker form-control">
                                                <option value="1">BD</option>
                                                <option value="1">Indian</option>
                                                <option value="1">Doller</option>
                                            </select>
                                          </div>
                                            </div>
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="row">
                                            <div class="col-md-4">
                                            <label for="invocieno" style="float:right" class="caption">Expire Date</label>
                                            </div>
                                          <div class="col-md-6">
                                          <input type="date" class="form-control "  name="exdate" data-toggle="datepicker" autocomplete="false">
                                          </div>
                                            </div>
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="row">
                                            <div class="col-md-4">
                                            <label for="invocieno" style="float:right" class="caption">Footer</label>
                                            </div>
                                          <div class="col-md-6">
                                             <input type="text" class="form-control "  name="subheading" >
                                          </div>
                                            </div>
                                    </div>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="row">
                                            <div class="col-md-4">
                                            <label for="invocieno" style="float:right" class="caption">O/S.O</label>
                                            </div>
                                          <div class="col-md-6">
                                          <input type="tex" class="form-control "  name="exdate" data-toggle="datepicker" autocomplete="false">
                                          </div>
                                            </div>
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="row">
                                            <div class="col-md-4">
                                            <label for="invocieno" style="float:right" class="caption">Memo</label>
                                            </div>
                                          <div class="col-md-6">
                                          <textarea class="form-control" name="memo" rows="4"></textarea>
                                          </div>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-md-12">
                            <table id="invoices" class="table table-striped table-bordered  dataex-res-constructor">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Tax</th>
                        <th>Ammount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                        <select name="product" id="" class="selectpicker form-control">
                             <option value="1">Mobile</option>
                             <option value="1">Laptop</option>
                             <option value="1">Watch</option>
                       </select>
                        </td>
                        <td>
                        <input type="text" class="form-control"  name="description">
                        </td>
                        <td>
                        <input type="text" class="form-control" id="amount-0"  name="quantity">
                        </td>
                        <td>
                        <input type="text" class="form-control"  name="price" id="price-0">
                        </td>
                        <td>
                        <input type="text" class="form-control"  name="tax" id="vat-0">
                        </td>
                        <td class="text-center" id="texttaxa-0">0</td>
                    </tr>
                    </tbody>

                    <tfoot>
                    </tfoot>
                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row" >
                    <div class="col-md-12 text-center" style="padding-bottom:20px;">
                    <input style="border-radious:30px;margin-botom:20px;"  type="submit" class="btn btn-primary sub-btn" value="Save" data-loading-text="Creating...">
                        <input style="border-radious:30px;margin-botom:20px;"  type="submit" class="btn btn-primary sub-btn" value="Send" data-loading-text="Creating...">
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
@endsection