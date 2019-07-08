@extends('layouts.dashboard')
@section('title','Employee Add')
@section('content')
<!-- Horizontal navigation-->

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5>Employee Details</h5>
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
                    <div class="col-md-4 border-right">
                        <hr>

                        <h4><strong>BusinessOwner</strong></h4>
                        <p><i class="icon-map-marker"></i> Test City</p>

                        <div class="row m-t-lg">
                            <div class="col-md-12">
                                <strong> Name                                   : </strong> {{$employee->name}}                       </div>

                        </div>
                        <div class="row m-t-lg">
                            <div class="col-md-12">
                                <strong>email                                    : </strong> {{$employee->email}}                       </div>

                        </div>

                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                    <img alt="image" class="img-responsive col"
                             src="https://pos.ultimatekode.com/userfiles/employee/example.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


@endsection
