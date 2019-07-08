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

                <h5>DefaultWarehouse</h5>

                <hr>


                <div class="form-group row">

                    <label class="col-sm-4 col-form-label"
                           for="tzone">Warehouse</label>

                    <div class="col-sm-4">
                        <select name="wid" class="form-control">

                            <option value="0">*Do not change</option><option value="0">*All</option><option value="1">Main WareHouse</option><option value="2">France</option><option value="3">China</option><option value="4">Croatia</option><option value="5">Albania</option><option value="6">Bulgaria</option><option value="7">Japan</option><option value="8">Guatemala</option><option value="9">USA</option><option value="10">UK</option><option value="11">USA</option>
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
</article>
<script type="text/javascript">
    $("#time_update").click(function (e) {
        e.preventDefault();
        var actionurl = baseurl + 'settings/warehouse';
        actionProduct(actionurl);
    });
</script>

</div>
</div>
</div>
@endsection