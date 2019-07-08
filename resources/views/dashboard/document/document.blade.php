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
            <h3 class="title">
                Documents <a href=" tools/adddocument"
                                                                class="btn btn-primary btn-sm rounded">
                    Add new                </a>
            </h3>
            <hr>
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


                <table id="doctable" class="table table-striped table-bordered zero-configuration" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Added</th>
                        <th> Action</th>


                    </tr>
                    </thead>
                    <tbody>

                    </tbody>

                </table>

            </div>
        </div>
        <div id="delete_model" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title">Delete</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this document?</p>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="object-id" value="">
                        <input type="hidden" id="action-url" value="tools/delete_document">
                        <button type="button" data-dismiss="modal" class="btn btn-primary"
                                id="delete-confirm">Delete</button>
                        <button type="button" data-dismiss="modal"
                                class="btn">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {

                $('#doctable').DataTable({

                    "processing": true,
                    "serverSide": true,
                    responsive: true,
                    "ajax": {
                        "url": " tools/document_load_list",
                        "type": "POST",
                        'data': {'g_ea0d': crsf_hash}
                    },
                    "columnDefs": [
                        {
                            "targets": [0],
                            "orderable": false,
                        },
                    ],dom: 'Blfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        footer: true,
                        exportOptions: {
                            columns: [0,1,2]
                        }
                    }
                ],

                });

            });
        </script>
</div>
</div>
</div>
@endsection