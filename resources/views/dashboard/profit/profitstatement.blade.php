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
            <h4>Profit </h4>
            <hr>
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
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li class="font-large-x1 blue ">Total Profit                                <span id="p1" class="font-large-x1 red float-xs-right"><i
                                            class=" fa fa-refresh spinner"></i></span>
                            </li>
                            <hr>
                            <li class="font-large-x1 green">Total Month Profit                                <span id="p2" class="font-large-x1 blue float-xs-right"><i
                                            class=" fa fa-refresh spinner"></i></span></li>


                            <li class="font-large-x1 purple" id="param1"></li>

                        </ul>
                    </div>

                </div>

            </div>

        </div>
        <hr>
        <div class="card-body">
            <div class="card card-block">
                <form method="post" id="product_action" class="form-horizontal">
                    <div class="grid_3 grid_4">
                        <h6>Custom Range</h6>
                        <hr>


                        <div class="form-group row">

                            <label class="col-sm-3 col-form-label"
                                   for="pay_cat">Business Locations</label>

                            <div class="col-sm-6">
                                <select name="pay_acc" class="form-control">
                                    <option value='0'>All</option>
                                                                    </select>


                            </div>
                        </div>


                        <div class="form-group row">

                            <label class="col-sm-3 control-label"
                                   for="sdate">From Date</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control required"
                                       placeholder="Start Date" name="sdate" id="sdate"
                                       data-toggle="datepicker" autocomplete="false">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-3 control-label"
                                   for="edate">To Date</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control required"
                                       placeholder="End Date" name="edate"
                                       data-toggle="datepicker" autocomplete="false">
                            </div>
                        </div>


                        <div class="form-group row">

                            <label class="col-sm-3 col-form-label"></label>

                            <div class="col-sm-4">
                                <input type="hidden" name="check" value="ok">
                                <input type="submit" id="calculate_profit" class="btn btn-success margin-bottom"
                                       value="Calculate"
                                       data-loading-text="Calculating...">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $("#calculate_profit").click(function (e) {
            e.preventDefault();
            var actionurl = baseurl + 'reports/customprofit';
            actionCaculate(actionurl);
        });

        setTimeout(function () {
            $.ajax({
                url: baseurl + 'reports/fetch_data?p=profit',
                dataType: 'json',
                success: function (data) {
                    $('#p1').html(data.p1);
                    $('#p2').html(data.p2);

                },
                error: function (data) {
                    $('#response').html('Error')
                }

            });
        }, 2000);
    </script></div>
</div>
</div>
@endsection