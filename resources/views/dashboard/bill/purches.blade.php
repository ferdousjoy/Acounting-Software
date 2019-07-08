@extends('layouts.dashboard')
@section('title','Bill List')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Bill List <a
                        href="{{Route('new_purches')}}"
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


                <table id="purchess" class="table table-striped table-bordered zero-configuration" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th>Bill No</th>
                        <th>PO No</th>
                        <th>Receive No</th>
                        <th>Vendor</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        <th class="no-sort">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($purchess as $purches)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$purches->billing_purches_no}}</td>
                                <td>{{$purches->billing_name}}</td>
                                <td>{{$purches->billing_date}}</td>
                                <td>{{$purches->product_price}}</td>
                                <td>{{$purches->payment_status}}</td>
                                <td>
                                    
                                <a href="{{Route('view_purches',$purches->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> </a>
                            <a href="{{Route('edit_purches',$purches->id)}}" class="btn btn-sm btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
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
                                        <form method="POST" action="{{Route('delete_purches',$purches->id)}}">
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

            var table = $('#purchess').DataTable({
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