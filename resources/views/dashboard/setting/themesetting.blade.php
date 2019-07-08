@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><article class="">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <form method="post" id="product_action" class="form-horizontal">
            <div class="card-body">

                <h5>Theme</h5>
                <hr>


                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="product_name">Theme Direction</label>

                    <div class="col-sm-6"><select name="tdirection" class="form-control">

                            <option value="ltr">**Default  - Left to Right**</option>                            <option value="ltr">Default  - Left to Right</option>
                            <option value="rtl">Right To Left</option>


                        </select>

                    </div>
                </div>
                 <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="product_name">Menu Style</label>

                    <div class="col-sm-6"><select name="menu" class="form-control">

                            <option value="0">**Horizontal**</option>                            <option value="0">Horizontal</option>
                            <option value="1">Vertical</option>


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
    <div class="card card-block">

        <form method="post" id="product_action" class="form-horizontal">
            <div class="card-body">

                <h5>Theme Logo</h5>
                <hr>


                <div class="ibox-content no-padding border-left-right">
                    <img alt="image" id="dpic" class="col-4"
                         src=" userfiles/theme/logo-header.png?t=459">
                </div>

                <hr>
                <p><label for="fileupload">Change Theme Logo </label><input
                            id="fileupload" type="file"
                            name="files[]"></p>
                <code>Theme logo is different from company logo. Recommended Theme logo size is 80x80px. Only png
                    files allowed. Clear browser cache after uploading.</code>
            </div>
        </form>
    </div>
</article>
<script type="text/javascript">
    $("#billing_update").click(function (e) {
        e.preventDefault();
        var actionurl = baseurl + 'settings/theme';
        actionProduct(actionurl);
    });
</script>
<script src=" assets/myjs/jquery.ui.widget.js"></script>
<script src=" assets/myjs/jquery.fileupload.js"></script>
<script>
    $(function () {
        'use strict';
        var url = ' settings/themelogo';
        $('#fileupload').fileupload({
            url: url,
            dataType: 'json',
            formData: {'g_ea0d': crsf_hash},
            done: function (e, data) {


                $("#dpic").attr('src',  ' userfiles/theme/' + data.result + '?' + new Date().getTime());


            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .progress-bar').css(
                    'width',
                    progress + '%'
                );
            }
        }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
    });

</script>

</div>
</div>
</div>
@endsection