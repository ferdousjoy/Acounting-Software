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
            <h5>Holidays <a href=" employee/addhday"
                                                               class="btn btn-primary btn-sm rounded">
                    Add new</a></h5>
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


                <div class="table-responsive">
                    <table id="htable" class="table table-striped table-bordered zero-configuration" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Days</th>
                            <th>Note</th>
                            <th> Action</th>


                        </tr>
                        </thead>
                        <tbody>
                        </tbody>

                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Days</th>
                            <th>Note</th>
                            <th> Action</th>

                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#htable').DataTable({
            'processing': true,
            'serverSide': true,
            'stateSave': true,
            responsive: true,
            'order': [],
            'ajax': {
                'url': " employee/hday_list",
                'type': 'POST',
                'data': {'cid': 7, 'g_ea0d': crsf_hash}
            },
            'columnDefs': [
                {
                    'targets': [0],
                    'orderable': false,
                },
            ],
        });
    });
</script>
<div id="delete_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete</h4>
            </div>
            <div class="modal-body">
                Delete Holiday            </div>
            <div class="modal-footer">
                <input type="hidden" id="object-id" value="">
                <input type="hidden" id="action-url" value="employee/delete_hday">
                <button type="button" data-dismiss="modal" class="btn btn-primary"
                        id="delete-confirm">Yes</button>
                <button type="button" data-dismiss="modal" class="btn">No</button>
            </div>
        </div>
    </div>
</div></div>
</div>
</div>
@endsection