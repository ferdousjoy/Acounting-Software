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
            <h5 class="title">Manage Email Templates            </h5>

            <hr>
            <table id="catgtable" class="table table-striped table-bordered zero-configuration" cellspacing="0"
                   width="100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>

                    <th> Action</th>


                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>New Invoice Notification</td>
                    
                  
                    <td><a href='https://pos.ultimatekode.com/templates/email_update?id=6' class='btn btn-cyan btn-xs'><i class='fa fa-pencil'></i> Edit</a></td></tr><tr>
                    <td>2</td>
                    <td>Invoice Payment Reminder</td>
                    
                  
                    <td><a href='https://pos.ultimatekode.com/templates/email_update?id=7' class='btn btn-cyan btn-xs'><i class='fa fa-pencil'></i> Edit</a></td></tr><tr>
                    <td>3</td>
                    <td>Invoice Refund Proceeded</td>
                    
                  
                    <td><a href='https://pos.ultimatekode.com/templates/email_update?id=8' class='btn btn-cyan btn-xs'><i class='fa fa-pencil'></i> Edit</a></td></tr><tr>
                    <td>4</td>
                    <td>Invoice payment Received</td>
                    
                  
                    <td><a href='https://pos.ultimatekode.com/templates/email_update?id=9' class='btn btn-cyan btn-xs'><i class='fa fa-pencil'></i> Edit</a></td></tr><tr>
                    <td>5</td>
                    <td>Invoice Overdue Notice</td>
                    
                  
                    <td><a href='https://pos.ultimatekode.com/templates/email_update?id=10' class='btn btn-cyan btn-xs'><i class='fa fa-pencil'></i> Edit</a></td></tr><tr>
                    <td>6</td>
                    <td>Quote Proposal</td>
                    
                  
                    <td><a href='https://pos.ultimatekode.com/templates/email_update?id=11' class='btn btn-cyan btn-xs'><i class='fa fa-pencil'></i> Edit</a></td></tr><tr>
                    <td>7</td>
                    <td>Purchase Order Request</td>
                    
                  
                    <td><a href='https://pos.ultimatekode.com/templates/email_update?id=12' class='btn btn-cyan btn-xs'><i class='fa fa-pencil'></i> Edit</a></td></tr><tr>
                    <td>8</td>
                    <td>Stock Return Mail</td>
                    
                  
                    <td><a href='https://pos.ultimatekode.com/templates/email_update?id=13' class='btn btn-cyan btn-xs'><i class='fa fa-pencil'></i> Edit</a></td></tr>                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Name</th>

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