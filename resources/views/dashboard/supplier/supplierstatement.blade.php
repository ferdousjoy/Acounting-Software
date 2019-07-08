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
            <h5>Supplier Account Statement</h5>
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


            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">

                        <form action=" reports/supplierviewstatement" method="post" role="form">
                            <input type="hidden" name="g_ea0d"
                                   value="492717f74d74cf5437a35dd697ec35fc">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"
                                       for="pay_cat">Supplier</label>

                                <div class="col-sm-9">
                                    <select name="supplier" class="form-control" id="customer_statement">

                                    </select>


                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"
                                       for="pay_cat">Type</label>

                                <div class="col-sm-9">
                                    <select name="trans_type" class="form-control">
                                        <option value='All'>All-Transactions</option>
                                        <option value='Expense'>Debit</option>
                                        <option value='Income'>Credit</option>
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
                                    <input type="submit" class="btn btn-primary btn-md" value="View">


                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    $("#customer_statement").select2({
        minimumInputLength: 4,
        tags: [],
        ajax: {
            url: baseurl + 'search/supplier_select',
            dataType: 'json',
            type: 'POST',
            quietMillis: 50,
            data: function (supplier) {
                return {
                    supplier: supplier,
                    'g_ea0d': crsf_hash
                };
            },
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.name,
                            id: item.id
                        }
                    })
                };
            },
        }
    });
</script>
</div>
</div>
</div>
@endsection