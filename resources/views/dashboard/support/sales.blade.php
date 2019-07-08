@extends('layouts.dashboard')
@section('title','Create Tax')
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
                    Tax Form
                </h3>
            </div>


            <p>&nbsp;</p>
            <div class="card card-block">
                <form action="{{Route('add_sales_form')}}" class="card-body"  method="post" accept-charset="utf-8">
                    @csrf


                <h5 class="w-100 text-center">Create Tax</h5>
                <hr>

                <div class="form-group row">
                    <label class="col-sm-2 offset-sm-2 col-form-label Text-right"
                           for="accno">Tax Name</label>
                    <div class="col-sm-6 col-lg-4">
                        <input type="text" placeholder="Sales Tax"
                               class="form-control margin-bottom required" name="tax">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 offset-sm-2 col-form-label Text-right"
                           for="accno">Percentage</label>
                    <div class="col-sm-6 col-lg-4">
                        <input type="text" placeholder="percentage"
                               class="form-control margin-bottom required" name="percentage">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit" class="btn btn-success margin-bottom"
                               value="Save" data-loading-text="Adding...">
                    </div>
                </div>


                </form>
            </div>


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
