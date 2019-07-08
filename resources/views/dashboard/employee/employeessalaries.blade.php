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
            <h5 class="title">
                Employee <a href=" employee/add"
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

                <table id="emptable" class="table table-striped table-bordered zero-configuration" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Salary</th>
                        <th>Role</th>
                        <th>Status</th>

                        <th>Actions</th>


                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td>1</td>
                    <td>BusinessOwner</td>
                         <td>$ 0.00</td>
                    <td>Business Owner</td>                 
                    <td>Active</td>
                 
                    <td><a href=' employee/history?id=9' class='btn btn-success btn-xs'><i class='fa fa-list-ul'></i> History</a></td></tr><tr>
                    <td>2</td>
                    <td>Oliver Mammatt</td>
                         <td>$ 0.00</td>
                    <td>Business Manager</td>                 
                    <td>Active</td>
                 
                    <td><a href=' employee/history?id=16' class='btn btn-success btn-xs'><i class='fa fa-list-ul'></i> History</a></td></tr><tr>
                    <td>3</td>
                    <td>Harry McGaughey</td>
                         <td>$ 0.00</td>
                    <td>Sales Manager</td>                 
                    <td>Active</td>
                 
                    <td><a href=' employee/history?id=17' class='btn btn-success btn-xs'><i class='fa fa-list-ul'></i> History</a></td></tr><tr>
                    <td>4</td>
                    <td>William Longlands</td>
                         <td>$ 0.00</td>
                    <td>Sales Person</td>                 
                    <td>Active</td>
                 
                    <td><a href=' employee/history?id=18' class='btn btn-success btn-xs'><i class='fa fa-list-ul'></i> History</a></td></tr><tr>
                    <td>5</td>
                    <td>Mark Wales</td>
                         <td>$ 0.00</td>
                    <td>Inventory Manager</td>                 
                    <td>Active</td>
                 
                    <td><a href=' employee/history?id=20' class='btn btn-success btn-xs'><i class='fa fa-list-ul'></i> History</a></td></tr><tr>
                    <td>6</td>
                    <td>Stephen L. Turner</td>
                         <td>$ 0.00</td>
                    <td>Project Manager</td>                 
                    <td>Active</td>
                 
                    <td><a href=' employee/history?id=19' class='btn btn-success btn-xs'><i class='fa fa-list-ul'></i> History</a></td></tr>                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Salary</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {

        //datatables
        $('#emptable').DataTable({responsive: true});


    });

    $('.delemp').click(function (e) {
        e.preventDefault();
        $('#empid').val($(this).attr('data-object-id'));

    });
</script></div>
</div>
</div>
@endsection