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
            <h5>Stock Transfer</h5>
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
                <form method="post" id="data_form" class="form-horizontal">
                    <input type="hidden" name="act" value="add_product">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"
                               for="product_cat">Transfer From</label>

                        <div class="col-sm-6">
                            <select id="wfrom" name="from_warehouse" class="form-control">
                                <option value='0'>Select</option>
                                <option value='11'>USA</option><option value='10'>UK</option><option value='9'>USA</option><option value='8'>Guatemala</option><option value='7'>Japan</option><option value='6'>Bulgaria</option><option value='5'>Albania</option><option value='4'>Croatia</option><option value='3'>China</option><option value='2'>France</option><option value='1'>Main WareHouse</option>                            </select>


                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="pay_cat">Products</label>

                        <div class="col-sm-6">
                            <select id="products_l" name="products_l[]" class="form-control required select-box"
                                    multiple="multiple">

                            </select>


                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="pay_cat">Products Qty</label>

                        <div class="col-sm-6">
                            <input name="products_qty" class="form-control required" type="text">

                            <small>Comma (,) separated</small>


                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="product_cat">Transfer To</label>

                        <div class="col-sm-6">
                            <select name="to_warehouse" class="form-control">
                                <option value='11'>USA</option><option value='10'>UK</option><option value='9'>USA</option><option value='8'>Guatemala</option><option value='7'>Japan</option><option value='6'>Bulgaria</option><option value='5'>Albania</option><option value='4'>Croatia</option><option value='3'>China</option><option value='2'>France</option><option value='1'>Main WareHouse</option>                            </select>


                        </div>
                    </div>


                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"></label>

                        <div class="col-sm-4">
                            <input type="submit" id="submit-data" class="btn btn-success margin-bottom"
                                   value="Stock Transfer"
                                   data-loading-text="Adding...">
                            <input type="hidden" value="products/stock_transfer" id="action-url">
                        </div>
                    </div>
            </div>

            </form>
        </div>
    </div>

    <script type="text/javascript">
        $("#products_l").select2();
        $("#wfrom").on('change', function () {
            var tips = $('#wfrom').val();
            $("#products_l").select2({

                tags: [],
                ajax: {
                    url: baseurl + 'products/stock_transfer_products?wid=' + tips,
                    dataType: 'json',
                    type: 'POST',
                    quietMillis: 50,
                    data: function (product) {

                        return {
                            product: product,
                            'g_ea0d': crsf_hash

                        };
                    },
                    processResults: function (data) {
                        return {
                            results: $.map(data, function (item) {
                                return {
                                    text: item.product_name,
                                    id: item.pid
                                }
                            })
                        };
                    },
                }
            });
        });
    </script>

</div>
</div>
</div>
@endsection