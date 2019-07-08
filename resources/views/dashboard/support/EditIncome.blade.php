@extends('layouts.dashboard')
@section('title','Create Income')
@section('content')
@include('layouts.inc.success')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><article class="content">
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-xs-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-block">
                        <div class="media">
                            <div class="media-body text-xs-left">
                                <h3 class="pink" id="dash_0"></h3>
                                <span>Waiting</span>
                            </div>
                            <div class="media-right media-middle">
                                <i class="fa fa-clock-o pink font-large-2 float-xs-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-xs-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-block">
                        <div class="media">
                            <div class="media-body text-xs-left">
                                <h3 class="blue" id="dash_1"></h3>
                                <span>Processing</span>
                            </div>
                            <div class="media-right media-middle">
                                <i class="fa fa-refresh blue font-large-2 float-xs-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-xs-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-block">
                        <div class="media">
                            <div class="media-body text-xs-left">
                                <h3 class="success" id="dash_2"></h3>
                                <span>Solved</span>
                            </div>
                            <div class="media-right media-middle">
                                <i class="fa fa-check-circle success font-large-2 float-xs-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-xs-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-block">
                        <div class="media">
                            <div class="media-body text-xs-left">
                                <h3 class="cyan">0</h3>
                                <span>Total</span>
                            </div>
                            <div class="media-right media-middle">
                                <i class="fa fa-pie-chart cyan font-large-2 float-xs-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <div class="card-body">
            <div class="header-block">
                <h3 class="title">
                    Cash Collection Form
                </h3>
            </div>


            <p>&nbsp;</p>
            <div class="card card-block">
              <form action="{{Route('UpdateIncome')}}" class="card-body"  method="post" accept-charset="utf-8">
                     @csrf
                  <div class="grid_3 grid_4">
                      <h6 class="w-100 text-center">Update Income</h6>
                      <hr>


                      <div class="form-group row">

                          <label class="col-sm-2 offset-sm-2 col-form-label"
                                 for="pay_cat">Account Head</label>

                          <div class="col-sm-6">
                            <input type="hidden" name="income_id" value="{{$cash->id}}">
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
                              <input type="text" class="form-control required" name="particular" id="date" value="{{ $cash->particular }}"
                                     data-toggle="datepicker" autocomplete="false">
                          </div>
                      </div>
                      <div class="form-group row">

                          <label class="col-sm-2 offset-sm-2 control-label"
                                 for="edate">Payment Mode</label>

                          <div class="col-sm-6">
                            <select name="paymentmode" class="form-control" id="payment_method">
                            <option> Select One</option>
                            <option value="Cash">Cash</option>
                            <option value="Cheque">Cheque</option>
                            <option selected value="PayOrder">Pay Order</option>
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
                    <div class="form-group row" id="cheque_amount">
                   </div>
                   <div class="form-group row">
                       <label class="col-sm-2 offset-sm-2 control-label"
                              for="sdate">Amount</label>
                       <div class="col-sm-6">
                           <input type="text" class="form-control required" name="amount" value="{{$cash->amount}}">
                       </div>
                   </div>

                      <div class="form-group row">

                          <label class="col-sm-2 offset-sm-2 col-form-label"></label>

                          <div class="col-sm-6">
                               <div class="col-sm-4">
                          <input type="submit" class="btn btn-success margin-bottom"
                                 value="Update Account" data-loading-text="Adding...">
                      </div>
                          </div>
                      </div>
                  </div>

              </form>


            </div>

        </div>
    </div>
    <input type="hidden" id="dashurl" value="tickets/ticket_stats">
</article>
<div id="delete_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Delete</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this ticket?</p>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="object-id" value="">
                <input type="hidden" id="action-url" value="tickets/delete_ticket">
                <button type="button" data-dismiss="modal" class="btn btn-primary"
                        id="delete-confirm">Delete</button>
                <button type="button" data-dismiss="modal"
                        class="btn">Cancel</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
