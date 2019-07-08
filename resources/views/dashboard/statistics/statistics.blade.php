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
            <h4 class="card-title">Company Statistics <a class="btn btn-purple"
                                                                                            href=" reports/refresh_data"><i
                            class="fa fa-refresh"></i></a></h4>
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

                <!--/ stats -->
                <!--/ project charts -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header no-border">
                                <h6 class="card-title">Income, Expense & Sales in the last 12 months</h6>

                            </div>

                            <div class="card-body">


                                <div id="invoices-sales-chart"></div>

                            </div>

                        </div>
                    </div>

                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header no-border">
                                <h6 class="card-title">Invoices & Sold Products in last 12 months</h6>

                            </div>

                            <div class="card-body">


                                <div id="invoices-products-chart"></div>

                            </div>

                        </div>
                    </div>

                </div>
                <hr>
                <!--/ project charts -->
                <!-- Recent invoice with Statistics -->
                <div class="row match-height">

                    <div class="col-xl-12 col-lg-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All-Time Detailed Statistics</h4>
                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-hover mb-1">
                                        <thead>
                                        <tr>
                                            <th>Month</th>
                                            <th>Income</th>
                                            <th>Expenses</th>
                                            <th>Sales</th>
                                            <th>Invoices</th>
                                            <th>Sold Products</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                <td class="text-truncate">February, 2019</td>
                                <td class="text-truncate"> 138205.14</td>
                            
                                <td class="text-truncate">10250.00</td>
                                 <td class="text-truncate">180172.39</td>
                                  <td class="text-truncate">86</td>
                                   <td class="text-truncate">383.00</td>
                               
                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Recent invoice with Statistics -->


            </div>
        </div>
    </div>
</div>
<script type="text/javascript">


    $('#invoices-sales-chart').empty();

    Morris.Bar({
        element: 'invoices-sales-chart',
        data: [
            { x: '2019-02-28', y: 138205, z: 10250},
        ],
        xkey: 'x',
        ykeys: ['y', 'z'],
        labels: ['Income', 'expense'],
        hideHover: 'auto',
        resize: true,
        barColors: ['#34cea7', '#ff6e40'],
    });


    $('#invoices-products-chart').empty();

    Morris.Line({
        element: 'invoices-products-chart',
        data: [
            { x: '2019-02-28', y: 383, z: 86},
        ],
        xkey: 'x',
        ykeys: ['y', 'z'],
        labels: ['Products', 'Invoices'],
        hideHover: 'auto',
        resize: true,
        lineColors: ['#34cea7', '#ff6e40'],
    });


</script></div>
</div>
</div>
@endsection