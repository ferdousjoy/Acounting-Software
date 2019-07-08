@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><article class="content-body">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <form method="post" id="product_action" class="form-horizontal">
            <div class="card-body">

                <h5>Support Tickets</h5>
                <hr>


                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="product_name">Support Tickets Module </label>

                    <div class="col-sm-6"><select name="service" class="form-control">

                                                        <option value="0">Off</option>
                            <option value='1'>On</option>


                        </select>
                        <small>(In Customer Login)</small>

                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="taxstatus">Activity Email</label>

                    <div class="col-sm-6">
                        <select name="email" class="form-control">

                                                        <option value="0">Off</option>
                            <option value='1'>On</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="taxstatus"> Email</label>

                    <div class="col-sm-6">
                        <input type="email" name="support" class="form-control" value="support@gmail.com">


                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label">Support Signature</label>

                    <div class="col-sm-8">


                        <textarea name="signature" class="summernote"
                        >
Your footer

</textarea>
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
        var actionurl = baseurl + 'settings/tickets';
        actionProduct(actionurl);
    });
</script>
<script type="text/javascript">
    $(function () {
        $('.summernote').summernote({
            height: 250,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']]

            ]
        });
    });
</script>

</div>
</div>
</div>

@endsection