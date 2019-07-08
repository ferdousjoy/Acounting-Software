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
      <div class="card">
        <div class="card-content">
          <div id="notify" class="alert alert-success" style="display:none;">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
              <div class="message"></div>
          </div>
          <div class="card-body">
            <form id="invoicesForm" method="post" action="{{route('pos.update',$po->id)}}">
              @csrf @method('PUT')
              <div class="row">
                 <div class="col-sm-12">
                   <div id="customerpanel" class="inner-cmp-pnl">
                      <div class="form-group row">
                        <div class="frmSearch col-sm-12">
                          <h2>Update PO Setup</h2>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="row" style="transform:translateX(-29px);">
                          <div class="col-md-4">
                            <label for="po_no" style="float:right" class="caption">PO No</label>
                          </div>
                          <div class="col-md-6">
                             <input type="text" class="form-control" name="po_no" style="margin-bottom:17px;border:1px solid #babfc7;padding:10px;border-radius:4px;" value="{{ $po->po_no }}">
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
                              <select name="customer_id" id="customer_id" class="form-control">
                                 <option>--choose one--</option>
                                  @foreach($customers as $customer)
                                    <option value="{{$customer->id}}"{{($customer->id == $po->customer_id)?' selected':''}}>{{$customer->name}}</option>
                                  @endforeach
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="row">
                            <div class="col-md-4">
                              <label for="shipping_address" style="float:right" class="caption">Shipping</label>
                            </div>
                            <div class="col-md-6">
                              <select name="shipping_address" id="shipping_address" class="selectpicker form-control">
                                <option>--choose one--</option>
                                 @foreach($shipping_addresses as $shipping_address)
                                   <option value="{{$shipping_address->line}}"{{($shipping_address->line == $po->shipping_address)?' selected':''}}>{{$shipping_address->line}}</option>
                                 @endforeach
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
                            <input type="date" class="form-control"  name="po_date" data-toggle="datepicker" value="{{ $po->po_date }}" autocomplete="false">
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
                            <select name="currency" class="selectpicker form-control">
                              <option value="BDT"{{($po->currency == "BDT")?' selected':''}}>BDT</option>
                              <option value="Indian"{{($po->currency == "Indian")?' selected':''}}>Indian</option>
                              <option value="Doller"{{($po->currency == "Doller")?' selected':''}}>Doller</option>
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
                            <input type="date" class="form-control"  name="po_exdate" data-toggle="datepicker" value="{{ $po->po_exdate }}" autocomplete="false">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="row">
                          <div class="col-md-4">
                            <label for="invocieno" style="float:right" class="caption">Terms & Condition</label>
                          </div>
                          <div class="col-md-6">
                            <textarea cols="25" rows="3" name="notes" style="resize:none; border-radius:2px;border-color:#e4e4e4;">{{ $po->notes }}</textarea>
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
                      @foreach($pos as $k=>$po_product)
                      <tr>
                        <td style="width:150px">
                          <select name="product[]" class="form-control ivProduct" style="width:150px">
                            <option disable>--Choose one--</option>
                            @foreach($products as $product)
                            <option value="{{$product->id}}"{{($product->id == $po_product->product_id)?' selected':''}}>{{$product->name}}</option>
                            @endforeach
                          </select>
                        </td>
                        <td style="width:220px;"><textarea class="form-control ivDescription" name="description[]" style="height:39px;border:none;background:transparent">{{ $po_product->description }}</textarea></td>
                        <td style="width:50px!important"><input type="text" class="form-control ivQuantity" name="quantity[]"  style="width:70px !important;border:none;background:transparent;" value="{{ $po_product->quantity }}"></td>
                        <td style="width:50px!important";><input class="form-control ivUnit" name="unit[]" style="width:60px !important;border:none;background:transparent" value="{{ $po_product->unit }}"></td>
                        <td style="width:50px!important"><input type="text" class="form-control ivPrice"  name="price[]" style="width:70px !important;border:none;background:transparent;" value="{{ $po_product->price }}" ></td>
                        <td style="width: 140px !important">

                          <select class="form-control ivTax"  name="tax[]"  style="width: 140px !important" value="0">
                            <option value="0" selected>No Tax</option>
                            @foreach($taxs as $tax)
                            <option value="{{$tax->percentage}}"{{($tax->percentage == $po_product->tax)?' selected':''}}>{{$tax->tax}}</option>
                            @endforeach
                          </select>

                        </td>
                        <td style="width:100px" class="ivAmmountBox">
                          @if($k>0) <button type="button" class="delete">&times;</button> @endif
                          <input type="text" class="form-control ivAmmount" name="total[]" style="width:100px;border:none;background:transparent" value="{{ $po_product->total }}" readonly>
                        </td>
                      </tr>
                      @endforeach

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
@endsection
@section('footer_scripts')
<script>

$(document).ready(function(){
    $('#customer_id').change(function() {
      var customer_id = $(this).val();
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            method:'POST',
            url:'{{ route("pos.getshiplist") }}',
            data:{customer_id: customer_id},
            success: function (data) {
              $( "#shipping_address" ).html(data);
            }
       });
    });
});


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
      var product_id = $(this).val();
      var $tr = $(this).parents('tr');
      $.ajax({
          headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          type:'POST',
          url:'{{ route("pos.getAjaxProduct") }}',
          data:{product_id: product_id},
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
@endsection
