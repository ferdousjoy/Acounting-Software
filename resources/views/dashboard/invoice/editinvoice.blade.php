@extends('layouts.dashboard')
@section('title','Update Challan')
@section('content')
<!-- Horizontal navigation-->
@include('layouts.inc.success')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card" style="padding: 43px;">
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
                                    <div class="frmSearch col-sm-12 px-0">
                                             <h2 class="ml-0" style="transform: translateX(-9px);">Update Challan</h2>
                                    </div>
                                </div>
                                <form method="post" action="{{ url('update-challan') }}">
                                @csrf
                                <div class="col-sm-6">
                                              <div class="row">
                                              <div class="col-md-4">
                                              <label for="invocieno" style="transform: translateX(-35%);" class="caption">Chalan number</label>
                                              </div>
                                            <div class="col-md-6">
                                              <input type="hidden" name="product_id" value="{{$challan_number->id}}">
                                            <textarea name="chalan_name"  class="form-control" style="margin-bottom:17px; resize:none;
                                            height: 41px; border: 1px solid #babfc7; padding: 10px; border-radius: 4px; width:285px"> {{$challan_number->chalan_name}}</textarea>


                                            </div>
                                              </div>
                                      </div>


                                  </div>
                                   <div class="col-sm-6 ml-auto">
                                              <div class="row" style="transform: translateY(-29px);">
                                              <div class="col-md-4">
                                              <label for="invocieno" style="transform: translateX(0%);" class="caption"> PO Number</label>
                                              </div>
                                            <div class="col-md-6">

                                              <select name="po_number"  class="form-control" placeholder="Chalan Name" style="margin-left:15px; width:106%" id="city">

                                              </select>
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
                                      <div class="col-sm-6">
                                              <div class="row">
                                              <div class="col-md-4">
                                              <label for="invocieno" class="caption">Customer</label>
                                              </div>
                                            <div class="col-md-6">
                                            <select name="customer" class="selectpicker form-control" id="country_id">
                                                 <option>--Choose One--</option>
                                              @foreach($cus as $key)
                                                <option id="field1" value="{{$key->id}}">{{$key->customer}}</option>
                                              @endforeach
                                              </select>
                                            </div>
                                              </div>
                                      </div>
                                      <div class="col-sm-6">
                                              <div class="row">
                                              <div class="col-md-4">
                                              <label for="invocieno"  class="caption">Driver Name</label>
                                              </div>
                                            <div class="col-md-6">
                                            <input type="text" class="form-control"  name="drivername" value="{{$challan_number->drivername}}">
                                            </div>
                                              </div>
                                      </div>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <div class="col-sm-6">
                                              <div class="row">
                                              <div class="col-md-4">
                                              <label for="invocieno"  class="caption">Shipping Address</label>

                                              </div>
                                            <div class="col-md-6">
                                              <select name="shippingaddress" class="selectpicker form-control" id="ship">

                                                </select>
                                            </div>
                                              </div>
                                      </div>
                                      <div class="col-sm-6">
                                              <div class="row">
                                              <div class="col-md-4">
                                              <label for="invocieno"  class="caption">Driver Mobile</label>
                                              </div>
                                            <div class="col-md-6">
                                               <input type="text" class="form-control "  name="drivermobile" >
                                            </div>
                                              </div>
                                      </div>
                                      </div>
                                  <div class="form-group row">
                                      <div class="col-sm-6">
                                      <div class="row">
                                              <div class="col-md-4">
                                              <label for="invocieno"  class="caption">Date</label>
                                              </div>
                                              <div class="col-md-6">
                                              <input type="date" class="form-control "  name="date" >
                                      </div>
                                      </div>

                                      </div>
                                      <div class="col-sm-6">
                                              <div class="row">
                                              <div class="col-md-4">
                                              <label for="invocieno"  class="caption">Track Number</label>
                                              </div>
                                            <div class="col-md-6">
                                            <input type="text" class="form-control "  name="tracknumber" >
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
                          <th>Unit</th>
                          <th>Transport</th>
                          <th>Total Amount</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td>
                            <select name="product" id="productu" class="form-control">
                                 <option> --choose one--
                                 </option>
                                   @foreach($product as $key)
                                 <option value="{{$key->name}}"> {{$key->name}}</option>
                                   @endforeach
                               </select>
                          </td>
                          <td>
                          <textarea class="form-control" id="des" name="description" style="width:220px; height:42px"></textarea>
                          </td>
                          <td>
                          <input type="number" class="form-control" id="num1"  name="quantity">
                          </td>
                          <td>
                          <select class="form-control"  name="price">
                            @foreach($unit as $key)
                            <option value="{{$key->unit_name}}">{{$key->unit_name}}</option>
                            @endforeach
                          </select>

                          </td>
                          <td>
                          <input type="number" class="form-control"  name="transport" id="num3">
                          </td>

                          <td class="text-center"   id="theProduct">
                         <input type="text" name="total" class="total" style="border:none" >
                          </td>
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
@section('footer_scripts')
<script>
var quantity = $('#num1').val();
var tranpost = $('#num3').val();
var total = Math.round(Number(quantity)+Number(tranpost));
$('.total-s').val(total);

$("#num1,#num3").keyup(function(){
var quantity = $('#num1').val();
var tranpost = $('#num3').val();
var total = Math.round(Number(quantity)+Number(tranpost));
$('.total').val(total);
});
</script>
  <script>
  $(document).ready(function(){
   $('#country_id').change(function() {
   var country_id = $(this).val();
   $.ajaxSetup({
     headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
     });
   $.ajax({
     type:'POST',
     url:'/getcitylist2',
     data:{country_id: country_id},
     success: function (data) {
         var result = data.split('###');
       $( "#city" ).html(result[0]);
       $( "#ship" ).html(result[1]);
       }
     });

   });


  $('#productu').change(function() {
  var country_id = $(this).val();
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
        type:'POST',
        url:'/getlist',
        data:{country_id: country_id},
        success: function (data) {
          $( "#des" ).html(data);
        }
   });

  });



 });

</script>
@endsection
