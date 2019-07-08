@extends('layouts.dashboard')
@section('title','Product Page')
@section('content')
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
                            <div class="name">Product Name</div>
                            <div class="value"> {{$viewproducts->product_name}}</div>

                        </div>
                        <hr>
                    </div>
                    <div class="col-sm-6 stat-col">

                        <div class="stat">
                            <div class="name"> Category</div>
                            <div class="value"> {{$viewproducts->product_category}}</div>

                        </div>
                        <hr>
                    </div>

                    <div class="col-sm-6 stat-col">

                        <div class="stat">
                            <div class="name">Price</div>
                            <div class="value font-medium-2 font-weight-bold"> $ {{$viewproducts->product_purchase_price}}</div>

                        </div>
                        <hr>
                    </div>
                    <div class="col-sm-6 stat-col">

                        <div class="stat">
                            <div class="name"> Stock Quantity</div>
                            <div class="value"> {{$viewproducts->product_stock_units}}</div>

                        </div>
                        <hr>
                    </div>
                    <div class="col-sm-6 stat-col">

                        <div class="stat">
                            <div class="name"> Product Photo</div>
                            <div class="value">
                             
                                <img  src="{{asset('uploads/products')}}/{{$viewproducts->product_image}}" alt="not found" height="200">
                             
                             </div>

                        </div>
                        <hr>
                    </div>
                     <div class="col-sm-6 stat-col">

                        <div class="stat">
                            <div class="name"> Added Date</div>
                            <div class="value"> {{$viewproducts->created_at}}</div>

                        </div>
                        <hr>
                        <a href="{{Route('products')}}" class="btn btn-success">Back To Product Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>
</div>
</div>

@endsection