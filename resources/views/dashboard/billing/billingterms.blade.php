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
            <h5 class="title"> Billing Terms <a
                        href=" settings/add_term"
                        class="btn btn-primary btn-sm rounded">
                    Add new                </a>
            </h5>

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


                <table id="tttable" class="table table-striped table-bordered zero-configuration" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>

                        <th>Type</th>

                        <th> Action</th>


                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td>1</td>
                    <td>Payment On Receipt</td>
                    <td>All</td>
                   
                    <td><a href=' settings/edit_term?id=1' class='btn btn-warning btn-xs'><i class='fa fa-pencil'></i> Edit</a>&nbsp;<a href='#' data-object-id='1' class='btn btn-danger btn-xs delete-object' title='Delete'><i class='fa fa-trash'></i></a></td></tr>                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>

                        <th> Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {

            //datatables
            $('#tttable').DataTable({responsive: true});

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
                    <p>Are you sure you want to delete this term?</p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="object-id" value="">
                    <input type="hidden" id="action-url" value="settings/delete_terms">
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