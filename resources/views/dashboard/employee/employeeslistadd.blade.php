@extends('layouts.dashboard')
@section('title','Employee Add')
@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<!-- Horizontal navigation-->
@if(Auth::User()->user_role == 1)
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
                <form method="post" action="{{Route('add_employees_list_form')}}" class="card-body" style="width:50%;margin:auto">
                    @csrf

                    <h5> Add Employee</h5>
                    <hr>
                    <div class="form-group row">

                        <label class="col-sm-6 col-form-label"
                               for="name">User Name
                        </label>

                        <div class="col-sm-10">
                            <input type="text"
                                   class="form-control margin-bottom required" name="username"
                                   placeholder="username">
                        </div>
                    </div>

                    <div class="form-group row">

                        <label class="col-sm-6 col-form-label" for="email">Email</label>

                        <div class="col-sm-10">
                            <input type="email" placeholder="email"
                                   class="form-control margin-bottom required" name="email"
                                   placeholder="email">
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-6 col-form-label"
                               for="password">Password
                        </label>

                        <div class="col-sm-10">
                            <input type="text" placeholder="Password"
                                   class="form-control margin-bottom required" name="password"
                                   placeholder="password">
                        </div>
                    </div>
                                            <div class="form-group row">

                            <label class="col-sm-2 col-form-label"
                                   for="name">User Role</label>

                            <div class="col-sm-5">
                                <select name="user_role" class="form-control margin-bottom">
                                  <option>--Choose One--</option>
                                    @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->Role_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="name">Business Location</label>

                        <div class="col-sm-5">
                            <select name="location" class="form-control margin-bottom">
                                <option value="0">Default</option>
                                                            </select>
                        </div>
                    </div>

                    <hr>

                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="name">Name</label>

                        <div class="col-sm-10">
                            <input type="text" placeholder="Name"
                                   class="form-control margin-bottom required" name="name"
                                   placeholder="Full name">
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="address"> Address</label>

                        <div class="col-sm-10">
                            <input type="text" placeholder="address"
                                   class="form-control margin-bottom" name="address">
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="city">City</label>

                        <div class="col-sm-10">
                            <input type="text" placeholder="City"
                                   class="form-control margin-bottom" name="city">
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="city">Region</label>

                        <div class="col-sm-10">
                            <input type="text" placeholder="Region"
                                   class="form-control margin-bottom" name="region">
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="country">Country</label>

                        <div class="col-sm-10">
                            <input type="text" placeholder="Country"
                                   class="form-control margin-bottom" name="country">
                        </div>
                    </div>

                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="postbox">Postbox</label>

                        <div class="col-sm-10">
                            <input type="text" placeholder="Postbox"
                                   class="form-control margin-bottom" name="postbox">
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="phone"> Phone</label>

                        <div class="col-sm-10">
                            <input type="text" placeholder="phone"
                                   class="form-control margin-bottom" name="phone">
                        </div>
                    </div>

                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="phone">Joining Date</label>

                        <div class="col-sm-10">
                            <input type="text" placeholder="Pick Date" id="datepicker"
                                   class="form-control margin-bottom" name="joiningdate">
                        </div>
                    </div>



                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="phone">Salary</label>

                        <div class="col-sm-5">
                            <input type="text" placeholder="Salary" onkeypress="return isNumber(event)"
                                   class="form-control margin-bottom" name="salary"
                                   value="0">
                        </div>
                    </div>

                    <div class="form-group row">

                        <label class="col-sm-3 col-form-label"
                               for="city">Sales Commission                            %</label>

                        <div class="col-sm-2">
                            <input type="number" placeholder="Commission %" value="0"
                                   class="form-control margin-bottom" name="commission">
                        </div>
                        <small class="col">It will based on each invoice amount - inclusive all
                            taxes,shipping,discounts
                        </small>

                    </div>
                                      <div class="form-group row">

                                <label class="col-sm-2 col-form-label"
                                       for="name">Department</label>

                                <div class="col-sm-5">
                                    <select name="department" class="form-control margin-bottom">
                                      <option>--Choose One--</option>
                                        @foreach($dept as $role)
                                        <option value="{{$role->department_name}}">{{$role->department_name}}</option>
                                        @endforeach
                                    </select>
                                    </select>
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
    @else
    <div class="col">
      <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
               <span aria-hidden="true">&times;</span>
        </button>
         <strong>You have no permission for view this page</strong>
    </div>
    </div>
@endif
@endsection
@section('footer_scripts')
<script>
$( function() {
  $( "#datepicker" ).datepicker();
} );
</script>
@endsection
