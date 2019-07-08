@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <div class="card-body">
            <h5 class="title">Bank Accounts <a
                        href="https://pos.ultimatekode.com/paymentgateways/add_bank_ac"
                        class="btn btn-primary btn-sm rounded">
                    Add new                </a>
            </h5>
            <hr>
            <p>Enabled bank accounts will display publicly when customers click on pay with bank/cash.</p>
            <hr>

            <table id="catgtable" class="table table-striped table-bordered zero-configuration" cellspacing="0"
                   width="100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Account No</th>
                    <th>Enable</th>
                    <th> Action</th>


                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Sample Bank Limited</td>
                    <td>0987654321</td>
                    <td>Yes</td>
                  
                    <td><a href='https://pos.ultimatekode.com/paymentgateways/edit_bank_ac?id=1' class='btn btn-cyan btn-xs'><i class='fa fa-pencil'></i> Edit</a> <a href='#' data-object-id='1' class='btn btn-danger btn-xs delete-object' title='Delete'><i class='fa fa-trash'></i></a></td></tr>                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Account No</th>
                    <th>Enable</th>
                    <th> Action</th>
                </tr>
                </tfoot>
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
                <p>Are you sure you want to delete this account?</p>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="object-id" value="">
                <input type="hidden" id="action-url" value="paymentgateways/delete_bank_ac">
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

        //datatables
        $('#catgtable').DataTable({responsive: true});

    });
</script>
</div>
</div>
</div>


@endsection