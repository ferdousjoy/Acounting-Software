@extends('layouts.dashboard')
@section('title','Add Client Group ')
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
            <h5>Add New Client Group</h5>
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


                <form method="post" class="form-horizontal" action="{{Route('add_client_group_form')}}">
                    @csrf

                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="group_name">Group Name</label>

                        <div class="col-sm-6">
                            <input type="text" placeholder="Client Group Name" class="form-control margin-bottom  required" name="group_name">
                            @if ($errors->has('group_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('group_name') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="group_desc">Description</label>

                        <div class="col-sm-6">
                            <input type="text" placeholder="Client Group Description" class="form-control margin-bottom required" name="group_desc">
                            @if ($errors->has('group_desc'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('group_desc') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"></label>

                        <div class="col-sm-4">
                            <input type="submit" class="btn btn-success margin-bottom"
                                   value="Add Group" data-loading-text="Adding...">
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