@extends('layouts.dashboard')
@section('title','PO List')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">PO List <a
                        href="{{route('pos.create')}}"
                        class="btn btn-primary btn-sm rounded">
                    Add new</a></h4>
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


                <table id="pos" class="table table-striped table-bordered zero-configuration" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th>Issue Date</th>
                        <th>PO NO</th>
                        <th>Customer</th>
                        <th>Shipping</th>
                        <th>Item</th>
                        <th>QTY</th>
                        <th>Balance</th>
                        <th class="no-sort">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pos as $po)
                            <tr>
                                <td>{{$po->po_date}}</td>
                                <td>{{$po->po_no}}</td>
                                <td>{{$po->customerInfo->name}}</td>

                                <td>{{$po->description}}</td>
                                <td>{{$po->product_id}}</td>

                                <td>{{$po->quantity}}</td>
                                <td>{{$po->total}}</td>
                                <td>
                                  <a href="{{route('pos.edit',$po->id)}}" class="btn btn-sm btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                                  <a href="{{route('pos.destroy',$po->id)}}" class="btn btn-danger btn-sm delete-object" data-object-id="1"> <i class="fa fa-trash"></i> </a>
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


    <div id="delete_model" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Delete Order</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this order?</p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="object-id" value="">
                    <input type="hidden" id="action-url" value="purchase/delete_i">
                    <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete-confirm">Delete
                    </button>
                    <button type="button" data-dismiss="modal" class="btn">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {

            var table = $('#pos').DataTable({
                "processing": true,
                "serverSide": true,
                responsive: true,
                "order": [],
                "ajax": {
                    "url": " purchase/ajax_list",
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
                            columns: [1,2, 3,4, 5]
                        }
                    }
                ],

            });

        });
    </script></div>
</div>
</div>
@endsection
