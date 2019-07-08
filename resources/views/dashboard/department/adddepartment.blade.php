@extends('layouts.dashboard')
@section('title','New Add Notes')
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
            <h5>Add New Department</h5>
            <hr>
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


                <form method="post" action="{{Route('add_departments_form')}}" class="form-horizontal">
                    @csrf

                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="name">Department Name</label>

                        <div class="col-sm-10 col-lg-3">
                            <input type="text" placeholder="Add Department Name"
                                   class="form-control margin-bottom  required" name="department">
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"></label>

                        <div class="col-sm-4">
                            <input type="submit" class="btn btn-success margin-bottom"
                                   value="Add Department" data-loading-text="Adding...">
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>

@endsection
