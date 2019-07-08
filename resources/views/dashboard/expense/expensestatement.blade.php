@extends('layouts.dashboard')
@section('title','Expenses')
@section('content')
@include('layouts.inc.success')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h4>Expense Statement</h4>
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


        <div class="card-body">
            <div class="col-md-6">
                <div class="card ">

                    <p>This Month Expenses$ 10,750.00</p>
                    <p id="param1"></p>
                    <p id="param2"></p>


                </div>
            </div>

        </div>

    </div>

</div>
<div class="card card-block">
    <div class="card-body">
        <form action="{{Route('add_expense_form')}}" method="post" id="product_action" class="form-horizontal">
            @csrf
            <div class="grid_3 grid_4">
                <h6 class="w-100 text-center">Add New Expenses</h6>
                <hr>


                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label"
                           for="pay_cat">Account Head</label>

                    <div class="col-sm-6">
                        <select name="account_head" class="form-control">
                            <option> Select One</option>
                                @foreach($account as $key)
                        <option value="{{$key->account_name}}">{{$key->account_name}}</option>
                                @endforeach
                           </select>


                    </div>
                </div>


                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 control-label"
                           for="sdate">Particular</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control required" name="particular" id="date"
                               data-toggle="datepicker" autocomplete="false">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 control-label"
                           for="edate">Payment Mode</label>

                    <div class="col-sm-6">
                      <select name="paymentmode" class="form-control" id="payment_method">
                      <option selected> Select One</option>
                      <option value="Cash">Cash</option>
                      <option value="Cheque">Cheque</option>
                      <option value="PayOrder">Pay Order</option>
                      <option value="MFS">MFS</option>

                         </select>
                    </div>
                    <script>
                    $("#payment_method").change(function () {
                      var numInputs = $(this).val();

                      if(numInputs=="Cheque"){
                        $("#sohel").append('<label class="col-sm-2 offset-sm-2 control-label">Cheque Number</label><div class="col-sm-6"><input class="form-control required" name="cheque_number" /></div>');
                        $("#sohel2").append('<label class="col-sm-2 offset-sm-2 control-label">Bank Name</label><div class="col-sm-6"><input class="form-control required" name="bank_name" /></div>');
                        $("#cheque_date").append('<label class="col-sm-2 offset-sm-2 control-label">Date</label><div class="col-sm-6"><input type="date" class="form-control required" name="check_date" /></div>');

                      }
                      if(numInputs=="PayOrder"){
                        $("#sohel").append('<label class="col-sm-2 offset-sm-2 control-label">Account Name</label><div class="col-sm-6"><input class="form-control required" name="PayOrder_name" /></div>');
                        $("#sohel2").append('<label class="col-sm-2 offset-sm-2 control-label">Account Number</label><div class="col-sm-6"><input class="form-control required" name="PayOrder_account" /></div>');
                        $("#cheque_date").append('<label class="col-sm-2 offset-sm-2 control-label">Date</label><div class="col-sm-6"><input type="date" class="form-control required" name="PayOrder_date" /></div>');

                      }
                      if(numInputs=="MFS"){
                        $("#sohel").append('<label class="col-sm-2 offset-sm-2 control-label">Beneficiary Name</label><div class="col-sm-6"><input class="form-control required" name="MFS_name" /></div>');
                        $("#sohel2").append('<label class="col-sm-2 offset-sm-2 control-label">Mobile Number</label><div class="col-sm-6"><input class="form-control required" name="MFS_mobile" /></div>');
                        $("#cheque_date").append('<label class="col-sm-2 offset-sm-2 control-label">Transaction Id</label><div class="col-sm-6"><input class="form-control required"  name="MFS_id" /></div>');

                      }
                    });
                    </script>
                </div>
                <div class="form-group row" id="sohel">
                </div>
                <div class="form-group row" id="sohel2">
               </div>
               <div class="form-group row" id="cheque_date">
              </div>
              <div class="form-group row">
                  <label class="col-sm-2 offset-sm-2 control-label"
                         for="sdate">Amount</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control required" name="amount">
                  </div>
              </div>


                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label"></label>

                    <div class="col-sm-6">
                         <div class="col-sm-4">
                    <input type="submit" class="btn btn-success margin-bottom"
                           value="Add Account" data-loading-text="Adding...">
                </div>
                    </div>
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
