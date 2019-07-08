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
            <h4>Commission </h4>
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


        </div>
        <div class="font-large-x1 purple p-1" id="param1"></div>
        <div class="card-body">
            <div class="card card-block">
                <form method="post" id="product_action">
                    <div>
                        <h6>Custom Range</h6>
                        <hr>


                        <div class="form-group row">

                            <label class="col-sm-3 col-form-label"
                                   for="pay_cat">Employee</label>

                            <div class="col-sm-6">
                                <select name="pay_acc" class="form-control">

                                    <option value='9'>BusinessOwner</option><option value='16'>Oliver Mammatt</option><option value='17'>Harry McGaughey</option><option value='18'>William Longlands</option><option value='20'>Mark Wales</option><option value='19'>Stephen L. Turner</option>                                </select>


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
            var actionurl = baseurl + 'reports/commission';
            actionCaculate(actionurl);
        });


    </script></div>
</div>
</div>
@endsection