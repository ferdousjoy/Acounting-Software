@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
 <article class="content">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <div class="card-body">
            <h5 class="title"> Custom  Fields <a
                        href=" settings/add_custom_field"
                        class="btn btn-primary btn-sm rounded">
                    Add new                </a>
            </h5>
 <div class="m-1"><div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" checked="" name="customCheck" id="customCheck">
                    <label class="custom-control-label" for="customCheck"> Enable  Custom  Fields</label>
                  </div>

              </div>
            <hr>
            <table id="catgtable" class="table table-striped table-bordered zero-configuration" cellspacing="0"
                   width="100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Module</th>
                    <th> Action</th>


                </tr>
                </thead>
                <tbody>
                                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Module</th>
                    <th> Action</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</article>
<script type="text/javascript">
    $(document).ready(function () {

        //datatables
        $('#catgtable').DataTable({responsive: true});

    });
   $("#customCheck").click(function (e) {

        var enable =0;
        var actionurl = baseurl + 'settings/allow_custom';
        if ($('#customCheck').is(":checked"))
{
   enable =1;
}
        $.ajax({
                    type: "POST",
                    url: actionurl,
                        data: {
                        'enable': enable,
                        'g_ea0d': '492717f74d74cf5437a35dd697ec35fc'
                    },
                    cache: false,
                    success: function(data){
                        return data;
                    }
                });
    });
</script>
<div id="delete_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Delete</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p class="text-bold-500 text-danger">Warning : It will delete the field and all data stored in this
                    field.</strong></p>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="object-id" value="">
                <input type="hidden" id="action-url" value="settings/delete_custom_field">
                <button type="button" data-dismiss="modal" class="btn btn-primary"
                        id="delete-confirm">Delete</button>
                <button type="button" data-dismiss="modal"
                        class="btn">Cancel</button>
            </div>
        </div>
    </div>
</div></div>
</div>
</div>
@endsection