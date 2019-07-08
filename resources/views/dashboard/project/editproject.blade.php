@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
<div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message">
            @include('layouts.inc.success')
            </div>
        </div>
        <div class="card-body">


            <form method="post" id="data_form" class="form-horizontal" action="{{Route('edit_project_form')}}"> 
                @csrf
                @method('put')
                <h5>Edit Project</h5>
                <hr>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="name">Title*</label>

                    <div class="col-sm-10">
                        <input type="text" placeholder="{{$projectedit->project_title}}" class="form-control margin-bottom  required" name="title" value="{{$projectedit->project_title}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="name">Status</label>
                    <div class="col-sm-4">
                        <select name="status" class="form-control">
                            <option value="Progress">** Progress **</option> 
                            <option value='Waiting'>Waiting</option>
                            <option value='Pending'>Pending</option>
                            <option value='Terminated'>Terminated</option>
                            <option value='Finished'>Finished</option>
                            <option value='Progress'>Progress</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="progress">Progress    (in %)</label>
                    <div class="col-sm-10">
                        <input type="range" min="0" max="100" value="{{$projectedit->project_progress}}" class="slider" id="progress" name="progress">
                        <p><span id="prog"></span></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"
                           for="pay_cat">Priority</label>

                    <div class="col-sm-4">
                        <select name="priority" class="form-control">
                            <option value="High">** High **</option>                           
                             <option value='Low'>Low</option>
                            <option value='Medium'>Medium</option>
                            <option value='High'>High</option>
                            <option value='Urgent'>Urgent</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"
                           for="pay_cat">Customer</label>
                    <div class="col-sm-10">
                    <input type="text" placeholder="{{$projectedit->project_customer}}"  class="form-control margin-bottom  required" name="customer"
                               value="{{$projectedit->project_customer}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="name">Customer Can View</label>
                    <div class="col-sm-4">
                        <select name="customerview" class="form-control">
                            <option value="true">** true **</option>                     
                            <option value='true'>True</option>
                            <option value='false'>False</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="name">Customer Can Comment</label>
                    <div class="col-sm-4">
                        <select name="customercomment" class="form-control">
                            <option value="true">** true **</option>                      
                           <option value='true'>True</option>
                            <option value='false'>False</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="worth">Budget*</label>

                    <div class="col-sm-4">
                        <input type="text" placeholder="Budget" onkeypress="return isNumber(event)" class="form-control margin-bottom  required" name="budget"
                               value="{{$projectedit->project_budget}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="phase">Phase*</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="Phase A,B,C"
                               class="form-control margin-bottom required" name="phase"
                               value="{{$projectedit->project_phase}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label"  for="edate">Start Date</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control edate"
                               placeholder="Start Date" name="sdate"
                               autocomplete="false" value="{{$projectedit->project_start_date}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label"
                           for="edate">Due Date</label>

                    <div class="col-sm-2">
                        <input type="text" class="form-control edate"
                               placeholder="End Date" name="ddate"
                               autocomplete="false" value="{{$projectedit->project_due_date}}">
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="name">Link to calendar</label>

                    <div class="col-sm-4">
                        <select name="link_to_cal" class="form-control" id="link_to_cal">
                            <option value='0'>No</option>
                            <option value='1'>Mark Deadline(End Date)</option>
                            <option value='2'>Mark Start to End Date</option>
                        </select>
                    </div>
                </div>

                <div id="hidden_div" class="row form-group" style="display: none">
                    <label class="col-md-2 control-label" for="color">Color</label>
                    <div class="col-md-4">
                        <input id="color" name="color" type="text" class="form-control input-md"
                               readonly="readonly"/>
                        <span class="help-block">Click to pick a color</span>
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 control-label"
                           for="content">Note</label>

                    <div class="col-sm-10">
                        <textarea class="summernote"
                                  placeholder="{{$projectedit->project_notes}}"
                                  autocomplete="false" rows="10"
                                  name="notes"><p>fghr tgh</p></textarea>
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="tags">Tags</label>

                    <div class="col-sm-10">
                        <input type="text" placeholder="Tags"
                               class="form-control margin-bottom  required" name="tags"
                               value="{{$projectedit->project_tags}}">
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="name">Task Communication</label>

                    <div class="col-sm-4">
                        <select name="ptype" class="form-control">
                            <option value='2' selected>Don't Change</option>
                            <option value='0'>No</option>
                            <option value='1'>Emails to team</option>
                            <option value='2'>Emails to team & customer</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="pay_cat">Assign to</label>

                    <div class="col-sm-8">
                        <select name="employee[]" class="form-control select-box" multiple="multiple">
                        @foreach($customers as $customer)
                            <option value="{{$customer->billing_name}}">{{$customer->billing_name}}</option>
                            @endforeach
                        </select>


                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit"  class="btn btn-success margin-bottom" value="Update" data-loading-text="Updating...">
                        <input type="hidden" value="{{$projectedit->id}}" name="p_id">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>

@endsection