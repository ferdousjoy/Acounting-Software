@extends('layouts.dashboard')
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
            <h5>EditTask </h5>
            <span class="purple"> {{$todoedit->task_title}}</span>
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


                <form method="post"  class="form-horizontal" action="{{Route('edit_to_do_form')}}"> 
                    @csrf
                    @method('put')

                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="name">Title</label>

                        <div class="col-sm-10">
                            <input type="text" placeholder="{{$todoedit->task_title}}" class="form-control margin-bottom" name="title" value="{{$todoedit->task_title}}">
                        </div>
                    </div>

                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="name">Status</label>

                        <div class="col-sm-4">
                            <select name="status" class="form-control">
                                <option value="Due">--Due--</option>
                                <option value='Due'>Due</option>
                            <option value='Done'>Done</option>
                            <option value='Progress'>Progress</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="pay_cat">Priority</label>

                        <div class="col-sm-4">
                            <select name="priority" class="form-control">
                            <option value="option_select" disabled selected>Priority</option>
                                <option value="Medium">--Medium--</option>                               
                                 <option value='Low'>Low</option>
                                <option value='Medium'>Medium</option>
                                <option value='High'>High</option>
                                <option value='Urgent'>Urgent</option>
                            </select>


                        </div>
                    </div>

                    <div class="form-group row">

                        <label class="col-sm-2 control-label"
                               for="sdate">Start Date</label>

                        <div class="col-sm-2">
                            <input type="text" class="form-control required"
                                   placeholder="Start Date" name="sdate"
                                   data-toggle="datepicker" autocomplete="false" value="{{$todoedit->task_start_date}}">
                        </div>
                    </div>


                    <div class="form-group row">

                        <label class="col-sm-2 control-label"
                               for="edate">Due Date</label>

                        <div class="col-sm-2">
                            <input type="text" class="form-control required"
                                   placeholder="End Date" name="ddate"
                                   data-toggle="datepicker" autocomplete="false" value="{{$todoedit->task_due_date}}">
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="pay_cat">Assign to</label>
                        <div class="col-sm-4">
                            <select name="employee[]" class="form-control select-box" multiple="multiple">
                            @foreach($customers as $customer)
                                <option value='{{$customer->billing_name}}'>{{$customer->billing_name}}</option>
                                @endforeach  
                             </select>


                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"
                               for="content">Description</label>
                        <div class="col-sm-10">
                        <textarea class="summernote"
                                  placeholder=" Note"
                                  autocomplete="false" rows="10"
                                  name="notes">I</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-4">
                            <input type="submit" class="btn btn-success margin-bottom"
                                   value="Update" data-loading-text="Adding...">
                            <input type="hidden" value="{{$todoedit->id}}" name="id">
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection