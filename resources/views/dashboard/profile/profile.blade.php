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
            <h5>BusinessOwner</h5>
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


                        <div class="">
                            <img alt="image" class="card-img-top img-fluid"
                                 src=" userfiles/employee/example.png">
                        </div>
                        <hr>
                        <div class="">
                            <h4><strong>BusinessOwner</strong></h4>
                            <p><i class="icon-map-marker"></i> Test City</p>

                            <div class="row m-t-lg">
                                <div class="col-md-12">
                                    <strong> Address                                        : </strong>BusinessOwner                                </div>

                            </div>
                            <div class="row m-t-lg">
                                <div class="col-md-12">
                                    <strong>City                                        : </strong>Test City                                </div>

                            </div>
                            <div class="row m-t-lg">
                                <div class="col-md-12">
                                    <strong>Region                                        : </strong>Test Region                                </div>

                            </div>
                            <div class="row m-t-lg">
                                <div class="col-md-12">
                                    <strong>Country                                        : </strong>Test Country                                </div>

                            </div>
                            <div class="row m-t-lg">
                                <div class="col-md-12">
                                    <strong>PostBox                                        : </strong>123456                                </div>

                            </div>
                            <hr>
                            <div class="row m-t-lg">
                                <div class="col-md-12">
                                    <strong> Phone</strong> 12345678                                </div>

                            </div>
                            <div class="row m-t-lg">
                                <div class="col-md-12">
                                    <strong>EMail</strong> superadmin@example.com                                </div>

                            </div>
                            <div class="row m-t-lg">
                                <div class="col-md-12">
                                    <strong>Salary</strong> $                                 </div>

                            </div>


                        </div>


                    </div>
                    <div class="col-md-8">
                        <div class="card card-block">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <div class="hero-widget well well-sm">
                                            <div class="icon">
                                                <i class="icon-file-text-o"></i>
                                            </div>
                                            <div class="text">


                                            </div>
                                            <div class="options">
                                                <a href=" employee/invoices?id=9"
                                                   class="btn btn-primary btn-block"><i
                                                            class="icon-eye"></i> Invoices View                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="hero-widget well well-sm">
                                            <div class="icon">
                                                <i class="icon-book"></i>
                                            </div>
                                            <div class="text">


                                            </div>
                                            <div class="options">
                                                <a href=" employee/transactions?id=9"
                                                   class="btn btn-purple btn-block"><i
                                                            class="icon-eye"></i> Transactions View                                                </a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="row mb-2">

                                    <div class="col-sm-6">
                                        <div class="hero-widget well well-sm">


                                            <div class="options">
                                                <a href=" user/update?id=9"
                                                   class="btn btn-info btn-block"><i
                                                            class="fa fa-user"></i> Edit Account                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="hero-widget well well-sm">


                                            <div class="options">
                                                <a href=" user/updatepassword?id=9"
                                                   class="btn btn-primary btn-block"><i
                                                            class="fa fa-key"></i> Change Password                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="hero-widget well well-sm">


                                            <div class="options">
                                                <a href=" user/salary?id=9"
                                                   class="btn btn-pink btn-block"><i
                                                            class="fa fa-money"></i> Salary                                                </a>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="hero-widget well well-sm">


                                            <p class="text-muted">Your Signature</p>

                                            <img alt="image" class="card-img-top img-fluid"
                                                 src=" userfiles/employee_sign/sign.png">
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div></div>
</div>
</div>
@endsection