@extends('layouts.dashboard')
@section('title','Transaction')
@section('content')
@include('layouts.inc.success')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5>Transactions <a
                        href="{{Route('add_transaction')}}"
                        class="btn btn-primary btn-sm rounded">
                    Add new                </a></h5>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                <div class="message"></div>
            </div>


            <hr>
            <table id="trans_table" class="table table-striped table-bordered zero-configuration" cellspacing="0"
                   width="100%">
                <thead>
                <tr>

                    <th>S/L</th>
                    <th>Name</th>
                    <th>Account</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Method</th>
                    <th>Type</th>
                    <th>Category</th>
                    <th> Action</th>


                </tr>
                </thead>
                <tbody>
                @foreach($transactions as $transaction)

<tr>
    <td>{{$no++}}</td>
    <td>{{$transaction->name}}</td>
    <td>{{$transaction->account}}</td>
    <td>{{$transaction->amount}}</td>
    <td>{{$transaction->date}}</td>
    <td>{{$transaction->method}}</td>
    <td>{{$transaction->type}}</td>
    <td>{{$transaction->category}}</td>
    <td>
     <a class="btn btn-danger btn-sm delete-object" href="#" data-object-id="1"> <i class="fa fa-trash"></i> </a>
 <div id="delete_model" class="modal fade">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">

            <h4 class="modal-title">Delete Product</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            <p>Are you sure you want to delete this product?</p>
        </div>
        <div class="modal-footer">
            <form method="POST" action="{{Route('delete_transaction',$transaction->id)}}">
                @csrf
                @method('delete')
            <button type="submit"  class="btn btn-danger "><i class='fa fa-trash'></i>Delete</button>
            <button type="button" data-dismiss="modal" class="btn">Cancel</button>
            </form>
        </div>
    </div>
</div>
</div>
    </td>
</tr>
@endforeach
                </tbody>

                <tfoot>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#trans_table').DataTable({
            "processing": true,
            "serverSide": true,
            "stateSave": true,
            responsive: true,
            "ajax": {
                "url": " transactions/translist",
                "type": "POST",
                'data': {'g_ea0d': crsf_hash}
            },
            "columnDefs": [
                {
                    "targets": [0],
                    "orderable": true,
                },
            ],
            dom: 'Blfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        footer: true,
                        exportOptions: {
                            columns: [0,1,2, 3,4, 5]
                        }
                    }
                ],
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
                <p>Are you sure you want to delete this transaction? Account balance will be adjusted.</p>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="object-id" value="">
                <input type="hidden" id="action-url" value="transactions/delete_i">
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