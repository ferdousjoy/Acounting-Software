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
            <h5>Trending Products Graphical Reports</h5>
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

                <div class="form-group">
                    <!-- basic buttons -->
                    <button type="button"
                            class="update_chart btn btn-primary btn-min-width btn-lg mr-1 mb-1"
                            data-val="week">This Week</button>
                    <button type="button"
                            class="update_chart btn btn-secondary btn-min-width  btn-lg mr-1 mb-1"
                            data-val="month">This Month</button>
                    <button type="button"
                            class="update_chart btn btn-success btn-min-width  btn-lg mr-1 mb-1"
                            data-val="year">This Year</button>
                    <button type="button"
                            class="update_chart btn btn-info btn-min-width  btn-lg mr-1 mb-1"
                            data-val="custom">Custom Range Date</button>

                </div>
                <form id="chart_custom">
                    <div id="custom_c" style="display: none ">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">From Date</label>
                                    <input type="text" class="form-control required date30"
                                           placeholder="Start Date" name="sdate"
                                           data-toggle="datepicker" autocomplete="false">
                                </fieldset>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="helpInputTop">To Date</label>
                                    <input type="text" class="form-control required"
                                           placeholder="End Date" name="edate"
                                           data-toggle="datepicker" autocomplete="false">
                                </fieldset>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-12 mb-1"><span class="mt-2"><br></span>
                                <fieldset class="form-group">
                                    <input type="hidden" name="p"
                                           value="custom">
                                    <button type="button" id="custom_update_chart"
                                            class="btn btn-blue-grey">Submit
                                    </button>
                                </fieldset>
                            </div>

                        </div>

                    </div>
                </form>
                <div class="card-body">
                    <div class="card-block">
                        <div id="cat-chart" height="400"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        var cat_data = [
            {y: "5 جوال", a: 601.00 },{y: "Bowl 12 Oz - Showcase 92012", a: 47.00 },{y: "Bread - Rosemary Focaccia", a: 26.00 },{y: "Cake - Sheet Strawberry", a: 19.00 },{y: "Bread - Wheat Baguette", a: 81.00 },{y: "Celery", a: 11.00 },{y: "BLUE BAND", a: 5.00 },{y: "BLUE BAND", a: 15.00 },{y: "Broom - Angled", a: 23.00 },{y: "Cucumber - English", a: 19.00 },{y: "Cranberries - Fresh", a: 6.00 },{y: "Test 2", a: 1.00 },{y: "User2", a: 1.00 },{y: "Pasta - Fusili, Dry", a: 1.00 },{y: "Mk", a: 1.00 },{y: "Transfer Sheets", a: 4.00 },{y: "Champagne - Brights, Dry", a: 13.00 },{y: "Pastry - Carrot Muffin - Mini", a: 1.00 },{y: "Barley - Pearl", a: 91.00 },{y: "Yer", a: 2.00 },{y: "TL-WR850N TP-LINK ROUTER 300MBPS N ROUTER", a: 1.00 },{y: "Beer - Sleemans Cream Ale", a: 92.00 },{y: "Sauce - Ranch Dressing", a: 1.00 },{y: "Whmis Spray Bottle Graduated", a: 1.00 },{y: "Veal - Brisket, Provimi, Bone - In", a: 1.00 },{y: "PIZZA GRANDE", a: 1.00 },{y: "Cleaner - Comet", a: 4.00 },{y: "Trueblue - Blueberry 12x473ml", a: 2.00 },{y: "Cheese - Fontina", a: 12.00 },{y: "جوال", a: 152.00 },{y: "Cucumber - Pickling Ontario", a: 1.00 },{y: "10 جوال", a: 602.00 },{y: "Beets - Pickled", a: 76.00 },{y: "Beets - Pickled", a: 10.00 },{y: "Champagne - Brights, Dry", a: 4.00 },{y: "", a: 4.00 },{y: "Bread Country Roll", a: 47.00 },{y: "Test 2", a: 1.00 },{y: "Bread - Hot Dog Buns", a: 10.00 },{y: "Test 2", a: 1.00 },        ];
        draw_c(cat_data);
    });

    function draw_c(cat_data) {
        $('#cat-chart').empty();
        Morris.Bar({
            element: 'cat-chart',
            data: cat_data,
            xkey: 'y',
            ykeys: ['a'],
            labels: ['Qty'],
            barColors: [
                '#4D8000',
            ],
            barFillColors: [
                '#34cea7',
            ],
            barOpacity: 0.6,
        });
    }

    $(document).on('click', ".update_chart", function (e) {
        e.preventDefault();
        var a_type = $(this).attr('data-val');
        if (a_type == 'custom') {
            $('#custom_c').show();
        } else {
            $.ajax({
                url: baseurl + 'chart/trending_products_update',
                dataType: 'json',
                method: 'POST',
                data: {
                    'p': $(this).attr('data-val'),
                    'g_ea0d': '492717f74d74cf5437a35dd697ec35fc'
                },
                success: function (data) {
                    draw_c(data);
                }
            });
        }
    });
    $(document).on('click', "#custom_update_chart", function (e) {
        e.preventDefault();
        $.ajax({
            url: baseurl + 'chart/trending_products_update',
            dataType: 'json',
            method: 'POST',
            data: $('#chart_custom').serialize() + '&g_ea0d=492717f74d74cf5437a35dd697ec35fc',
            success: function (data) {
                draw_c(data);
            }
        });

    });


</script></div>
</div>
</div>
@endsection