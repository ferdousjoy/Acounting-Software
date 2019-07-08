@extends('layouts.dashboard')
@section('title','Create  Challan')
@section('content')
<!-- Horizontal navigation-->
@include('layouts.inc.success')

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row"></div>
    <div class="content-body">
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

                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="mb-3">Create Challan</h2>
                        </div>
                    </div>

                    <form id="invoiceForm" method="post" action="{{Route('challans.store')}}">
                    @csrf

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group row">
                            <div class="col-md-4"><label class="caption">Challan number</label></div>
                            <div class="col-md-8"><input type="text" name="challan_no" class="form-control" value="{{$challan_no+1}}"></div>
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group row">
                            <div class="col-md-4"><label class="caption">Customer</label></div>
                            <div class="col-md-8">
                              <select name="customer_id" class="selectpicker form-control" id="customer_id">
                                  <option>--Choose One--</option>
                                  @foreach($customers as $customer)
                                    <option value="{{$customer->id}}">{{$customer->customer}}</option>
                                  @endforeach
                              </select>
                            </div>
                          </div>
                        </div>



                      </div>
                      <hr>

                      <div class="row py-2">

                        <div class="col-sm-4">
                          <div class="form-group row">
                            <div class="col-md-4"><label class="caption">PO Number</label></div>
                            <div class="col-md-8"><select name="po_number" class="form-control" id="po_number"></select></div>
                          </div>
                        </div>


                        <div class="col-sm-4">
                          <div class="form-group row">
                            <div class="col-md-4"><label class="caption">Driver Name</label></div>
                            <div class="col-md-8"><input type="text" class="form-control" name="drivername"></div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group row">
                            <div class="col-md-4"><label class="caption">Driver Mobile</label></div>
                            <div class="col-md-8"><input type="text" class="form-control" name="drivermobile"></div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group row">
                            <div class="col-md-4"><label class="caption">Shipping Address</label></div>
                            <div class="col-md-8"><select name="shippingaddress" class="selectpicker form-control" id="ship"></select></div>
                          </div>
                        </div>


                        <div class="col-sm-4">
                          <div class="form-group row">
                            <div class="col-md-4"><label class="caption">Date</label></div>
                            <div class="col-md-8"><input type="date" class="form-control" name="date"></div>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group row">
                            <div class="col-md-4"><label class="caption">Track Number</label></div>
                            <div class="col-md-8"><input type="text" class="form-control" name="tracknumber"></div>
                          </div>
                        </div>

                      </div>

                      <div class="row">
                          <div class="col-md-12">
                            <style>
                              #invoiceTable input{border:0;background:transparent}
                              #invoiceTable textarea{height:40px;border:0;background:transparent}
                              .ivAmmountBox{position: relative;}
                              .delete {
                                  color: white;
                                  background-color: rgb(231, 76, 60);
                                  text-align: center;
                                  font-weight: 700;
                                  border-radius: 50%;
                                  width: 20px;
                                  height: 20px;
                                  cursor: pointer;
                                  border: 0;
                                  padding: 0;
                                  position: absolute;
                                  right: 36px;
                                  top: calc(50% - 10px);
                              }
                            </style>
                            <table id="invoiceTable" class="table table-striped table-bordered dataex-res-constructor">
                                <thead>
                                  <tr>
                                      <th>Product</th>
                                      <th>Description</th>
                                      <th>Quantity</th>
                                      <th>Price</th>
                                      <th>Transport</th>
                                      <th>Total Amount</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr style="display:none">
                                      <td style="width:150px">
                                        <input type="text" class="form-control ivProduct" name="product[]">
                                      </td>

                                      <td style="width:220px">
                                        <textarea class="form-control ivDescription" name="description[]"></textarea>
                                      </td>

                                      <td style="width:50px">
                                        <input type="text" class="form-control ivQuantity" name="quantity[]" value="0">
                                      </td>

                                      <td style="width:50px">
                                        <input type="text" class="form-control ivPrice" name="price[]" value="0">
                                      </td>

                                      <td style="width:50px">
                                        <input type="text" class="form-control ivTransport" name="transport[]" value="0">
                                      </td>

                                      <td class="text-center ivAmmountBox" style="width:80px">
                                        <input type="text" class="form-control total ivTotal" name="total[]" value="0">
                                        <button type="button" class="delete">×</button>
                                      </td>
                                  </tr>
                                </tbody>

                                <tfoot></tfoot>
                            </table>
                          </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12 text-center" style="padding-bottom:20px;">
                            <style>button.sub-btn{border-radious:30px;margin-botom:20px}</style>
                            <input id="formType" type="hidden" name="_type" value="Save">
                            <button type="button" value="SAVE" class="btn btn-primary sub-btn" data-loading-text="Creating...">Save</button>
                            <button type="button" value="SEND" class="btn btn-primary sub-btn" data-loading-text="Creating...">Send</button>
                            <button type="button" value="PRINT" class="btn btn-primary sub-btn" data-loading-text="Creating...">Print</button>
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

   	$('#customer_id').change(function() {
     	var customer_id = $(this).val();
     	$.ajax({
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
     		type:'POST',
     		url:{{ route('challans.poAndShiping') }},
     		data:{customer_id:customer_id},
     		success: function (data) {
       	     $( "#po_number" ).html(result[0]);
     		     $( "#ship" ).html(result[1]);
     		}
     	});
   	});



    $(function(){

      $form = $('#invoiceForm');
      $table = $form.find('#invoiceTable');
      $tbody = $table.find('tbody');


      $form.on('change','#po_number',function() {
        var po_no = $(this).val();
        $tr = $tbody.find('tr:first-child').clone(true);

        $.ajax({
            headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type:'POST',
            url:'/getcmrproducts',
            data:{po_no: po_no},
            success: function (data) {
              $data = JSON.parse(data);

              $newTr = '';
              $.each($data,function(idx,val){
                $tr.find('.ivProduct').attr('value',val.product);
                $tr.find('.ivDescription').html(val.description);
                $tr.find('.ivQuantity').attr('value',val.quantity);
                $tr.find('.ivPrice').attr('value',val.price);
                //$tr.find('.ivTransport').val(val.quantity);
                $tr.find('.ivTotal').attr('value',val.total);
                $newTr += '<tr>'+$tr.html()+'</tr>';
              });

              //$tr.appendTo( $tbody );
              $tbody.html($newTr);
            }
        });
      });


      $form.on('click','.delete',function(){
        $(this).parents('tr').remove();
      });



      $form.on('keyup','.ivQuantity,.ivPrice,.ivTransport',function(){
          $tr = $(this).parents('tr');
          var price = parseFloat($tr.find('.ivPrice').val());
          var qty = parseInt($tr.find('.ivQuantity').val());
          var transport = parseFloat($tr.find('.ivTransport').val());
          $tr.find('.ivTotal').val((price*qty) + transport);
      });

      $form.on('click','.sub-btn',function(){
        $('#formType').val($(this).val());
        $form.submit();
      });

      // $form.on('submit',function(e){
      //   e.preventDefault();
      //   $('#formType').val($(this).val());
      //
      // });

    });


 });

</script>
<script>
$(document).ready(function() {
    $('.single22').select2();
});
</script>
@endsection
