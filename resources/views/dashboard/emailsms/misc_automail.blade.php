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

                <h5> Email Alert</h5>
                <p>Send automatic Email . Please do not enable this feature unnecessarily, it may slow the process as the application will connect to email server.</p>
                <hr>


                <div class="form-group row">

                    <label class="col-sm-4 col-form-label"
                           for="tzone">Transactions  Email</label>

                    <div class="col-sm-4">
                        <select name="email" class="form-control">

                            <option value="0">*No</option><option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                          <div class="form-group row">

                    <label class="col-sm-4 col-form-label"
                           for="tzone">Transactions Delete  Email</label>

                    <div class="col-sm-4">
                        <select name="td_email" class="form-control">

                            <option value="0">*No</option><option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-4 col-form-label"
                           for="tzone">Invoice Delete  Email</label>

                    <div class="col-sm-4">
                        <select name="id_email" class="form-control">

                            <option value="0">*No</option><option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                 <div class="form-group row">

                    <label class="col-sm-4 col-form-label"
                           for="product_cat_name"> Email</label>

                    <div class="col-sm-4">
                        <input type="email"
                               class="form-control margin-bottom  required" name="send" value="sample@email.com"
                        >
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
        var actionurl = baseurl + 'settings/misc_automail';
        actionProduct(actionurl);
    });
</script>

</div>
</div>
</div>
@endsection