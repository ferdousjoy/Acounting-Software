@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-content">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                <div class="message"></div>
            </div>
            <div id="thermal_a" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                <div class="message"></div>
            </div>
            <div id="invoice-template" class="card-body">
                <div class="row">

                    <div class="">
                                                    <div class="title-action">



                            <a href="#" class="btn btn-warning mb-1"><i
                                        class="fa fa-pencil"></i> Edit Invoice</a>

                        
        

                            <div class="btn-group ">
                                <button type="button" class="btn btn-success mb-1 btn-min-width dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="fa fa-print"></i> Print                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item"
                                       href="#">Print</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item"
                                       href="#">Download</a>

                                </div>
                            </div>




                            </div>                    </div>
                </div>

                <!-- Invoice Company Details -->
                <div id="invoice-company-details" class="row mt-2">
                    <div class="col-md-6 col-sm-12 text-xs-center text-md-left"><p></p>
                        <img src="{{asset('uploads/company/default.jpg')}}"
                             class="img-responsive p-1 m-b-2" style="max-height: 120px;">
                    </div>
                    <div class="col-md-6 col-sm-12 text-xs-center text-md-right">
                        <h2>Invoice</h2>
                        <p class="pb-1"> SRN 1012</p>
                            <p class="pb-1">Reference: {{$invoice->billing__reference}}</p>                        <ul class="px-0 list-unstyled">
                            <li>Gross Amount</li>
                            <li class="lead text-bold-800">$ {{$invoice->product_price}}</li>
                        </ul>
                    </div>
                </div>
                <!--/ Invoice Company Details -->

                <!-- Invoice Customer Details -->
                <div id="invoice-customer-details" class="row pt-2">
                    <div class="col-sm-12 text-xs-center text-md-left">
                        <p class="text-muted"> Bill To</p>
                    </div>
                    <div class="col-md-6 col-sm-12 text-xs-center text-md-left">
                        <ul class="px-0 list-unstyled">


                            <li class="text-bold-800"><strong  class="invoice_a">{{$invoice->billing_name}}</strong></li>
                            <li></li>
                            <li>{{$invoice->billing_address}}s</li>
                            <li> Phone: {{$invoice->billing_phone}}</li>
                            <li> Email: {{$invoice->billing_email}}</li>

                        </ul>

                    </div>
                    <div class="offset-md-3 col-md-3 col-sm-12 text-xs-center text-md-left">
                        <p><span class="text-muted">Invoice Date  :</span> {{$invoice->billing_date}}</p> 
                      <p><span class="text-muted">Terms :</span> {{$invoice->payment_terms}}</p>                    </div>
                </div>
                <!--/ Invoice Customer Details -->

                <!-- Invoice Items Details -->
                <div id="invoice-items-details" class="pt-2">
                    <div class="row">
                        <div class="table-responsive col-sm-12">
                            <table class="table table-striped">
                                <thead>
                                                                    <tr>
                                        <th>#</th>
                                        <th>Description</th>
                                        <th class="text-xs-left">Rate</th>
                                        <th class="text-xs-left">Qty</th>
                                        <th class="text-xs-left">Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                            <th scope="row">1</th>
                            <td>{{$invoice->billing_description}} </td>                           
                            <td>$ {{$invoice->product_price}}</td>
                             <td>{{$invoice->product_quantity}}</td>
                            <td>$ {{$invoice->product_price}}</td>
                        </tr><tr><td colspan=5></td></tr>
                                    </tbody>
                                                            </table>
                        </div>
                    </div>
                    <p></p>
                    </div>
                </div>
                <!--/ Invoice Footer -->
                <hr>

                <br>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection