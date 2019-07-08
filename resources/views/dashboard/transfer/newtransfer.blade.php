@extends('layouts.dashboard')
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
            <h5>Add New Transfer</h5>
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
            <hr>
            <div class="card-body">
                <form method="post" id="data_form" class="form-horizontal">


                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="pay_cat">From Account</label>

                        <div class="col-sm-6">
                            <select name="pay_acc" class="form-control">
                                <option value='1'>123456 - Sales Account</option>                            </select>


                        </div>
                    </div>

                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="pay_cat">To Account</label>

                        <div class="col-sm-6">
                            <select name="pay_acc2" class="form-control">
                                <option value='1'>123456 - Sales Account</option>                            </select>


                        </div>
                    </div>


                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="amount">Amount</label>

                        <div class="col-sm-6">
                            <input type="text" placeholder="Amount"
                                   class="form-control margin-bottom  required" name="amount">
                        </div>
                    </div>


                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"></label>

                        <div class="col-sm-4">
                            <input type="submit" id="submit-data" class="btn btn-success margin-bottom"
                                   value="Add transaction"
                                   data-loading-text="Adding...">
                            <input type="hidden" value="transactions/save_transfer" id="action-url">
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
@endsection