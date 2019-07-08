@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
@include('layouts.inc.success')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5>Add Project</h5>
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

                <form method="post" class="form-horizontal" action="{{Route('add_project_form')}}">
                @csrf
                    <div class="form-group row bg-purple bg-lighten-4 ">
                        <div class="col-md-10"><label class="col col-form-label"for="name">Title</label>
                            <input type="text" placeholder="Project Title" class="form-control mb-1 required" name="title">
                        </div>
                    </div>
                    <div class="form-group row">
                       <div class="col-md-4 bg-blue bg-lighten-4 rounded"><label class="col col-form-label" for="name">Status</label>
                            <select name="status" class="form-control mb-1">
                                <option value='Waiting'>Waiting</option>
                                <option value='Pending'>Pending</option>
                                <option value='Terminated'>Terminated</option>
                                <option value='Finished'>Finished</option>
                                <option value='Progress'>Progress</option>                           
                            </select>
                        </div>


                        <div class="col-md-4 border-blue-grey rounded"><label class="col col-form-label" for="progress">Progress     (in %)</label>
                            <input type="range" min="0" max="100" value="0" class="slider" id="progress" name="progress">
                            <p><span id="prog"></span></p>
                        </div>
                        <div class="col-md-4 bg-blue bg-lighten-4 rounded"><label class="col col-form-label" for="pay_cat">Priority</label>
                            <select name="priority" class="form-control mb-1">
                                <option value='Low'>Low</option>
                                <option value='Medium'>Medium</option>
                                <option value='High'>High</option>
                                <option value='Urgent'>Urgent</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 border-blue-grey rounded"><label class="col col-form-label" for="customer">Customer</label>
                        <input type="text" placeholder="Customer" class="form-control mb-1  required" name="projectcustomer">
                        </div>
                        <div class="col-md-4  rounded bg-blue bg-lighten-4"><label class="col col-form-label"  for="name">Customer Can View</label>
                            <select name="customerview" class="form-control mb-1">
                                <option value='true'>True</option>
                                <option value='false'>False</option>
                            </select>
                        </div>
                        <div class="col-md-4 border-blue rounded">
                            <label class="col col-form-label" for="name">Customer Can Comment</label>
                            <select name="customercomment" class="form-control mb-1">
                                <option value='true'>True</option>
                                <option value='false'>False</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 rounded bg-blue bg-lighten-4"><label class="col col-form-label" for="worth">Budget</label>
                            <input type="number" placeholder="Budget" class="form-control mb-1  required" name="budget" value="0">
                        </div>
                        <div class="col-md-4 border-blue rounded"><label class="control-label" for="edate">Start Date</label>
                            <input type="date" class="form-control  required" name="sdate" data-toggle="datepicker" autocomplete="false">
                        </div>
                        <div class="col-md-4 rounded bg-blue bg-lighten-4"><label class="control-label"  for="ddate">Due Date</label>
                            <input type="date" id="pdate_2" class="form-control  required"  name="ddate"  autocomplete="false">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 rounded bg-grey-blue bg-lighten-4"><label class="col col-form-label"  for="employee">Assign to</label>
                            <select name="employee[]" class="form-control mb-1 required select-box" multiple="multiple">
                                @foreach($customers as $customer)
                                <option value='{{$customer->billing_name}}'>{{$customer->billing_name}}</option>
                                @endforeach   
                             </select>
                        </div>
                        <div class="col-md-4   border-blue rounded "><label class="col-form-label"  for="phase">Phase</label>
                            <input type="text" placeholder="Phase A,B,C"  class="form-control mb-1  required" name="phase">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 border-blue rounded"><label class="col col-form-label" for="name">Link to calendar</label>
                            <select name="link_to_cal" class="form-control mb-1" id="link_to_cal">
                                <option value='0'>No</option>
                                <option value='1'>Mark Deadline(End Date)</option>
                                <option value='2'>Mark Start to End Date</option>
                            </select>
                        </div>
                        <div class="col-md-8 rounded bg-blue bg-lighten-4"><label class="col col-form-label"  for="tags">Tags</label>
                            <input type="text" placeholder="Tags"  class="form-control margin-bottom  required" name="tags">
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
                                  placeholder=" Note" autocomplete="false" rows="10" name="notes"></textarea>
                        </div>
                    </div>


                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="name">Task Communication</label>

                        <div class="col-sm-4">
                            <select name="ptype" class="form-control">
                                <option value='0'>No</option>
                                <option value='1'>Emails to team</option>
                                <option value='2'>Emails to team, customer</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"></label>

                        <div class="col-sm-4">
                            <input type="submit"  class="btn btn-success margin-bottom" value="Add Project" >

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