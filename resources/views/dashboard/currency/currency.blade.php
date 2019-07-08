@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <div class="card-body">
            <h5 class="title"> Customer Invoice Payment Currencies <a
                        href="https://pos.ultimatekode.com/paymentgateways/add_currency"
                        class="btn btn-primary btn-sm rounded">
                    Add new                </a>
            </h5>
            <hr>
            <p>You can add invoice currencies here, these currencies can be selected during an invoice creation. The
                exchange rate and other tasks will automatically handled by application. Please make sure enter correct
                ISO currency code to get automatic exchange rate updates and receive payment using payment gateways with
                converted amount.</p>
            <hr>

            <table id="datgtable" class="table table-striped table-bordered zero-configuration" cellspacing="0"
                   width="100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>ISO CODE</th>
                    <th>Symbol</th>
                    <th>Exchange Rate</th>
                    <th> Action</th>


                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>GBP</td>
                    <td>£</td>
                    <td>0.770</td>
                  
                    <td><a href='https://pos.ultimatekode.com/paymentgateways/edit_currency?id=1' class='btn btn-cyan btn-xs'><i class='icon-pencil'></i> Edit</a> <a href='#' data-object-id='1' class='btn btn-danger btn-xs delete-object' title='Delete'><i class='fa fa-trash'></i></a></td></tr><tr>
                    <td>2</td>
                    <td>BTC</td>
                    <td>BTC</td>
                    <td>0.030</td>
                  
                    <td><a href='https://pos.ultimatekode.com/paymentgateways/edit_currency?id=2' class='btn btn-cyan btn-xs'><i class='icon-pencil'></i> Edit</a> <a href='#' data-object-id='2' class='btn btn-danger btn-xs delete-object' title='Delete'><i class='fa fa-trash'></i></a></td></tr><tr>
                    <td>3</td>
                    <td>INR</td>
                    <td>₹</td>
                    <td>70.000</td>
                  
                    <td><a href='https://pos.ultimatekode.com/paymentgateways/edit_currency?id=3' class='btn btn-cyan btn-xs'><i class='icon-pencil'></i> Edit</a> <a href='#' data-object-id='3' class='btn btn-danger btn-xs delete-object' title='Delete'><i class='fa fa-trash'></i></a></td></tr>                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>ISO CODE</th>
                    <th>Symbol</th>
                    <th>Exchange Rate</th>
                    <th> Action</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
<div id="delete_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete</h4>
            </div>

            <div class="modal-footer">
                <input type="hidden" id="object-id" value="">
                <input type="hidden" id="action-url" value="paymentgateways/delete_currency">
                <button type="button" data-dismiss="modal" class="btn btn-primary"
                        id="delete-confirm">Delete</button>
                <button type="button" data-dismiss="modal"
                        class="btn">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {

        //datatables
        $('#datgtable').DataTable({responsive: true});

    });
</script>
</div>
</div>
</div>

@endsection