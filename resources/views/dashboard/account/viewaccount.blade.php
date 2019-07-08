@extends('layouts.dashboard')
@section('title','Add Account')
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
            <h3>Sales Account Details</h3>
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

                <div class="row">
                    <div class="col-sm-6">

                        <div class="stat">
                            <div class="name"> Account No</div>
                            <div class="value"> {{$viewaccount->account_no}}</div>

                        </div>
                        <hr>
                    </div>
                    <div class="col-sm-6 stat-col">

                        <div class="stat">
                            <div class="name"> Name</div>
                            <div class="value"> {{$viewaccount->name}}</div>

                        </div>
                        <hr>
                    </div>

                    <div class="col-sm-6 stat-col">

                        <div class="stat">
                            <div class="name">Balance</div>
                            <div class="value font-medium-2 font-weight-bold"> $ {{$viewaccount->initial_balance}}</div>

                        </div>
                        <hr>
                    </div>
                    <div class="col-sm-6 stat-col">

                        <div class="stat">
                            <div class="name"> Opening Date</div>
                            <div class="value"> {{$viewaccount->created_at}}</div>

                        </div>
                        <hr>
                    </div>
                    <div class="col-sm-6 stat-col">

                        <div class="stat">
                            <div class="name"> Note</div>
                            <div class="value"> {{$viewaccount->notes}}</div>

                        </div>
                        <hr>
                    </div>
                     <div class="col-sm-6 stat-col">

                        <div class="stat">
                            <div class="name"> Type</div>
                            <div class="value"> {{$viewaccount->account_type}}</div>

                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>
</div>
</div>

@endsection