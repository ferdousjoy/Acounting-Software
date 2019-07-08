@extends('layouts.dashboard')
@section('title','Change PassWord')
@section('content')
<!-- Horizontal navigation-->
@include('layouts.inc.success')
<form id="form-change-password" role="form" method="POST" action="{{ url('change/password') }}" novalidate class="form-horizontal" style="width:50%; margin:auto;">
    <div class="col-md-9">
        <label for="current-password" class="col-sm-4 control-label">Current Password</label>
        <div class="col-sm-8">
            <div class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Password">
            </div>
        </div>
        <label for="password" class="col-sm-4 control-label">New Password</label>
        <div class="col-sm-8">
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
        </div>
        <label for="password_confirmation" class="col-sm-4 control-label">Re-enter Password</label>
        <div class="col-sm-8">
            <div class="form-group">
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-enter Password">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-5 col-sm-6">
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>
    </div>
</form>
@endsection
