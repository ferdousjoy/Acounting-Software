@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><article class="content">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <div class="card-body">
            <h5 class="title">
                Transactions Categories <a
                        href=" transactions/createcat"
                        class="btn btn-primary btn-sm rounded">
                    Add new                </a>
            </h5>

            <p>&nbsp;</p>
            <table class="table display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th> Action</th>
                </tr>
                </thead>
                <tbody>
                <tr><td>Income</td><td><a href=' transactions/editcat?id=1' class='btn btn-warning btn-xs'><i class='icon-pencil'></i> Edit</a>&nbsp;<a href='#' data-object-id='1' class='btn btn-danger btn-xs delete-object' title='Delete'><i class='fa fa-trash'></i></a></td></tr><tr><td>Expenses</td><td><a href=' transactions/editcat?id=2' class='btn btn-warning btn-xs'><i class='icon-pencil'></i> Edit</a>&nbsp;<a href='#' data-object-id='2' class='btn btn-danger btn-xs delete-object' title='Delete'><i class='fa fa-trash'></i></a></td></tr><tr><td>Other</td><td><a href=' transactions/editcat?id=3' class='btn btn-warning btn-xs'><i class='icon-pencil'></i> Edit</a>&nbsp;<a href='#' data-object-id='3' class='btn btn-danger btn-xs delete-object' title='Delete'><i class='fa fa-trash'></i></a></td></tr>                </tbody>

            </table>
        </div>
    </div>
</article>

<div id="delete_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Delete</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this Transaction Category?</p>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="object-id" value="">
                <input type="hidden" id="action-url" value="transactions/delete_cat">
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