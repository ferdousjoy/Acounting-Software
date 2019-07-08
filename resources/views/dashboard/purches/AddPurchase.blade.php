@extends('layouts.dashboard')
@section('title','Purchase')
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
                                             <h2>Purchase</h2>
                                    </div>
                                </div>

                                <form method="post" action="{{Route('insert.purchase')}}">
                                @csrf
                                 <div class="col-sm-4">
                                            <div class="row">
                                            <div class="col-md-4">
                                            <label for="invocieno" style="float:right" class="caption">Receipt No</label>
                                            </div>
                                          <div class="col-md-6">
                                             <input type="text" class="form-control " name="Pnumber" >
                                          </div>
                                            </div>
                                    </div>
                                     <div class="col-sm-4 m-auto" style="transform: translateY(-41px);">
                                            <div class="row">
                                            <div class="col-md-4">
                                            <label for="invocieno" style="float:right" class="caption">Purchase No</label>
                                            </div>
                                          <div class="col-md-6">

                                             <textarea name="receipt" id="" cols="10" rows="4" style="width: 202px; resize:none;
height: 41px;"> {{ App\PurchesModel::count()+1}}</textarea>
                                          </div>
                                            </div>
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
                                            <label for="invocieno" style="float:right" class="caption">Vendor</label>
                                            </div>
                                          <div class="col-md-6">
                                          <select name="vendor_name" id="" class="selectpicker form-control">
                                              <option> --choose one--
                                              </option>
                                                 @foreach($cus as $cus)
                                              <option value="{{$cus->name}}"> {{$cus->name}}</option>
                                                @endforeach
                                            </select>

                                            </select>
                                          </div>
                                            </div>
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="row">
                                            <div class="col-md-4">
                                            <label for="invocieno" style="float:right" class="caption">Issue Date</label>
                                            </div>
                                          <div class="col-md-6">
                                          <input type="date" class="form-control "  name="purchase_date" data-toggle="datepicker" autocomplete="false">
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
                                                <option value="2">Indian</option>
                                                <option value="3">Doller</option>
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
                                            <div class="row" style="transform: translateY(-49px);">
                                            <div class="col-md-4">
                                            <label for="invocieno" style="float:right" class="caption">Note</label>
                                            </div>
                                          <div class="col-md-6">

                                              <textarea id="" cols="20" rows="8" name="note"></textarea>
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
                                            </div>
                                          <div class="col-md-6">
                                          </div>
                                            </div>
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="row">
                                            <div class="col-md-4">

                                            </div>
                                          <div class="col-md-6">

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
                        <th>Ammount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                        <select name="product" id="" class="selectpicker form-control">
                           @foreach($product as $key)
                           <option value="">{{$key->name}}</option>
                           @endforeach
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

                        <td class="text-center" id="texttaxa-0"> </td>
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
