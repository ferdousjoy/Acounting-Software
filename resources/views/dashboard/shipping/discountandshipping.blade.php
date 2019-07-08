@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5> Discount &  Shipping</h5>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-content">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                <div class="message"></div>
            </div>
            <div class="card-body">
                <form method="post" id="product_action" class="form-horizontal">
                    <div class="card card-block">


                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="discstatus"> Discount</label>

                            <div class="col-sm-6">
                                <select name="discstatus" class="form-control">
                                    <option value="%">*% Discount After TAX*</option>
                                    <option value="%"> % Discount After TAX </option>
                                    <option value="flat">Flat Discount After TAX</option>
                                    <option value="b_p"> % Discount Before TAX</option>
                                    <option value="bflat">Flat Discount Before TAX</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="shiptax_type"> ShippingTax</label>

                            <div class="col-sm-6">
                                <select name="shiptax_type" class="form-control">
                                    <option value="incl">
                                        *Do not change*
                                    </option>
                                    <option value="incl">Inclusive</option>
                                    <option value="excl">Exclusive</option>

                                    <option value="off">Off</option>

                                </select>

                            </div>
                        </div>


                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="shiptax_rate"> Shipping Tax                                % Rate</label>

                            <div class="col-sm-6">
                                <input type="text" placeholder="Shipping Tax Rate"
                                       class="form-control margin-bottom" name="shiptax_rate"
                                       value="10.00">
                            </div>
                            <small>Tax Rate will overridden if you create a Tax Slab.</small>
                        </div>


                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"></label>

                            <div class="col-sm-4">
                                <input type="submit" id="billing_update" class="btn btn-success margin-bottom"
                                       value="Update"
                                       data-loading-text="Updating...">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#billing_update").click(function (e) {
        e.preventDefault();
        var actionurl = baseurl + 'settings/discship';
        actionProduct(actionurl);
    });
</script>

</div>
</div>
</div>
@endsection