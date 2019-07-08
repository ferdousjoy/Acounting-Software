@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><article class="content">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <form method="post" id="product_action" class="form-horizontal">
            <div class="card-body">

                <h5>Zero Stock Billing / Product
                    As A Service</h5>
                <hr>
                <p>Allow Sales Person to bill with 0 stock, helpful to use products as a service.</p>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="product_name">Zero StockBilling</label>

                    <div class="col-sm-6"><select name="stock" class="form-control">

                            <option value="1">**No**</option>                            <option value="0">Yes</option>
                            <option value="1">No</option>


                        </select>

                    </div>
                </div>


                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit" id="billing_update" class="btn btn-success margin-bottom"
                               value="Update" data-loading-text="Updating...">
                    </div>
                </div>

            </div>
        </form>
    </div>

</article>
<script type="text/javascript">
    $("#billing_update").click(function (e) {
        e.preventDefault();
        var actionurl = baseurl + 'settings/zero_stock';
        actionProduct(actionurl);
    });
</script>
</div>
</div>
</div>
@endsection