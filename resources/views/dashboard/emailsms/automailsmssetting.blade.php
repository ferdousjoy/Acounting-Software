@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <form method="post" id="product_action" class="form-horizontal">
            <div class="card-body">

                <h5>Auto Email SMS</h5>
                <p>Send automatic Email and SMS during invoice creation. Please do not enable this feature unnecessarily, it may slow the invoice creation process as the application will connect to email and SMS server.</p>
                <hr>


                <div class="form-group row">

                    <label class="col-sm-4 col-form-label"
                           for="tzone"> Email</label>

                    <div class="col-sm-4">
                        <select name="email" class="form-control">

                            <option value="email">*No</option><option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-4 col-form-label"
                           for="tzone">SMS</label>

                    <div class="col-sm-4">
                        <select name="sms" class="form-control">

                            <option value="sms">*No</option><option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>


                <div class="form-group row">

                    <label class="col-sm-4 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit" id="time_update" class="btn btn-success margin-bottom"
                               value="Update" data-loading-text="Updating...">
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $("#time_update").click(function (e) {
        e.preventDefault();
        var actionurl = baseurl + 'settings/automail';
        actionProduct(actionurl);
    });
</script>

</div>
</div>
</div>
@endsection