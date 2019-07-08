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
            <h4 class="card-title"><a
                        href=" customers"
                        class="mr-5">
                    Clients</a> <a
                        href="{{Route('create_client')}}"
                        class="btn btn-primary btn-sm rounded">
                    Add new</a> <a
                        href=" customers?due=true"
                        class="btn btn-danger btn-sm rounded">
                    Due Clients</a></h4>
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

                <table id="clientstable" class="table table-striped table-bordered zero-configuration" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th> Address</th>
                        <th> Email</th>
                        <th> Phone</th>
                        <th>Settings</th>
                    </tr>
                   
                    </thead>
                    <tbody>
                    @php $i=1; @endphp
                    @foreach($clients as $client)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$client->billing_name}}</td>
                        <td>{{$client->billing_address}}</td>
                        <td>{{$client->billing_email}}</td>
                        <td>{{$client->billing_phone}}</td>
                        <td><a href="{{Route('view_customer',$client->id)}}" class="btn btn-success btn-xs"><i class="fa fa-eye"></i>  View</a> <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit</a><a href="#" data-object-id="1" class="btn btn-danger btn-xs delete-object" title="Delete"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    @php $i++; @endphp
                    @endforeach
                    </tbody>

                    <tfoot>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#clientstable').DataTable({
            'processing': true,
            'serverSide': true,
            'stateSave': true,
            responsive: true,
            'order': [],
            'ajax': {
                'url': " customers/load_list",
                'type': 'POST',
                'data': {'g_ea0d': crsf_hash  }
            },
            'columnDefs': [
                {
                    'targets': [0],
                    'orderable': false,
                },
            ],dom: 'Blfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        footer: true,
                        exportOptions: {
                            columns: [0,1,2, 3,4]
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

                <h4 class="modal-title">Delete Customer</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this customer?</p>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="object-id" value="">
                <input type="hidden" id="action-url" value="customers/delete_i">
                <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete-confirm">Delete</button>
                <button type="button" data-dismiss="modal" class="btn">Cancel</button>
            </div>
        </div>
    </div>
</div></div>
</div>
</div>
@endsection