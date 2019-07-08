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
            <h5 class="title">Payment Gateways            </h5>

            <hr>
            <table id="catgtable" class="table table-striped table-bordered zero-configuration" cellspacing="0"
                   width="100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Status On</th>
                    <th>Test Mode</th>
                    <th> Action</th>


                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Stripe</td>
                    <td>Yes</td>
                    <td>true</td>
                  
                    <td><a href='' class='btn btn-cyan btn-xs'><i class='icon-pencil'></i>Edit</a></td></tr><tr>
                    <td>2</td>
                    <td>Authorize.Net</td>
                    <td>Yes</td>
                    <td>true</td>
                  
                    <td><a href='' class='btn btn-cyan btn-xs'><i class='icon-pencil'></i>Edit</a></td></tr><tr>
                    <td>3</td>
                    <td>Pin Payments</td>
                    <td>No</td>
                    <td>true</td>
                  
                    <td><a href='' class='btn btn-cyan btn-xs'><i class='icon-pencil'></i>Edit</a></td></tr><tr>
                    <td>4</td>
                    <td>PayPal</td>
                    <td>Yes</td>
                    <td>true</td>
                  
                    <td><a href='' class='btn btn-cyan btn-xs'><i class='icon-pencil'></i>Edit</a></td></tr><tr>
                    <td>5</td>
                    <td>SecurePay</td>
                    <td>No</td>
                    <td>true</td>
                  
                    <td><a href='' class='btn btn-cyan btn-xs'><i class='icon-pencil'></i>Edit</a></td></tr><tr>
                    <td>6</td>
                    <td>2Checkout</td>
                    <td>Yes</td>
                    <td>true</td>
                  
                    <td><a href='' class='btn btn-cyan btn-xs'><i class='icon-pencil'></i>Edit</a></td></tr><tr>
                    <td>7</td>
                    <td>PayU Money</td>
                    <td>No</td>
                    <td>true</td>
                  
                    <td><a href='' class='btn btn-cyan btn-xs'><i class='icon-pencil'></i>Edit</a></td></tr><tr>
                    <td>8</td>
                    <td>RazorPay</td>
                    <td>Yes</td>
                    <td>true</td>
                  
                    <td><a href=' class='btn btn-cyan btn-xs'><i class='icon-pencil'></i>Edit</a></td></tr>                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Status On</th>
                    <th>Test Mode</th>
                    <th> Action</th>

                </tr>
                </tfoot>
            </table>
        </div>
    </div>
<script type="text/javascript">
    $(document).ready(function () {

        //datatables
        $('#catgtable').DataTable({responsive: true});

    });
</script>
</div>
</div>
</div>

@endsection