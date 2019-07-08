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

                <h5>Currency Exchange</h5>
                <hr>

                <p>Application has integrated currencylayer.com API. It offers a real-time currency conversion for your
                    invoices. Accurate Exchange Rates for 168 World Currencies with data updates ranging from every 60
                    minutes down to stunning 60 seconds. Please visit <a href="https://currencylayer.com/">currencylayer.com</a>
                    to get API key.
                <p>
                <p> Please do not forget set the CRON job for automatic base rate updates in background.</p>
                <p> API Integration and Cron Job are optionals, you can manually set exchange rates here <a
                            href="https://pos.ultimatekode.com/paymentgateways/currencies">https://pos.ultimatekode.com/                        paymentgateways/currencies</a></p>


                <div class="form-group row">

                    <label class="col-sm-4 col-form-label"
                           for="currency">Base Currency Code                        <small>(i.e. USD,AUD)</small>
                    </label>

                    <div class="col-sm-8">
                        <input type="text"
                               class="form-control margin-bottom  required" name="currency"
                               value="USD" maxlength="3">
                    </div>
                </div>


                <div class="form-group row">

                    <label class="col-sm-4 col-form-label" for="key1">API Key</label>

                    <div class="col-sm-8">
                        <input type="text"
                               class="form-control margin-bottom  required" name="key1"
                               value="key1v">
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-4 col-form-label"
                           for="key2">API Endpoint</label>

                    <div class="col-sm-8">
                        <input type="text"
                               class="form-control margin-bottom  required" name="key2"
                               value="key2">
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-4 col-form-label"
                           for="enable">Enable Exchange</label>

                    <div class="col-sm-8">
                                                <select class="form-control" name="enable">
                            <option value="1">
                                --Yes--
                            </option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row"><label class="col-sm-4 col-form-label">Secondary Currency as
                        Currency </label>
                    <div class="col-sm-8">
                        <div class="">
                            <label class="display-inline-block custom-control custom-radio ml-1">
                                <input type="radio" name="reverse"
                                       value="1" >
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description ml-0">Yes</span>
                            </label>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="reverse"
                                       value="0" checked="">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description ml-0">No</span>
                            </label>
                        </div>
                        <small> Recommended : No | With this option input during bill creation will be considered as per
                            selected currency.
                        </small>
                    </div>

                </div>
                <div class="form-group row">

                    <label class="col-sm-4 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit" id="submit-data" class="btn btn-success margin-bottom"
                               value="Update" data-loading-text="Updating...">
                        <input type="hidden" value="paymentgateways/exchange" id="action-url">
                    </div>
                </div>

            </div>
        </form>

    </div></div>
</div>
</div>


@endsection