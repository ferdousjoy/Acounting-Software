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
        <form method="post" id="product_action" class="card-body">
            <div class="card card-block">

                <h5>Edit Tax Details</h5>
                <hr>


                <input type="hidden" name="id" value="1">


                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="taxstatus">TAX Status</label>

                    <div class="col-sm-6">
                        <select name="taxstatus" class="form-control">

                            <option value="-1" data-tformat="yes" selected>&raquo;On</option><option value="-1" data-tformat="yes">On</option>
                                            <option value="-2"  data-tformat="incl">Inclusive</option>
                                            <option value="0" data-tformat="off">Off</option>
                                            <option value="-3" data-tformat="cgst">CGST + SGST</option>
                                            <option value="-4" data-tformat="igst">IGST</option> <option value="3" data-tformat="inclusive" data-trate="10">Custom 10% Inclusive</option> <option value="2" data-tformat="cgst" data-trate="12">CGST 6% + SGST 6% Exclusive</option> <option value="1" data-tformat="yes" data-trate="20">VAT 20% Exclusive</option> 
                        </select>
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="taxstatus">GST Type</label>

                    <div class="col-sm-6">
                        <select name="gst_type" class="form-control">

                            <option value="yes">*Exclusive*</option>                            <option value="inclusive">Inclusive</option>
                            <option value="yes">Exclusive</option>

                        </select>
                        <small>Applicable only if TAX Status is GST</small>
                    </div>
                </div>


                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="taxid">TAX ID</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="taxid"
                               class="form-control margin-bottom" name="taxid"
                               value="23442">
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
        var actionurl = baseurl + 'settings/tax';
        actionProduct(actionurl);
    });
</script>

</div>
</div>
</div>
@endsection