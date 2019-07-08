@extends('layouts.dashboard')
@section('title','PO Setup')
@section('content')
<style>
        .inputholder{
           margin-right: 20px;
            width: 14%;
            text-align: center;
        }
        .addbtn{
            margin-top: 30px;
        }
        .inputholder label{
             text-transform: capitalize;
            font-size: 18px;
        }
        .form-container{
          padding:10px;
          padding-bottom:25px;
          margin:0 auto;
          margin-top:20px;
          width:100%;
          border-radius:20px;
          background-color: #ececec;
        }

        .add-one{
          color:green;
          text-align:center;
          font-weight:bolder;
          cursor:pointer;
          margin-top:10px;
        }

        .delete {
            color: white;
            background-color: rgb(231, 76, 60);
            text-align: center;
            font-weight: 700;
            border-radius: 50%;
            width: 20px;
            height:20px;
            cursor: pointer;
            border: 0;
            padding: 0;
            position: absolute;
            right:36px;
            top:calc(50% - 10px);
        }
        #invoicesTable th,
        #invoicesTable td{vertical-align: middle;}
        #singlebutton{
          width:100%;
          margin-top:20px;
        }

        .title{
          text-align:center;
          font-size:40px;
          margin-bottom:40px;
        }

        .dynamic-element{
          margin-bottom:0px;
        }
        .ivAmmountBox{position: relative;}
        .ivAmmount{
          background: transparent;
            border: 0;
            text-align: center;
        }
    </style>
<!-- Horizontal navigation-->
@include('layouts.inc.success')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
      <div class="content-body">
        <div class="card">
          <div class="card-content">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <div class="message"></div>
            </div>
            <div class="card-body">
              <form id="invoicesForm" method="post" action="{{Route('new_quote_form')}}">
                @csrf
                <div class="row">
                  <div class="col-sm-12">
                    <div id="customerpanel" class="inner-cmp-pnl">
                        <div class="form-group row">
                          <div class="frmSearch col-sm-12">
                            <h2>PO Setup</h2>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="row" style="transform:translateX(-29px);">
                            <div class="col-md-4">
                              <label for="invocieno" style="float:right" class="caption">PO No</label>
                            </div>
                            <div class="col-md-6">
                               <input type="text" class="form-control" name="purchase_order" style="margin-bottom:17px; resize:none;
                               height: 41px; border: 1px solid #babfc7; padding: 10px; border-radius: 4px;">
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
                                  <label for="invocieno" style="float:right" class="caption">Customer</label>
                              </div>
                              <div class="col-md-6">
                                <select name="customer" id="customer_po" class="selectpicker form-control js-example-basic-single">
                                    <option> --choose one--
                                    </option>
                                      @foreach($cus as $cus)
                                    <option value="{{$cus->id}}">{{$cus->customer}}</option>
                                      @endforeach
                                  </select><br>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="row">
                                <div class="col-md-4">
                                  <label for="invocieno" style="float:right" class="caption">Shipping</label>
                                </div>
                                <div class="col-md-6">
                                  <select name="ship_address" id="contact_ship" class="selectpicker form-control">
                                  </select><br>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="row">
                                <div class="col-md-4">
                                  <label for="invocieno" style="float:right" class="caption">Issue Date</label>
                                </div>
                                <div class="col-md-6">
                                  <input type="date" class="form-control"  name="Issue_date" data-toggle="datepicker" value="{{ date('m/d/Y') }}" autocomplete="false">
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
                                    <option value="BDT">BDT</option>
                                    <option value="Indian">Indian</option>
                                    <option value="Doller">Doller</option>
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
                                  <input type="date" class="form-control"  name="expire_date" data-toggle="datepicker" value="{{ date('m/d/Y') }}" autocomplete="false">
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="row">
                                <div class="col-md-4">
                                  <label for="invocieno" style="float:right" class="caption">Terms & Condition</label>
                                </div>
                                <div class="col-md-6">
                                  <textarea id="" cols="25" rows="3" name="notes" style="resize:none; border-radius:2px;border-color:#e4e4e4;"></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <table id="invoicesTable" class="table table-striped table-bordered  dataex-res-constructor">
                            <thead>
                              <tr>
                                <th>Product</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Unit</th>
                                <th>Price</th>
                                <th>Tax</th>
                                <th>Amount</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td style="width:150px">
                                  <select name="product[]" class="form-control ivProduct" style="width:150px">
                                    <option disable>--Choose one--</option>
                                    @foreach($product as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                    @endforeach
                                  </select>
                                </td>
                                <td style="width:220px;"><textarea class="form-control ivDescription" name="description[]" style="height:39px;border:none;background:transparent"></textarea></td>
                                <td style="width:50px!important"><input type="text" class="form-control ivQuantity" name="quantity[]"  style="width:70px !important;border:none;background:transparent;" value="0"></td>
                                <td style="width:50px!important";>
                                 <textarea class="form-control ivUnit" name="unit[]" style="width:60px !important;height:39px;resize:none;border:none;background:transparent"></textarea>
                                    </td>
                                <td style="width:50px!important"><input type="text" class="form-control ivPrice"  name="price[]" style="width:70px !important;border:none;background:transparent;" value="0" ></td>
                                <td style="width: 140px !important">

                                  <select class="form-control ivTax"  name="tax[]"  style="width: 140px !important" value="0">
                                    <option value="0" selected>No Tax</option>
                                    @foreach($tax as $key)
                                    <option value="{{$key->percentage}}">{{$key->tax}}</option>
                                    @endforeach
                                  </select>

                                </td>
                                <td style="width:100px" class="ivAmmountBox"><input type="text" class="form-control ivAmmount" name="total[]" style="width:100px;border:none;background:transparent" value="0.00" readonly></td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr>
                                <td colspan="7">
                                  <button type="button" id="add_one" class="btn btn-success btn-block">+ Add More</button>
                                </td>
                              </tr>
                            </tfoot>
                          </table>
                          <div class="dynamic-stuff"></div>
                        </div>
                      </div>
                      <div class="row" >
                        <div class="col-md-12 text-center" style="padding-bottom:20px; margin-top:15px;">
                          <input style="border-radious:30px;margin-botom:20px;"  type="submit" class="btn btn-primary sub-btn" value="Save" data-loading-text="Creating...">
                          <input style="border-radious:30px;margin-botom:20px;"  type="submit" class="btn btn-primary sub-btn" value="Send" data-loading-text="Creating...">
                          <a href="#" style="border-radious:30px;margin-botom:20px;" class="btn btn-primary sub-btn" value="Send" data-loading-text="Creating...">Print</a>
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

$(document).ready(function(){
$('#customer_po').change(function() {
var country_id = $(this).val();
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
      type:'POST',
      url:'/getshiplist',
      data:{country_id: country_id},
      success: function (data) {
        $( "#contact_ship" ).html(data);
      }
 });

});
});

