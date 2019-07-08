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

                <h5>Currency Format</h5>
                <hr>


                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="invoiceprefix">Currency</label>

                    <div class="col-sm-6">
                        <input type="text"
                               class="form-control margin-bottom" name="currency"
                               value="$">
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="currency">Decimal Separator</label>

                    <div class="col-sm-6">
                        <select name="deci_sep" class="form-control">
                            <option value=".">.</option>                            <option value=",">, (Comma)</option>
                            <option value=".">. (Dot)</option>
                            <option value="">None</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="thous_sep">Thousand Separator</label>

                    <div class="col-sm-6">
                        <select name="thous_sep" class="form-control">
                            <option value=",">,</option>                            <option value=",">, (Comma)</option>
                            <option value=".">. (Dot)</option>
                            <option value="">None</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="currency">Decimal Place</label>

                    <div class="col-sm-6">
                        <select name="decimal" class="form-control">
                            <option value="2">2</option>                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="spost">Symbol Position</label>

                    <div class="col-sm-6">
                        <select name="spos" class="form-control">
                            <option value="l">**Left**</option>                            <option value="l">Left</option>
                            <option value="r">Right</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"
                           for="spost">InvoiceRound Off</label>
                    <div class="col-sm-6">
                        <select name="roundoff" class="form-control">
                            <option value="">**Off**</option>                            <option value="">Off</option>
                            <option value="PHP_ROUND_HALF_UP">ROUND_HALF_UP</option>
                            <option value="PHP_ROUND_HALF_DOWN">ROUND_HALF_DOWN</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"
                           for="spost">Round Off Precision</label>

                    <div class="col-sm-6">
                        <select name="r_precision" class="form-control">
                            <option value=""></option>                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
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
        var actionurl = baseurl + 'settings/currency';
        actionProduct(actionurl);
    });
</script>

</div>
</div>
</div>
@endsection