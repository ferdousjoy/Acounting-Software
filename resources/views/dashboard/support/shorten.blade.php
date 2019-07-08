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

                <h5>Bit.ly URL Shortener Service</h5>
                <hr>


                <p>Bit.ly URL Shortener is a free service from Bit.ly that convert long ulrs to short. It is very useful
                    when you want send invoice as SMS. Your customer will get a short URL in SMS. You can signup here
                    for key.<a href="https://bitly.com">https://bitly.com</a>
                </p>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="terms">API Key</label>

                    <div class="col-sm-8">
                        <input type="text"
                               class="form-control margin-bottom  required" name="key1"
                               value="yourkey">
                    </div>
                </div>


                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="terms">Enable</label>

                    <div class="col-sm-8">
                        <select name="enable" class="form-control">

                            <option value="0">--No--</option>                            <option value="1">Yes</option>
                            <option value="0">No</option>


                        </select>
                    </div>
                </div>


                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit" id="submit-data" class="btn btn-success margin-bottom"
                               value="Update" data-loading-text="Updating...">
                        <input type="hidden" value="plugins/shortner" id="action-url">
                    </div>
                </div>

            </div>
        </form>
        <br><br>
    </div></div>
</div>
</div>

@endsection