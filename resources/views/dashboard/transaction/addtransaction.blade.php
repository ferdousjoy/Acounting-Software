@extends('layouts.dashboard')
@section('title','Add transaction')
@section('content')
<!-- Horizontal navigation-->
@include('layouts.inc.success')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header"> 
            <h4>Add New Transaction</h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="card-content">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                <div class="message"></div>
            </div>
            <div class="card-body">
                
                    <div class="row mb-1 ml-1">
                        <div class="col-md-6">
                        <form method="get"" action="{{route('search_customer_supplier')}}">
                               
                               <label for="cst" class="caption">Search Client</label>
                               <input type="text" class="form-control" name="search"  placeholder="Enter Customer Name or Mobile Number or Email to search"/>
                               <input type="submit" class="btn btn-success" value="Search">
                         </form> 
                        </div>

                    </div>
                    <hr>
                    <form method="post" action="{{Route('add_transaction_form')}}">
                    @csrf
                    <div id="customerpanel" class="form-group row bg-blue bg-lighten-4 pb-1">

                        <div class="col-sm-3"><label for="toBizName"
                                                     class="caption col-form-label">C/o                                <span
                                        style="color: red;">*</span></label>
                                        @php if(isset($posts)) {   @endphp
                                     @foreach($posts as $post)
                                        <input type="text" class="form-control required" name="payer_name" id="customer_name" value="{{$post->billing_name}}">
                                    @endforeach
                                    @php } @endphp      
                            
                        </div>
                        <div class="col-sm-3">
                        <label for="toBizName"
                                                     class="caption col-form-label">Supplier/Customer                            <span
                                        style="color: red;">*</span></label>
                                <div class="  custom-radio">
                                <input type="radio" class="custom-control-input" name="ty_p" id="customRadio1" value="cutomer"
                                       checked="">
                                <label class="custom-control-label"
                                       for="customRadio1">Customer &nbsp;</label>
                            </div>

                            <div class="custom-radio">
                                <input type="radio" class="custom-control-input" name="ty_p" id="customRadio2"
                                       value="supplier">
                                <label class="custom-control-label"
                                       for="customRadio2">Supplier</label>
                            </div>
                                </div>
                                    
                        <div class="col-sm-3"><label class=" col-form-label"
                                                     for="pay_cat">To Account</label>
                            <select name="pay_acc" class="form-control">
                            @foreach($accounts as $accounts)
                                <option value='{{$accounts->account_no}}'>{{$accounts->account_no}}</option>             
                                
                                @endforeach
                                               </select>


                        </div>

                                


                        <div class="col-sm-3"><label class="col-form-label"
                                                     for="amount">Amount</label>
                            <input type="number" placeholder="Amount"
                                   class="form-control margin-bottom  required" name="amount" value="0">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-sm-4"><label class="col-form-label"
                                                     for="date">Date</label>
                            <input type="date" class="form-control required"
                                   name="date" data-toggle="datepicker"
                                   autocomplete="false">
                        </div>


                        <div class="col-sm-4"><label class="col-form-label"
                                                     for="product_price">Type</label>

                            <select name="pay_type" class="form-control">
                                <option value="Income/credit"
                                        selected>Income / Credit</option>
                                <option value="Expense/debit">Expense / Debit</option>

                            </select>


                        </div>


                        <div class="col-sm-4"><label class="col-form-label"
                                                     for="pay_cat">Category</label>
                            <select name="pay_cat" class="form-control">
                                <option value='Income'>Income</option><option value='Expenses'>Expenses</option><option value='Other'>Other</option>                            </select>


                        </div>


                    </div>
                    <div class="form-group row bg-blue bg-lighten-4 pb-1">

                        <div class="col-sm-4"><label class="col-form-label"
                                                     for="product_price">Method </label>

                            <select name="paymethod" class="form-control">
                                <option value="Cash" selected>Cash</option>
                                <option value="Card">Card</option>
                                <option value="Cheque">Cheque</option>
                                <option value="Bank">Bank</option>
                                <option value="Other">Other</option>
                            </select>


                        </div>


                        <div class="col-sm-8"><label
                                    class="col-form-label">Note</label>
                            <input type="text" placeholder="Note"
                                   class="form-control" name="note">
                        </div>
                    </div>
                    <!---- Dual -->
                    
                    <div class="form-group row">


                        <div class="col-sm-4">
                            <input type="submit" class="btn btn-success btn-lg margin-bottom"
                                   value="Add transaction"
                                   data-loading-text="Adding...">
                        </div>
                    </div>


                </form>
            </div>
        </div>
</div>
</div>
</div>
@endsection