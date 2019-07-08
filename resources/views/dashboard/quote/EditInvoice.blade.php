@extends('layouts.dashboard')
@section('title','Create  Invoice')
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
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="customerpanel" class="inner-cmp-pnl">
                              <form id="invoicesForm" method="post" action="{{Route('quoteupdate')}}">
                                 @csrf
                                <div class="row form-group">
                                    <div class="frmSearch col-sm-12">
                                        <h2>Update Invoice</h2>
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="input-group" style="margin-left:20px">
                                      <label for="invovie_num"  class="caption" style="transform: translateX(-17px);">Invoice Number*</label>
<input type="hidden" name="quote_id" value="{{$quote->id}}">
                                      <textarea  id="invovie_num" class="form-control rounded" name="purchase_order" placeholder="Invoice Number"  style="max-width:200px;height:41px;border-radius:4px; resize:none;"> {{$quote->purchase_order}} </textarea>
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
                                                      <div class="col-md-4"><label for="invocieno" class="caption">Customer Name</label></div>
                                                      <div class="col-md-6">
                                                          <select name="cus_name" class="form-control" id="customer_id">
                                                              <option> --choose one-- </option>
                                                              @foreach($cus as $key)
                                                                <option value="{{$key->id}}"> {{$key->customer}}</option>
                                                              @endforeach
                                                           </select>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-sm-4">
                                                  <div class="row">
                                                      <div class="col-md-4"><label for="invocieno" class="caption">Date</label></div>
                                                      <div class="col-md-6"><input type="date" class="form-control"  name="purchase_date" data-toggle="datepicker" autocomplete="false"></div>
                                                  </div>
                                              </div>
                                              <div class="col-sm-4">
                                                  <div class="row">
                                                      <div class="col-md-4"><label for="invocieno" class="caption">PO No</label></div>
                                                      <div class="col-md-6"><select name="po_name" id="city2" class="form-control"></select></div>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <div class="col-sm-4">
                                                  <div class="row">
                                                      <div class="col-md-4"><label for="invocieno"  class="caption">Currency</label></div>
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
                                                      <div class="col-md-4"><label for="invocieno" class="caption">Expire Date</label></div>
                                                      <div class="col-md-6"><input type="date" class="form-control" name="exdate" data-toggle="datepicker" autocomplete="false"></div>
                                                    </div>
                                              </div>
                                              <div class="col-sm-4">
                                                  <div class="row">
                                                      <div class="col-md-4"><label for="invocieno" class="caption">Challan No</label></div>
                                                      <div class="col-md-6"><select name="chalan_no" id="challan10" class="selectpicker form-control"></select></div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <div class="col-sm-4"></div>
                                              <div class="col-sm-4">
                                                  <div class="row">
                                                      <div class="col-md-4"></div>
                                                      <div class="col-md-6"></div>
                                                  </div>
                                              </div>
                                              <div class="col-sm-4">
                                                  <div class="row">
                                                        <div class="col-md-4"></div>
                                                        <div class="col-md-6"></div>
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
                                            <td>
                                                <select name="product[]" class="form-control ivProduct" style="min-width:150px">
                                                  <option disable>--Choose one--</option>
                                                  @foreach($product as $key)
                                                  <option value="{{$key->name}}">{{$key->name}}</option>
                                                  @endforeach
                                                </select>
                                            </td>
                                            <td><textarea class="form-control ivDescription" name="description[]" style="resize:none;height:39px"></textarea></td>
                                            <td><input type="text" class="form-control ivQuantity" name="quantity[]" value="0"></td>
                                            <td><select class="form-control" name="unit[]" style="min-width:100px;">
                                             @foreach($unit as $key)
                                             <option value="{{$key->unit_name}}">{{$key->unit_name}}</option>
                                             @endforeach
                                            </select>   </td>
                                            <td>
                                              <input type="text" class="form-control ivPrice"  name="price[]" value="0">


                                            </td>
                                            <td>
                                  <select class="form-control ivTax"  name="tax[]" value="0">
                                  <option value="0"> No Tax</option>
                                  @foreach($tax as $key)
                                  <option value="{{$key->percentage}}">{{$key->tax}}</option>
                                  @endforeach
                                  </select>


                                            </td>
                                            <td class="ivAmmountBox"><input name="total[]" type="text" class="form-control ivAmmount" value="0.00" readonly></td>
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
                                    </div>
                                  </div>
                                  <div class="row">
                                  <div class="col-lg-2 ml-auto">
                                  <label for="" style="float:left;margin-right:15px;padding-top:8px;font-weight:bold">Grand Total</label>
                                  <input type="text" class="form-control  grand_total" value="" style="width:110px;">
                                  </div>
                                  </div>
                                  <div class="row">
                                  <div class="col-md-12 text-center" style="padding-bottom:20px;">

                                  <input style="border-radious:30px;margin-botom:20px;"  type="submit" class="btn btn-primary sub-btn" value="Save" data-loading-text="Creating...">
                                  <input style="border-radious:30px;margin-botom:20px;"  type="submit" class="btn btn-primary sub-btn" value="Send" data-loading-text="Creating...">
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

                                  <script>
                                  $(document).ready(function(){
                                  $('#customer_id').change(function() {
                                  var customer_id= $(this).val();

                                  $.ajax({
                                  headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                  type:'POST',
                                  url:'/getcitylist3',
                                  data:{customer_id: customer_id},
                                  success: function (data) {
                                  //console.log(data);
                                  $data = JSON.parse(data);
                                  $('#city2').html($data.pono);
                                  $('#challan10').html($data.chalan);
                                  }
                                  });
                                  });

                                  });
                                  </script>



                                  <script>
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
                                  $tr.find('.ivTax').val($data.tax);
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

                                  var sum = 0;
                                  $(".ivAmmount").each(function(){
                                  sum += +$(this).val();
                                  });
                                  $(".grand_total").val(sum);

                                  });
                                  });

                                  $(function(){
                                  $form.on('change','.ivTax',function(){
                                  $tr = $(this).parents('tr');
                                  var price = parseInt($tr.find('.ivPrice').val());
                                  var qty = parseInt($tr.find('.ivQuantity').val());
                                  var vat = parseInt($tr.find('.ivTax').val());
                                  var totalvat = parseInt(price*qty*vat/100);
                                  //var vat = parseInt($('#vat-0').val());
                                  $tr.find('.ivAmmount').val(price*qty+totalvat);

                                  });
                                  });
                                  });
                                  </script>
                                  @endsection
