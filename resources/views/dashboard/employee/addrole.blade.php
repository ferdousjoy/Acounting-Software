@extends('layouts.dashboard')
@section('title','Role Add')
@section('content')


@include('layouts.inc.success')
<div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">

            <div class="card card-block bg-white">
                <div id="notify" class="alert alert-success" style="display:none;">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>

                    <div class="message"></div>
                </div>
                <form method="post" action="{{Route('add_role')}}" class="card-body" style="width:50%;margin:auto">
                    @csrf

                    <h5> Add Role</h5>
                    <hr>
                    <div class="form-group row">

                        <label class="col-sm-3 col-lg-2 col-form-label"
                               for="name">Role Name
                        </label>

                        <div class="col-sm-10 col-lg-3">
                            <input type="text"
                                   class="form-control margin-bottom required" name="Role_name"
                                   placeholder="Add Role">
                        </div>
                    </div>


                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"></label>

                        <div class="col-sm-4">
                            <input type="submit" class="btn btn-success margin-bottom"
                                   value="Add"
                                   data-loading-text="Adding...">
                        </div>
                    </div>


                </form>
            </div>

    </div>

@endsection
