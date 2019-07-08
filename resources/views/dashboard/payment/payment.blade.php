@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <form method="post" id="data_form" class="form-horizontal">
            <div class="card-body">

                <h5>Online Payment Settings</h5>
                <hr>


                <div class="form-group row">

                    <label class="col-sm-5 col-form-label"
                           for="enable">Enable Online Payment for Invoices</label>

                    <div class="col-sm-5">
                        <select class="form-control" name="enable">
                            <option value="1">
                                --Yes--
                            </option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-5 col-form-label"
                           for="enable">Enable Bank Payment Button</label>

                    <div class="col-sm-5">
                        <select class="form-control" name="bank">
                            <option value="1">
                                --Yes--
                            </option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-5 col-form-label"
                           for="account">Default Account to credit POS/online payment</label>

                    <div class="col-sm-5">
                        <select name="account" class="form-control">

                            <option value="1">--Sales Account / 123456--</option><option value="1">Sales Account / 123456</option><option value="2">Hall Fees / #12345</option><option value="3">gold caterers / 00001</option><option value="4">hussain / 8789</option><option value="5">food for ramadan / 2301</option><option value="6">Andi / 11111</option>                        </select>
                    </div>
                </div>


                <div class="form-group row">

                    <label class="col-sm-5 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit" id="submit-data" class="btn btn-success margin-bottom"
                               value="Update" data-loading-text="Updating...">
                        <input type="hidden" value="paymentgateways/settings" id="action-url">
                    </div>
                </div>

            </div>
        </form>

    </div></div>
</div>
</div>

@endsection