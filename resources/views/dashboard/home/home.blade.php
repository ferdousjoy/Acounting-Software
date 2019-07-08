@extends('layouts.dashboard')
@section('content')
    <!-- Horizontal navigation-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
<div class="content-body">
                <script type="text/javascript">
                    var dataVisits = [
                        { x: '2019-02-16', y: 166292 }, { x: '2019-02-15', y: 6639 }, { x: '2019-02-14', y: 466 }, { x: '2019-02-13', y: 933 }, { x: '2019-02-12', y: 1399 }, { x: '2019-02-11', y: 466 }, { x: '2019-02-10', y: 466 }, { x: '2019-02-09', y: 466 }, { x: '2019-02-08', y: 2211 }, { x: '2019-02-06', y: 3515 }, { x: '2019-02-05', y: 1123 }, { x: '2019-02-03', y: 1265 },];
                    var dataVisits2 = [
                        { x: '2019-02-16', y: 10750 },];

                </script>

                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="media align-items-stretch">
                                    <div class="p-2 text-center bg-primary bg-darken-2">
                                        <i class="fa fa-file-text-o text-bold-200  font-large-2 white"></i>
                                    </div>
                                    <div class="p-1 bg-gradient-x-primary white media-body">
                                        <h5>Today Invoices</h5>
                                        <h5 class="text-bold-400 mb-0"><i class="ft-plus"></i> 87</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="media align-items-stretch">
                                    <div class="p-2 text-center bg-danger bg-darken-2">
                                        <i class="icon-notebook font-large-2 white"></i>
                                    </div>
                                    <div class="p-1 bg-gradient-x-danger white media-body">
                                        <h5>This Month Invoices</h5>
                                        <h5 class="text-bold-400 mb-0"><i class="ft-arrow-up"></i>111</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="media align-items-stretch">
                                    <div class="p-2 text-center bg-warning bg-darken-2">
                                        <i class="icon-basket-loaded font-large-2 white"></i>
                                    </div>
                                    <div class="p-1 bg-gradient-x-warning white media-body">
                                        <h5>Today Sales</h5>
                                        <h5 class="text-bold-400 mb-0"><i class="ft-arrow-up"></i>$ 236,398.20 </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="media align-items-stretch">
                                    <div class="p-2 text-center bg-success bg-darken-2">
                                        <i class="icon-wallet font-large-2 white"></i>
                                    </div>
                                    <div class="p-1 bg-gradient-x-success white media-body">
                                        <h5>This Month Sales</h5>
                                        <h5 class="text-bold-400 mb-0"><i class="ft-arrow-up"></i> $ 263,596.42 </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row match-height">
                    <div class="col-xl-8 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Graphical Presentation of invoices and sales done in last 30
                                    days.</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div id="products-sales" class="height-300"></div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6 col-12">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-left w-100">
                                                            <h3 class="primary">$ 166,292.32</h3>
                                                            <span>Today Income</span>
                                                        </div>

                                                    </div>
                                                    <div class="progress progress-sm mt-1 mb-0">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 100%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-left w-100">
                                                            <h3 class="danger">$ 10,750.00</h3>
                                                            <span>Today Expenses</span>
                                                        </div>

                                                    </div>
                                                    <div class="progress progress-sm mt-1 mb-0">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 40%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-left w-100">
                                                            <h3 class="success">$ 133,018.00</h3>
                                                            <span>Today Profit</span>
                                                        </div>

                                                    </div>
                                                    <div class="progress progress-sm mt-1 mb-0">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 60%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-left w-100">
                                                            <h3 class="warning">$ 174,497.84</h3>
                                                            <span>Total Revenue</span>
                                                        </div>

                                                    </div>
                                                    <div class="progress progress-sm mt-1 mb-0">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 35%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Buyers</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content px-1">
                                <div id="recent-buyers" class="media-list height-450  mt-1 position-relative">
                                    <a href=" customers/view?id=1" class="media border-0">
                                        <div class="media-left pr-1">
                                            <span class="avatar avatar-md avatar-online"><img
                                                    class="media-object rounded-circle"
                                                    src="{{asset('dashjscss')}}/userfiles/customers/thumbnail/default.png">
                                                <i></i>
                                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Walk-in Client <span
                                                    class="font-medium-4 float-right pt-1">$ 227,084.95</span></h6>
                                            <p class="list-group-item-text mb-0"><span
                                                    class="badge  st-paid">Paid</span></p>
                                        </div>
                                    </a> <a href=" customers/view?id=12" class="media border-0">
                                        <div class="media-left pr-1">
                                            <span class="avatar avatar-md avatar-online"><img
                                                    class="media-object rounded-circle"
                                                    src="{{asset('dashjscss')}}/userfiles/customers/thumbnail/default.png">
                                                <i></i>
                                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Wilbur Brumen <span
                                                    class="font-medium-4 float-right pt-1">$ 1,130.27</span></h6>
                                            <p class="list-group-item-text mb-0"><span
                                                    class="badge  st-paid">Paid</span></p>
                                        </div>
                                    </a> <a href=" customers/view?id=5" class="media border-0">
                                        <div class="media-left pr-1">
                                            <span class="avatar avatar-md avatar-online"><img
                                                    class="media-object rounded-circle"
                                                    src="{{asset('dashjscss')}}/userfiles/customers/thumbnail/default.png">
                                                <i></i>
                                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Stefan Harvie <span
                                                    class="font-medium-4 float-right pt-1">$ 2,688.25</span></h6>
                                            <p class="list-group-item-text mb-0"><span
                                                    class="badge  st-partial">Partial</span></p>
                                        </div>
                                    </a> <a href=" customers/view?id=2" class="media border-0">
                                        <div class="media-left pr-1">
                                            <span class="avatar avatar-md avatar-online"><img
                                                    class="media-object rounded-circle"
                                                    src="{{asset('dashjscss')}}/userfiles/customers/thumbnail/default.png">
                                                <i></i>
                                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Wyatan Spilsted <span
                                                    class="font-medium-4 float-right pt-1">$ 5,688.16</span></h6>
                                            <p class="list-group-item-text mb-0"><span class="badge  st-due">Due</span>
                                            </p>
                                        </div>
                                    </a> <a href=" customers/view?id=3" class="media border-0">
                                        <div class="media-left pr-1">
                                            <span class="avatar avatar-md avatar-online"><img
                                                    class="media-object rounded-circle"
                                                    src="{{asset('dashjscss')}}/userfiles/customers/thumbnail/default.png">
                                                <i></i>
                                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Morganne Rignoldes <span
                                                    class="font-medium-4 float-right pt-1">$ 1,265.29</span></h6>
                                            <p class="list-group-item-text mb-0"><span
                                                    class="badge  st-paid">Paid</span></p>
                                        </div>
                                    </a> <a href=" customers/view?id=37" class="media border-0">
                                        <div class="media-left pr-1">
                                            <span class="avatar avatar-md avatar-online"><img
                                                    class="media-object rounded-circle"
                                                    src="{{asset('dashjscss')}}/userfiles/customers/thumbnail/default.png">
                                                <i></i>
                                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Aeriell Blaxill <span
                                                    class="font-medium-4 float-right pt-1">$ 1,278.86</span></h6>
                                            <p class="list-group-item-text mb-0"><span
                                                    class="badge  st-paid">Paid</span></p>
                                        </div>
                                    </a> <a href=" customers/view?id=17" class="media border-0">
                                        <div class="media-left pr-1">
                                            <span class="avatar avatar-md avatar-online"><img
                                                    class="media-object rounded-circle"
                                                    src="{{asset('dashjscss')}}/userfiles/customers/thumbnail/default.png">
                                                <i></i>
                                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Alanna Buglass <span
                                                    class="font-medium-4 float-right pt-1">$ 3,290.00</span></h6>
                                            <p class="list-group-item-text mb-0"><span class="badge  st-due">Due</span>
                                            </p>
                                        </div>
                                    </a> <a href=" customers/view?id=51" class="media border-0">
                                        <div class="media-left pr-1">
                                            <span class="avatar avatar-md avatar-online"><img
                                                    class="media-object rounded-circle"
                                                    src="{{asset('dashjscss')}}/userfiles/customers/thumbnail/example.png">
                                                <i></i>
                                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">BONNIE <span
                                                    class="font-medium-4 float-right pt-1">$ 1,820.57</span></h6>
                                            <p class="list-group-item-text mb-0"><span
                                                    class="badge  st-partial">Partial</span></p>
                                        </div>
                                    </a> <a href=" customers/view?id=10" class="media border-0">
                                        <div class="media-left pr-1">
                                            <span class="avatar avatar-md avatar-online"><img
                                                    class="media-object rounded-circle"
                                                    src="{{asset('dashjscss')}}/userfiles/customers/thumbnail/default.png">
                                                <i></i>
                                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Latia Sotheron <span
                                                    class="font-medium-4 float-right pt-1">$ 10,264.67</span></h6>
                                            <p class="list-group-item-text mb-0"><span
                                                    class="badge  st-paid">Paid</span></p>
                                        </div>
                                    </a> <a href=" customers/view?id=4" class="media border-0">
                                        <div class="media-left pr-1">
                                            <span class="avatar avatar-md avatar-online"><img
                                                    class="media-object rounded-circle"
                                                    src="{{asset('dashjscss')}}/userfiles/customers/thumbnail/default.png">
                                                <i></i>
                                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Koralle Romney <span
                                                    class="font-medium-4 float-right pt-1">$ 8,702.40</span></h6>
                                            <p class="list-group-item-text mb-0"><span class="badge  st-due">Due</span>
                                            </p>
                                        </div>
                                    </a>

                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row match-height">
                    <div class="col-xl-8 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Invoices</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <p><span class="float-right"> <a href=" invoices/create"
                                                class="btn btn-primary btn-sm rounded">Add Sale</a>
                                            <a href=" invoices" class="btn btn-success btn-sm rounded">Manage
                                                Invoices</a>
                                            <a href=" pos_invoices" class="btn btn-blue btn-sm rounded">POS</a></span>
                                    </p>
                                </div>
                            </div>
                            <div class="card-content">

                                <div class="">
                                    <table id="recent-orders" class="table table-hover mb-1">
                                        <thead>
                                            <tr>
                                                <th>Invoices#</th>
                                                <th>Customer</th>
                                                <th>Status</th>
                                                <th>Due</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-truncate"><a href=" pos_invoices/view?id=118">POS
                                                        #1082</a></td>

                                                <td class="text-truncate"> Walk-in Client</td>
                                                <td class="text-truncate"><span
                                                        class="badge  st-paid st-paid">Paid</span></td>
                                                <td class="text-truncate">16-02-2019</td>
                                                <td class="text-truncate">$ 1,124.15</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a href=" invoices/view?id=117">#1031</a></td>

                                                <td class="text-truncate"> Jameson Satford</td>
                                                <td class="text-truncate"><span class="badge  st-due st-due">Due</span>
                                                </td>
                                                <td class="text-truncate">16-02-2019</td>
                                                <td class="text-truncate">$ 333.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a href=" invoices/view?id=116">#1030</a></td>

                                                <td class="text-truncate"> Walk-in Client</td>
                                                <td class="text-truncate"><span class="badge  st-due st-due">Due</span>
                                                </td>
                                                <td class="text-truncate">17-02-2019</td>
                                                <td class="text-truncate">$ 1,399.73</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a href=" pos_invoices/view?id=115">POS
                                                        #1081</a></td>

                                                <td class="text-truncate"> Walk-in Client</td>
                                                <td class="text-truncate"><span
                                                        class="badge  st-paid st-paid">Paid</span></td>
                                                <td class="text-truncate">17-02-2019</td>
                                                <td class="text-truncate">$ 469.58</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a href=" pos_invoices/view?id=113">POS
                                                        #1080</a></td>

                                                <td class="text-truncate"> Walk-in Client</td>
                                                <td class="text-truncate"><span
                                                        class="badge  st-paid st-paid">Paid</span></td>
                                                <td class="text-truncate">16-02-2019</td>
                                                <td class="text-truncate">$ 1,225.86</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a href=" pos_invoices/view?id=112">POS
                                                        #1079</a></td>

                                                <td class="text-truncate"> Walk-in Client</td>
                                                <td class="text-truncate"><span
                                                        class="badge  st-paid st-paid">Paid</span></td>
                                                <td class="text-truncate">16-02-2019</td>
                                                <td class="text-truncate">$ 19,565.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a href=" pos_invoices/view?id=111">POS
                                                        #1078</a></td>

                                                <td class="text-truncate"> Walk-in Client</td>
                                                <td class="text-truncate"><span
                                                        class="badge  st-paid st-paid">Paid</span></td>
                                                <td class="text-truncate">16-02-2019</td>
                                                <td class="text-truncate">$ 419.35</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a href=" pos_invoices/view?id=110">POS
                                                        #1077</a></td>

                                                <td class="text-truncate"> Walk-in Client</td>
                                                <td class="text-truncate"><span
                                                        class="badge  st-paid st-paid">Paid</span></td>
                                                <td class="text-truncate">17-02-2019</td>
                                                <td class="text-truncate">$ 640.85</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a href=" invoices/view?id=109">#1029</a></td>

                                                <td class="text-truncate"> BONNIE</td>
                                                <td class="text-truncate"><span class="badge  st-due st-due">Due</span>
                                                </td>
                                                <td class="text-truncate">16-02-2019</td>
                                                <td class="text-truncate">$ 150.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a href=" pos_invoices/view?id=108">POS
                                                        #1076</a></td>

                                                <td class="text-truncate"> Walk-in Client</td>
                                                <td class="text-truncate"><span class="badge  st-due st-due">Due</span>
                                                </td>
                                                <td class="text-truncate">16-02-2019</td>
                                                <td class="text-truncate">$ 24,222.48</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">

                            <div class="card-header">
                                <div class="header-block">
                                    <h4 class="title">
                                        Income vs Expenses </h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="salesbreakdown" class="card mt-2" data-exclude="xs,sm,lg">
                                    <div class="dashboard-sales-breakdown-chart" id="dashboard-sales-breakdown-chart">
                                    </div>

                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card-group">
                            <div class="card">
                                <div class="card-content">

                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body text-left w-100">
                                                <h3 class="primary"> 19%</h3><span
                                                    class=" font-medium-1 display-block">February Income</span> <span
                                                    class="font-medium-1">$ 185,247.84/$ 999,999.00</span>
                                            </div>
                                            <div class="media-right media-middle">
                                                <i class="fa fa-money primary font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                        <div class="progress progress-sm mt-1 mb-0">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 19%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-content">

                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body text-left w-100">
                                                <h3 class="red"> 1%</h3><span
                                                    class="font-medium-1 display-block">February Expenses</span> <span
                                                    class="font-medium-1">$ 10,750.00/$ 999,999.00</span>
                                            </div>
                                            <div class="media-right media-middle">
                                                <i class="ft-external-link red font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                        <div class="progress progress-sm mt-1 mb-0">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 1%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-content">

                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body text-left w-100">
                                                <h3 class="blue"> 26%</h3><span
                                                    class="font-medium-1 display-block">February Sales</span> <span
                                                    class="font-medium-1">$ 263,596.42/$ 999,999.00</span>
                                            </div>
                                            <div class="media-right media-middle">
                                                <i class="ft-flag blue font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                        <div class="progress progress-sm mt-1 mb-0">
                                            <div class="progress-bar bg-blue" role="progressbar" style="width: 26%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-content">

                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body text-left w-100">
                                                <h3 class="purple"> 17%</h3><span
                                                    class="font-medium-1 display-block">February Net Income</span> <span
                                                    class="font-medium-1">$ 174,497.84/$ 999,999.00</span>
                                            </div>
                                            <div class="media-right media-middle">
                                                <i class="ft-inbox purple font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                        <div class="progress progress-sm mt-1 mb-0">
                                            <div class="progress-bar bg-purple" role="progressbar" style="width: 17%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row match-height">
                    <div class="col-xl-7 col-lg-12">
                        <div class="card" id="transactions">

                            <div class="card-body">
                                <h4>Cashflow</h4>
                                <p>Graphical Presentation of income and expenses have done in the last 30 days.</p>
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1"
                                            href="#sales" aria-expanded="true">Income</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2"
                                            href="#transactions1" aria-expanded="false">Expenses</a>
                                    </li>


                                </ul>
                                <div class="tab-content pt-1">
                                    <div role="tabpanel" class="tab-pane active" id="sales" aria-expanded="true"
                                        data-toggle="tab">
                                        <div id="dashboard-income-chart"></div>

                                    </div>
                                    <div class="tab-pane" id="transactions1" data-toggle="tab" aria-expanded="false">
                                        <div id="dashboard-expense-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Task Manager <a href=" manager/todo"><i
                                            class="icon-arrow-right deep-orange"></i></a></h4>
                            </div>

                            <div class="card-content">
                                <div id="daily-activity" class="">
                                    <table class="table table-striped table-bordered base-style table-responsive">
                                        <thead>
                                            <tr>
                                                <th>

                                                </th>

                                                <th>Activity</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-truncate">
                                                    <input id="t0" type="checkbox" class="icheck-activity" value="1"
                                                        checked>
                                                </td>

                                                <td class="text-truncate">transition B2C eyeballs</td>
                                                <td class="text-truncate"><span id="st0"
                                                        class="badge badge-default task_Done">Done</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">
                                                    <input id="t1" type="checkbox" class="icheck-activity" value="2"
                                                        checked>
                                                </td>

                                                <td class="text-truncate">architect cutting-edge users</td>
                                                <td class="text-truncate"><span id="st1"
                                                        class="badge badge-default task_Done">Done</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">
                                                    <input id="t2" type="checkbox" id="icheck-input-1"
                                                        class="icheck-activity" value="5">
                                                </td>

                                                <td class="text-truncate">architect web-enabled initiatives</td>
                                                <td class="text-truncate"><span id="st2"
                                                        class="badge badge-default task_Due">Due</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">
                                                    <input id="t3" type="checkbox" class="icheck-activity" value="6"
                                                        checked>
                                                </td>

                                                <td class="text-truncate">engage cross-media supply-chains</td>
                                                <td class="text-truncate"><span id="st3"
                                                        class="badge badge-default task_Done">Done</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">
                                                    <input id="t4" type="checkbox" class="icheck-activity" value="10"
                                                        checked>
                                                </td>

                                                <td class="text-truncate">exploit collaborative schemas</td>
                                                <td class="text-truncate"><span id="st4"
                                                        class="badge badge-default task_Done">Done</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">
                                                    <input id="t5" type="checkbox" class="icheck-activity" value="11"
                                                        checked>
                                                </td>

                                                <td class="text-truncate">syndicate impactful partnerships</td>
                                                <td class="text-truncate"><span id="st5"
                                                        class="badge badge-default task_Done">Done</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">
                                                    <input id="t6" type="checkbox" class="icheck-activity" value="12"
                                                        checked>
                                                </td>

                                                <td class="text-truncate">aggregate proactive methodologies</td>
                                                <td class="text-truncate"><span id="st6"
                                                        class="badge badge-default task_Done">Done</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row match-height">
                    <div class="col-xl-8 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent <a href=" transactions"
                                        class="btn btn-primary btn-sm rounded">Transactions</a>
                                </h4>
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
                                                <th>Date#</th>
                                                <th>Account</th>
                                                <th>Debit</th>
                                                <th>Credit</th>

                                                <th>Method</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-truncate"><a
                                                        href=" transactions/view?id=97">16-02-2019</a></td>
                                                <td class="text-truncate"> Sales Account</td>
                                                <td class="text-truncate">$ 0.00</td>
                                                <td class="text-truncate">$ 1,124.15</td>
                                                <td class="text-truncate">Cash</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a
                                                        href=" transactions/view?id=96">16-02-2019</a></td>
                                                <td class="text-truncate"> Sales Account</td>
                                                <td class="text-truncate">$ 0.00</td>
                                                <td class="text-truncate">$ 419.35</td>
                                                <td class="text-truncate">Cash</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a
                                                        href=" transactions/view?id=95">17-02-2019</a></td>
                                                <td class="text-truncate"> Sales Account</td>
                                                <td class="text-truncate">$ 0.00</td>
                                                <td class="text-truncate">$ 469.58</td>
                                                <td class="text-truncate">Cash</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a
                                                        href=" transactions/view?id=93">16-02-2019</a></td>
                                                <td class="text-truncate"> Sales Account</td>
                                                <td class="text-truncate">$ 0.00</td>
                                                <td class="text-truncate">$ 1,225.86</td>
                                                <td class="text-truncate">Cash</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a
                                                        href=" transactions/view?id=92">16-02-2019</a></td>
                                                <td class="text-truncate"> Sales Account</td>
                                                <td class="text-truncate">$ 0.00</td>
                                                <td class="text-truncate">$ 19,565.00</td>
                                                <td class="text-truncate">Cash</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a
                                                        href=" transactions/view?id=91">16-02-2019</a></td>
                                                <td class="text-truncate"> Sales Account</td>
                                                <td class="text-truncate">$ 0.00</td>
                                                <td class="text-truncate">$ 419.35</td>
                                                <td class="text-truncate">Bank</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a
                                                        href=" transactions/view?id=90">16-02-2019</a></td>
                                                <td class="text-truncate"> Promo</td>
                                                <td class="text-truncate">$ 0.00</td>
                                                <td class="text-truncate">$ 500.00</td>
                                                <td class="text-truncate">Transfer</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a
                                                        href=" transactions/view?id=89">17-02-2019</a></td>
                                                <td class="text-truncate"> Sales Account</td>
                                                <td class="text-truncate">$ 0.00</td>
                                                <td class="text-truncate">$ 640.85</td>
                                                <td class="text-truncate">Cash</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a
                                                        href=" transactions/view?id=88">16-02-2019</a></td>
                                                <td class="text-truncate"> Sales Account</td>
                                                <td class="text-truncate">$ 500.00</td>
                                                <td class="text-truncate">$ 0.00</td>
                                                <td class="text-truncate">Transfer</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a
                                                        href=" transactions/view?id=87">16-02-2019</a></td>
                                                <td class="text-truncate"> Sales Account</td>
                                                <td class="text-truncate">$ 0.00</td>
                                                <td class="text-truncate">$ 0.00</td>
                                                <td class="text-truncate">Transfer</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a
                                                        href=" transactions/view?id=86">16-02-2019</a></td>
                                                <td class="text-truncate"> Sales Account</td>
                                                <td class="text-truncate">$ 0.00</td>
                                                <td class="text-truncate">$ 1,352.29</td>
                                                <td class="text-truncate">Cash</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a
                                                        href=" transactions/view?id=85">16-02-2019</a></td>
                                                <td class="text-truncate"> Sales Account</td>
                                                <td class="text-truncate">$ 0.00</td>
                                                <td class="text-truncate">$ 0.00</td>
                                                <td class="text-truncate">Cash</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a
                                                        href=" transactions/view?id=84">16-02-2019</a></td>
                                                <td class="text-truncate"> Sales Account</td>
                                                <td class="text-truncate">$ 0.00</td>
                                                <td class="text-truncate">$ 5,604.47</td>
                                                <td class="text-truncate">Card Swipe</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header ">
                                <h4 class="card-title">Stock Alert</h4>

                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">

                                    <li class="list-group-item"><span class="badge badge-danger float-xs-right">40
                                        </span> <a href=" products/edit?id=2">Barley - Pearl </a><small class="purple">
                                            <i class="ft-map-pin"></i> Croatia</small>
                                    </li>
                                    <li class="list-group-item"><span class="badge badge-danger float-xs-right">57
                                        </span> <a href=" products/edit?id=25">Beer - Sleemans Cream Ale </a><small
                                            class="purple"> <i class="ft-map-pin"></i> Albania</small>
                                    </li>
                                    <li class="list-group-item"><span class="badge badge-danger float-xs-right">15
                                        </span> <a href=" products/edit?id=5">Beets - Pickled </a><small class="purple">
                                            <i class="ft-map-pin"></i> Main WareHouse</small>
                                    </li>
                                    <li class="list-group-item"><span class="badge badge-danger float-xs-right">0
                                        </span> <a href=" products/edit?id=50">Beets - Pickled </a><small
                                            class="purple"> <i class="ft-map-pin"></i> USA</small>
                                    </li>
                                    <li class="list-group-item"><span class="badge badge-danger float-xs-right">0
                                            Pc</span> <a href=" products/edit?id=62">BLUE BAND </a><small
                                            class="purple"> <i class="ft-map-pin"></i> USA</small>
                                    </li>
                                    <li class="list-group-item"><span class="badge badge-danger float-xs-right">91
                                        </span> <a href=" products/edit?id=39">Bowl 12 Oz - Showcase 92012 </a><small
                                            class="purple"> <i class="ft-map-pin"></i> Main WareHouse</small>
                                    </li>
                                    <li class="list-group-item"><span class="badge badge-danger float-xs-right">22
                                        </span> <a href=" products/edit?id=27">Bread - Wheat Baguette </a><small
                                            class="purple"> <i class="ft-map-pin"></i> France</small>
                                    </li>
                                    <li class="list-group-item"><span class="badge badge-danger float-xs-right">52
                                        </span> <a href=" products/edit?id=14">Bread Country Roll </a><small
                                            class="purple"> <i class="ft-map-pin"></i> Main WareHouse</small>
                                    </li>
                                    <li class="list-group-item"><span class="badge badge-danger float-xs-right">18
                                        </span> <a href=" products/edit?id=24">Broom - Angled </a><small class="purple">
                                            <i class="ft-map-pin"></i> Main WareHouse</small>
                                    </li>
                                    <li class="list-group-item"><span class="badge badge-danger float-xs-right">85
                                        </span> <a href=" products/edit?id=21">Cake - Sheet Strawberry </a><small
                                            class="purple"> <i class="ft-map-pin"></i> Main WareHouse</small>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
@endsection