@extends('layouts.dashboard')
@section('title','Create  Quotation')
@section('content')
<style>

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
.table th, .table td {
    padding: .75rem;
}
</style>
<!-- Horizontal navigation-->
@include('layouts.inc.success')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row"></div>
    <div class="content-body">
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
                    <form id="invoicesForm" method="post" action="{{route('quotations.store')}}" style="padding:30px;">
                          @csrf
                          <div class="form-group row">
                            <div class="frmSearch col-sm-12">
                              <h2>Add Quotation</h2>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="input-group" style="margin-left:20px">
                                <label for="quotation_no" class="caption" style="transform: translateX(-17px);">Quotation No*</label>
                                <input class="form-control" type="text" name="quotation_no" id="quotation_no" style="max-width:150px" value="{{$quotation_no+1}}">
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
                                        <label for="invocieno"  class="caption">Cutomer*</label>
                                      </div>
                                      <div class="col-md-6">
                                        <select name="customer_id" class="selectpicker form-control js-example-basic-single" required>
                                          <option disable="disabled">--Choose one--</option>
                                          @foreach($customers as $customer)
                                          <option value="{{$customer->id}}">{{$customer->name}}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-4">
                                    <div class="row">
                                      <div class="col-md-4">
                                        <label for="invocieno" class="caption">Date*</label>
                                      </div>
                                      <div class="col-md-6">
                                        <input type="date" class="form-control"  name="quotation_date" data-toggle="datepicker" autocomplete="false" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-4">
                                    <div class="row"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-sm-4">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label for="invocieno"  class="caption">Currency*</label>
                                    </div>
                                    <div class="col-md-6">
                                      <select name="currency" class="selectpicker form-control" required>
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
                                      <label for="invocieno"  class="caption">Expire Date*</label>
                                    </div>
                                    <div class="col-md-6">
                                      <input type="date" class="form-control"  name="quotation_exdate" data-toggle="datepicker" autocomplete="false" required>
                                    </div>
                                  </div>
                                </div>
                                  <div class="col-sm-4">
                                    <div class="row" style="margin-top:-61px;">
                                      <div class="col-md-4"><label for="invocieno" class="caption">Terms and Condition</label></div>
                                      <div class="col-md-6"><textarea class="form-control" name="memo" rows="2" style="resize:none"></textarea></div>
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
                                        <select name="products[]" class="form-control ivProduct" style="width:150px">
                                          <option disable>--Choose one--</option>
                                          @foreach($products as $product)
                                          <option value="{{$product->id}}">{{$product->name}}</option>
                                          @endforeach
                                        </select>
                                    </td>
                                    <td style="width:220px;"><textarea class="form-control ivDescription" name="descriptions[]" style="height:39px;border:none;background:transparent"></textarea></td>
                                    <td style="width:50px!important"><input style="width:70px !important;border:none;background:transparent;" type="text" class="form-control ivQuantity" name="quantities[]" value="0"></td>


                                    <td style="width:50px!important";><input class="form-control ivUnit" name="units[]" style="width:60px !important;border:none;background:transparent"></td>

                                        <td style="width:50px!important"><input type="text" class="form-control ivPrice"  name="prices[]" style="width:70px !important;border:none;background:transparent;" value="0" ></td>
                                        <td style="width: 140px !important">
                                          <select class="form-control ivTax"  name="taxs[]"  style="width:140px !important">
                                            <option value="0" selected>No Tax</option>
                                            @foreach($taxs as $tax)
                                            <option value="{{$tax->percentage}}">{{$tax->tax}}</option>
                                            @endforeach
                                          </select>

                                        </td>
                                        <td  style="width:100px" class="ivAmmountBox"><input type="text" class="form-control ivAmmount" name="totals[]" style="width:100px;border:none;background:transparent" value="0.00" readonly></td>
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
                          <div class="row">
                            <div class="col-md-12 text-center" style="padding-bottom:20px;">
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
</div>
</div>
@endsection
@section('footer_scripts')
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
      $tr.find('.ivTax').val(0);
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
          url:'{{ url("quotations/getAjaxProduct") }}',
          data:{product_id: product_id},
          success: function (data) {
            $data = JSON.parse(data);
            $tr.find('.ivDescription').html($data.description);
            $tr.find('.ivPrice').val($data.price);
            $tr.find('.ivTax').val($data.tax);
            $tr.find('.ivUnit').val($data.unit);
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

    $form.on('change','.ivTax',function(){
      $tr = $(this).parents('tr');

      var price = parseInt($tr.find('.ivPrice').val());
      var qty = parseInt($tr.find('.ivQuantity').val());
      var tax = parseInt($tr.find('.ivTax').val());
      var totaltax =parseInt(price*qty*tax/100);
      $tr.find('.ivAmmount').val(price*qty + totaltax);
    });
  });
});
</script>
<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
@endsection
