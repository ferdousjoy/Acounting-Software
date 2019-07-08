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
            <h6>TAX Report Export</h6>
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

                <div class="content">
                    <div class="card card-block">
                        <div id="notify" class="alert alert-success" style="display:none;">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>

                            <div class="message"></div>
                        </div>


                        <div class="row sameheight-container">
                            <div class="col-md-8">
                                <div class="card card-block sameheight-item">

                                    <form action=" export/taxstatement_o" method="post"
                                          role="form">
                                        <input type="hidden"
                                               name="g_ea0d"
                                               value="492717f74d74cf5437a35dd697ec35fc">
                                        <div class="form-group row">

                                            <label class="col-sm-3 control-label"
                                                   for="sdate">From Date</label>

                                            <div class="col-sm-4">
                                                <select name="ty" class="form-control">

                                                    <option value='Sales'>Sales TAX Report</option>
                                                    <option value='Purchase'>Purchase TAX Report</option>
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
                                            <label class="col-sm-3 col-form-label" for="pay_cat"></label>

                                            <div class="col-sm-4">
                                                <input type="submit" class="btn btn-primary btn-md"
                                                       value="Export">


                                            </div>
                                        </div>

                                    </form>
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
</div>
</div>
@endsection