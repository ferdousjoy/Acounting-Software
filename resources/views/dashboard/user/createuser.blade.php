@extends('layouts.dashboard')
@section('title','Create User')
@section('content')

<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            @include('layouts.inc.success')
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h3 class="w-100 text-center">Create New User</h3>
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
                <form method="post" action="{{Route('adduser')}}"  enctype="multipart/form-data">
                @csrf
                 <div class="form-group row">
                    <label class="col-sm-2 offset-sm-2 col-form-label text-right"  style="font-size:18px" for="name">User Name</label>

                    <div class="col-sm-6 col-lg-4">
                        <input type="text" placeholder="User Name"
                               class="form-control margin-bottom required" name="name">
                    </div>
                </div>
                <div class="form-group row">
                   <label class="col-sm-2 offset-sm-2 col-form-label text-right"  style="font-size:18px" for="name">Full Name</label>

                   <div class="col-sm-6 col-lg-4">
                       <input type="text" placeholder="Full Name"
                              class="form-control margin-bottom required" name="full_name">
                   </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-2 offset-sm-2 col-form-label text-right"  style="font-size:18px" for="name">Phone Number</label>

                  <div class="col-sm-6 col-lg-4">
                      <input type="text" placeholder="phone number"
                             class="form-control margin-bottom required" name="phone">
                  </div>
              </div>
                <div class="form-group row">

                   <label class="col-sm-2 offset-sm-2 col-form-label text-right"  style="font-size:18px" for="name">Email</label>

                   <div class="col-sm-6 col-lg-4">
                       <input type="text" placeholder="User eamil"
                              class="form-control margin-bottom required" name="email">
                   </div>
               </div>
               <div class="form-group row">

                  <label class="col-sm-2 offset-sm-2 col-form-label text-right"  style="font-size:18px" for="name">User Role</label>

                  <div class="col-sm-6 col-lg-4">
                             <select class="form-control margin-bottom required" name="user_role">
                               <option>--Choose one--</option>
                               <option value="1">admin</option>
                               <option value="2">maneger</option>

                               
                             </select>
                  </div>
              </div>
              <div class="form-group row">

                 <label class="col-sm-2 offset-sm-2 col-form-label text-right"  style="font-size:18px" for="name">Password</label>

                 <div class="col-sm-6 col-lg-4">
                     <input type="password" placeholder="Enter Password"
                            class="form-control margin-bottom required" name="password">
                 </div>
             </div>
             <div class="form-group row">

                <label class="col-sm-2 offset-sm-2 col-form-label text-right"  style="font-size:18px" for="name">User Image</label>

                <div class="col-sm-6 col-lg-4">
                    <input type="file" placeholder="Enter Password"
                           class="form-control margin-bottom required" name="user_image">
                </div>
            </div>






                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4" style="padding-left: 18%;">
                        <input type="submit"class="btn btn-success margin-bottom"
                               value="Save" data-loading-text="Adding...">
                    </div>
                </div>

                </form>
            </div>
        </div>
</div>
</div>
</div>
@endsection
