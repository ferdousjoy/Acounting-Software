@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <form method="post" id="product_action" class="card-body">
            <div class="card card-block">

                <h5>Print Invoice Style</h5>
                <hr>


                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="product_name">Print Invoice</label>

                    <div class="col-sm-6"><select name="pstyle" class="form-control">

                            <option value="1">** Standard Version **</option>                            <option value="1">Standard Version</option>
                            <option value="2">Compact Version</option>


                        </select>

                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"></label>

                        <div class="col-sm-4">
                            <input type="submit" id="billing_update" class="btn btn-success margin-bottom"
                                   value="Update" data-loading-text="Updating...">
                        </div>
                    </div>
                </div>


            </div>
            <div class="font-size-large">
                <div class="col-md-6"> 1. Standard Version <br><img alt="image" id="dpic"
                                                                    class="img-responsive img-md img-md"
                                                                    src="https://pos.ultimatekode.com/assets/images/v1.png">
                </div>
                <div class="col-md-6"> 2. Compact Version<br><img alt="image" id="dpic" class="img-md"
                                                                  src="https://pos.ultimatekode.com/assets/images/v2.png">
                </div>
            </div>
        </form>
    </div>


<script type="text/javascript">
    $("#billing_update").click(function (e) {
        e.preventDefault();
        var actionurl = baseurl + 'settings/print_invoice';
        actionProduct(actionurl);
    });
</script>
</div>
</div>
</div>

@endsection