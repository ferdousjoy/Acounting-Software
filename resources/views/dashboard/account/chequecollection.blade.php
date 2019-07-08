@extends('layouts.dashboard')
@section('title','Create Cheque Collection')
@section('content')
@include('layouts.inc.success')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><article class="content">
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-xs-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-block">
                        <div class="media">
                            <div class="media-body text-xs-left">
                                <h3 class="pink" id="dash_0"></h3>
                                <span>Waiting</span>
                            </div>
                            <div class="media-right media-middle">
                                <i class="fa fa-clock-o pink font-large-2 float-xs-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-xs-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-block">
                        <div class="media">
                            <div class="media-body text-xs-left">
                                <h3 class="blue" id="dash_1"></h3>
                                <span>Processing</span>
                            </div>
                            <div class="media-right media-middle">
                                <i class="fa fa-refresh blue font-large-2 float-xs-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-xs-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-block">
                        <div class="media">
                            <div class="media-body text-xs-left">
                                <h3 class="success" id="dash_2"></h3>
                                <span>Solved</span>
                            </div>
                            <div class="media-right media-middle">
                                <i class="fa fa-check-circle success font-large-2 float-xs-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-xs-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-block">
                        <div class="media">
                            <div class="media-body text-xs-left">
                                <h3 class="cyan">0</h3>
                                <span>Total</span>
                            </div>
                            <div class="media-right media-middle">
                                <i class="fa fa-pie-chart cyan font-large-2 float-xs-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <div class="card-body">
            <div class="header-block">
                <h3 class="title">
                    Cheque Collection Form              
                </h3>
            </div>


            <p>&nbsp;</p>
            <div class="card card-block">
                <form action="{{Route('add_cheque_form')}}" class="card-body"  method="post" accept-charset="utf-8">
                    @csrf                                                                                              
    
    
                <h5 class="w-100 text-center">Create Cheque Collection</h5>
                <hr>
    
                <div class="form-group row">
    
                    <label class="col-sm-2 offset-sm-2 col-form-label"
                           for="accno">Customer Name</label>
    
                    <div class="col-sm-6">
                        <input type="text" placeholder="Customer Name"
                               class="form-control margin-bottom required" name="name">
                    </div>
                </div>
                <div class="form-group row">
    
                    <label class="col-sm-2 offset-sm-2 col-form-label"
                           for="accno">Ammount</label>
    
                    <div class="col-sm-6">
                        <input type="number" placeholder="Ammount"
                               class="form-control margin-bottom required" name="price">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 offset-sm-2 col-form-label "
                           for="accno">Date</label>
    
                    <div class="col-sm-6">
                        <input type="date"
                               class="form-control margin-bottom required" name="date">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 offset-sm-2 col-form-label "
                           for="accno">Invoice No</label>
    
                    <div class="col-sm-6">
                        <input type="text"
                               class="form-control margin-bottom required" name="invoice-no">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 offset-sm-2 col-form-label "
                           for="accno">Purpose</label>
    
                    <div class="col-sm-6">
                        <input type="text"
                               class="form-control margin-bottom required" name="purpose">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 offset-sm-2 col-form-label "
                           for="accno">Cheque No</label>
    
                    <div class="col-sm-6">
                        <input type="text"
                               class="form-control margin-bottom required" name="cheque_no">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 offset-sm-2 col-form-label "
                           for="accno">Cheque Date</label>
    
                    <div class="col-sm-6">
                        <input type="date"
                               class="form-control margin-bottom required" name="cheque_date">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 offset-sm-2 col-form-label "
                           for="accno">Bank List</label>
    
                    <div class="col-sm-6">
                        <select class="form-control margin-bottom required" name="bank_list">
                            <option>Bangladesh Development Bank Limited</option>
                            <option>BASIC Bank Limited</option>
                            <option>Rupali Bank Limited</option>
                            <option>Agrani Bank Limited</option>
                            <option>Janata Bank Limited</option>
                            <option>Sonali Bank Limited</option>
                            <option>Southeast Bank Ltd.</option>
                            <option>Uttara Bank Limited</option>
                            <option>United Commercial Bank Ltd</option>
                            <option>Trust Bank Limited</option>
                            <option>Standard Bank Limited</option>
                            <option>South Bangla Agriculture and Commerce Bank Limited</option>
                            <option>Shimanto Bank Ltd</option>
                            <option>Pubali Bank Limited</option>
                            <option>Prime Bank Limited</option>
                            <option>Premier Bank Limited</option>
                            <option>Padma Bank Limited</option>
                            <option>One Bank Limited</option>
                            <option>NRB Commercial Bank Ltd</option>
                            <option>NRB Global Bank Limited</option>
                            <option>NRB Bank Limited</option>
                            <option>National Credit & Commerce Bank Limited</option>
                            <option>National Bank Limited</option>
                            <option>Mutual Trust Bank Limited</option>
                            <option>Modhumoti Bank Limited</option>
                            <option>Midland Bank Limited</option>
                            <option>Mercantile Bank Limited</option>
                            <option>Eastern Bank Limited</option>
                            <option>Dhaka Bank Limited</option>
                            <option>Dutch-Bangla Bank Limitedd</option>
                            <option>IFIC Bank Limited</option>
                            <option>Community Bank Bangladesh Limited</option>
                            <option>City Bank Limited</option>
                            <option>BRAC Bank Limited</option>
                            <option>Bank Asia Limited</option>
                            <option>Bangladesh Commerce Bank Limited</option>
                            <option>AB Bank Limited</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 offset-sm-2 col-form-label "
                           for="accno">Branch</label>
    
                    <div class="col-sm-6">
                        <input type="text"
                               class="form-control margin-bottom required" name="branch">
                    </div>
                </div>
                <div class="form-group row">
    
                    <label class="col-sm-2 offset-sm-2 col-form-label" for="holder">Remarks</label>
    
                    <div class="col-sm-6">
                        <textarea class="form-control" name="remarks" id=""></textarea>
                    </div>
                </div>
                <div class="form-group row">
    
                    <label class="col-sm-2 offset-sm-2 col-form-label"></label>
    
                    <div class="col-sm-4">
                        <input type="submit" class="btn btn-success margin-bottom"
                               value="Add Cheque Collection" data-loading-text="Adding...">
                    </div>
                </div>
    
    
                </form>
            </div>


            <!--<table id="doctable" class="table table-striped table-bordered zero-configuration" cellspacing="0"-->
            <!--       width="100%">-->
            <!--    <thead>-->
            <!--    <tr>-->
            <!--        <th>#</th>-->
            <!--        <th>Subject</th>-->
            <!--        <th>Added</th>-->
            <!--        <th>Status</th>-->
            <!--        <th> Action</th>-->


            <!--    </tr>-->
            <!--    </thead>-->
            <!--    <tbody>-->

            <!--    </tbody>-->

            <!--</table>-->
        </div>
    </div>
    <input type="hidden" id="dashurl" value="tickets/ticket_stats">
</article>
<div id="delete_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Delete</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this ticket?</p>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="object-id" value="">
                <input type="hidden" id="action-url" value="tickets/delete_ticket">
                <button type="button" data-dismiss="modal" class="btn btn-primary"
                        id="delete-confirm">Delete</button>
                <button type="button" data-dismiss="modal"
                        class="btn">Cancel</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection