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
            <h5>Purchase Graphical Reports</h5>
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
                            data-val="week"><i
                                class="fa fa-clock-o"></i> This Week                    </button>
                    <button type="button"
                            class="update_chart btn btn-secondary btn-min-width  btn-lg mr-1 mb-1"
                            data-val="month"><i
                                class="fa fa-calendar"></i> This Month                    </button>
                    <button type="button"
                            class="update_chart btn btn-success btn-min-width  btn-lg mr-1 mb-1"
                            data-val="year"><i
                                class="fa fa-book"></i> This Year                    </button>

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
</div>
</div>

@endsection