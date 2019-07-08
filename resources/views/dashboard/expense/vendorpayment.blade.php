@extends('layouts.dashboard')
@section('title','Create Vendor Payment')
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
            <h4>Vendor Statement</h4>
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
        <form action="{{Route('add_vendorstatement_form')}}" method="post" id="product_action" class="form-horizontal">
            @csrf
            <div class="grid_3 grid_4">
                <h6 class="w-100 text-center">Add New Vendor Payment</h6>
                <hr>

                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 control-label"
                           for="sdate">Vendor Name</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control required" name="name" id="sdate"
                               data-toggle="datepicker" autocomplete="false">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label"
                           for="pay_cat">Account Head</label>

                    <div class="col-sm-6">
                        <select name="account_head" class="form-control">
                            <option value='0'>Mahfuzur Rahman</option>
                            <option value='1'>Mohammad Atik</option>                        </select>


                    </div>
                </div>


                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 control-label"
                           for="sdate">Particular</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control required" name="particular" id="sdate"
                               data-toggle="datepicker" autocomplete="false">
                    </div>
                </div>
               
                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 control-label"
                           for="edate">Payment Mode</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control required"
                                name="payment_mode"
                               data-toggle="datepicker" autocomplete="false">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 control-label"
                           for="edate">Amount</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control required"
                                name="amount"
                               data-toggle="datepicker" autocomplete="false">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 control-label"
                           for="edate">Cheque No</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control required"
                                name="cheque_no"
                               data-toggle="datepicker" autocomplete="false">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 control-label"
                           for="edate">Cheque Date</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control required"
                                name="cheque_date"
                               data-toggle="datepicker" autocomplete="false">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 control-label"
                           for="edate">Remarks</label>

                    <div class="col-sm-6">
                        <textarea class="form-control required"
                                name="remarks"
                               data-toggle="datepicker" autocomplete="false"></textarea>
                    </div>
                </div>


                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label"></label>

                    <div class="col-sm-6">
                         <input type="submit" class="btn btn-success margin-bottom"
                           value="Add" data-loading-text="Adding...">
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