</script>

  <script>
  $(document).ready(function(){
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
<script type="text/javascript">

$(function(){
  $form = $('#invoicesForm');
  $table = $form.find('#invoicesTable');
  $tbody = $table.find('tbody');

  $(function(){
    //Clone the hidden element and shows it
    $form.on('click','#add_one',function(){

      $tr = $tbody.find('tr:first-child').clone();
      //$tr.find('.ivProduct').html('');
      $tr.find('.ivDescription').html('');
      $tr.find('.ivQuantity').val(0);
      $tr.find('.ivPrice').val(0);
      $tr.find('.ivTax').prop("selectedIndex", 0);
      $tr.find('.ivAmmount').val(0);
      $tr.find('td:last-child').append('<button type="button" class="delete">&times;</button>');
      $tr.appendTo( $tbody );

    });

    $form.on('click','.delete',function(){
      $(this).parents('tr').remove();
    });
  });



  $(function(){
    $form.on('change','.ivProduct',function() {
      var country_id = $(this).val();
      var $tr = $(this).parents('tr');
      $.ajax({
          headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          type:'POST',
          url:'/getajaxproduct',
          data:{country_id: country_id},
          success: function (data) {
            $data = JSON.parse(data);
            $tr.find('.ivDescription').html($data.description);
            $tr.find('.ivPrice').val($data.price);
            //$tr.find('.ivTax').val($data.tax);
            $tr.find('.ivUnit').val($data.unit);

            //console.log($data);
            $tr.find('.ivTax option').each(function(){
                if($(this).val()==$data.tax){
                    $(this).attr("selected","selected");
                }else if($(this).is(":selected")){
                  $(this).removeAttr('selected');
                }
            });
          }
      });
    });


  });
  $(function(){
    $form.on('keyup','.ivQuantity,.ivPrice',function(){
        $tr = $(this).parents('tr');

        var price = parseInt($tr.find('.ivPrice').val());
        var qty = parseInt($tr.find('.ivQuantity').val());
        //var vat = parseInt($('#vat-0').val());
        $tr.find('.ivAmmount').val(price*qty);
        //$('#ivAmmount').val((price*amount) + vat);
    });
  });
  $form.on('change','.ivTax',function(){
    $tr = $(this).parents('tr');

    var price = parseInt($tr.find('.ivPrice').val());
    var qty = parseInt($tr.find('.ivQuantity').val());
    var tax = parseInt($tr.find('.ivTax').val());
    var totaltax = parseInt(price*qty*tax/100);
    $tr.find('.ivAmmount').val(price*qty + totaltax);
  });
});
</script>
<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
@endsection
