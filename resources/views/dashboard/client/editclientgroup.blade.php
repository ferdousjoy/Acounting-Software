@extends('layouts.dashboard')
@section('content')
@include('layouts.inc.success')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5>Edit Customer Group</h5>
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
                <form method="post"  class="form-horizontal" action="{{Route('edit_groupr_form')}}">
                    @csrf
                    @method('put')
                    <input type="hidden" name="gid" value="1">


                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="group_name">Group Name</label>

                        <div class="col-sm-8">
                            <input type="text" placeholder=" Name"
                                   class="form-control margin-bottom  required" name="group_name"
                                   value="{{$groups->group_name}}">
                        </div>
                    </div>


                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label">Description</label>

                        <div class="col-sm-8">


                            <input type="text" name="group_desc" class="form-control required"
                                   placeholder="0.00" aria-describedby="sizing-addon1"
                                   value="{{$groups->group_description}}p">

                        </div>

                    </div>


                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"></label>

                        <div class="col-sm-4">
                            <input type="submit" class="btn btn-success margin-bottom"
                                   value="Update" data-loading-text="Updating...">
                            <input type="hidden" value="{{$groups->id}}" name="id">
                        </div>
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