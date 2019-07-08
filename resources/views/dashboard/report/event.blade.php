@extends('layouts.dashboard')
@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">


<div class="content-body">
    <div class="card">

        <div class="card-content">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                <div class="message"></div>
            </div>
            <div class="card-body">

                <!-- Notification -->
                <div class="alert"></div>


                <div id='calendar'></div>

            </div>
        </div>
    </div>
</div>


<div class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
                <div class="error"></div>
                <form class="form-horizontal" id="crud-form">
                    <input type="hidden" id="start">
                    <input type="hidden" id="end">
                    <div class="row form-group">
                        <label class="col-md-4 control-label"
                               for="title">Add Event</label>

                    </div>
                    <div class="row form-group">
                        <label class="col-md-4 control-label"
                               for="title">Title</label>
                        <div class="col-md-8">
                            <input id="title" name="title" type="text" class="form-control input-md"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-4 control-label"
                               for="description">Description</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-4 control-label"
                               for="color">Color</label>
                        <div class="col-md-4">
                            <input id="color" name="color" type="text" class="form-control input-md"
                                   readonly="readonly"/>
                            <span class="help-block">Click to pick a color</span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
@endsection