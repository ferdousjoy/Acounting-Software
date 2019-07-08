@extends('layouts.dashboard')
@section('title','Account')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="row">
        <div class="col-xl-6 col-md-12">
            <div class="card overflow-hidden">
                <div class="card-content">
                    <div class="media align-items-stretch">
                        <div class="bg-primary p-2 media-middle">
                            <i class="fa fa-briefcase font-large-2 white"></i>
                        </div>
                        <div class="media-body p-2">
                            <h4>Balance</h4>
                            <span>Total</span>
                        </div>
                        <div class="media-right p-2 media-middle">
                            <h1 class="success"><span id="dash_0">{{$accounts->sum('initial_balance')}} $</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-12">
            <div class="card">
                <div class="card-content">
                    <div class="media align-items-stretch">
                        <div class="bg-warning p-2 media-middle">
                            <i class="fa fa-list-alt font-large-2  white"></i>
                        </div>
                        <div class="media-body p-2">
                            <h4>Accounts</h4>
                            <span>Total</span>
                        </div>
                        <div class="media-right p-2 media-middle">
                            <h1 class="cyan" id="dash_1">{{$accounts->count('id')}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5>Accounts <a  href="{{Route('add_account')}}"   class="btn btn-primary btn-sm rounded"> Add new</a></h5>
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


                <div class="table-responsive">
                    <table id="acctable" class="table table-hover mb-1" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Account No</th>
                            <th>Name</th>
                            <th>Balance</th>
                            <th>Type</th>
                            <th>Actions</th>


                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                                @foreach($accounts as $account)
                            <tr>
                              
                                    <td>{{$i}}</td>
                                    <td>{{$account->account_no}}</td>
                                    <td>{{$account->name}}</td>
                                    <td>{{$account->initial_balance}}</td>
                                    <td>{{$account->account_type}}</td>
                                    <td><a href="{{Route('view_account',$account->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> </a>
                         <a href="{{Route('edit_account',$account->id)}}" class="btn btn-sm btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                         <a class="btn btn-danger btn-sm delete-object" href="#" data-object-id="1"> <i class="fa fa-trash"></i> </a>
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
                                    <form method="POST" action="{{Route('delete_account',$account->id)}}">
                                        @csrf
                                        @method('delete')
                                    <button type="submit"  class="btn btn-danger "><i class='fa fa-trash'></i> Delete </button>
                                    <button type="button" data-dismiss="modal" class="btn">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                         </td>
                                
                            </tr>
                            @php $i++ @endphp
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
