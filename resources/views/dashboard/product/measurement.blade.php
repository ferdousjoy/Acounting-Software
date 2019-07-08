@extends('layouts.dashboard')
@section('title','Variation')
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
        <div class="card-body">
            <h5 class="title"> Measurement Unit <a
                        href="https://pos.ultimatekode.com/units/create"
                        class="btn btn-primary btn-sm rounded">
                    Add new                </a>
            </h5>

            <hr>
            <table id="catgtable" class="table table-striped table-bordered zero-configuration" cellspacing="0"
                   width="100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th> Action</th>


                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Unit</td>
                    <td>Unit</td>
                 
                    <td><a href='https://pos.ultimatekode.com/units/edit?id=4' class='btn btn-warning btn-xs'><i class='icon-pencil'></i> Edit</a>&nbsp;<a href='#' data-object-id='4' class='btn btn-danger btn-xs delete-object' title='Delete'><i class='fa fa-trash'></i></a></td></tr><tr>
                    <td>2</td>
                    <td>Box</td>
                    <td>Box</td>
                 
                    <td><a href='https://pos.ultimatekode.com/units/edit?id=3' class='btn btn-warning btn-xs'><i class='icon-pencil'></i> Edit</a>&nbsp;<a href='#' data-object-id='3' class='btn btn-danger btn-xs delete-object' title='Delete'><i class='fa fa-trash'></i></a></td></tr><tr>
                    <td>3</td>
                    <td>Pc</td>
                    <td>Pc</td>
                 
                    <td><a href='https://pos.ultimatekode.com/units/edit?id=2' class='btn btn-warning btn-xs'><i class='icon-pencil'></i> Edit</a>&nbsp;<a href='#' data-object-id='2' class='btn btn-danger btn-xs delete-object' title='Delete'><i class='fa fa-trash'></i></a></td></tr><tr>
                    <td>4</td>
                    <td>Kg</td>
                    <td>Kg</td>
                 
                    <td><a href='https://pos.ultimatekode.com/units/edit?id=1' class='btn btn-warning btn-xs'><i class='icon-pencil'></i> Edit</a>&nbsp;<a href='#' data-object-id='1' class='btn btn-danger btn-xs delete-object' title='Delete'><i class='fa fa-trash'></i></a></td></tr>                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th> Action</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

<script type="text/javascript">
    $(document).ready(function () {

        //datatables
        $('#catgtable').DataTable({responsive: true});

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
                <p>Delete this location? It may break invoices in this location.</strong></p>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="object-id" value="">
                <input type="hidden" id="action-url" value="units/delete_i">
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