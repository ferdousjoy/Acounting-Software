@extends('layouts.dashboard')
@section('title','Add Account')
@section('content')
@include('layouts.inc.success')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <div class="card card-block">
            <form action="{{Route('add_account_form')}}" class="card-body"  method="post" accept-charset="utf-8">
                @csrf


            <h5> Add New Account</h5>
            <hr>

            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="accno">Account Title</label>

                <div class="col-sm-6">
                    <input type="text" placeholder="Account Number"
                           class="form-control margin-bottom required" name="account_name">
                </div>
            </div>
            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="accno">Account Type</label>

                <div class="col-sm-6">

                           <select class="form-control margin-bottom required" name="account_type">
                             <option> Choose One</option>
                             <option value="1"> Income</option>
                             <option value="2"> Expense</option>
                             <option value="3"> Fixed Asset</option>
                           </select>
                </div>
            </div>
            <div class="form-group row">

                <label class="col-sm-2 col-form-label" for="holder">Account Description</label>

                <div class="col-sm-6">
                    <textarea class="form-conrol" name="description" id="" cols="30" rows="7" style="resize:none"></textarea>
                </div>
            </div>
            <div class="form-group row">

                <label class="col-sm-2 col-form-label"></label>

                <div class="col-sm-4">
                    <input type="submit" class="btn btn-success margin-bottom"
                           value="Add Account" data-loading-text="Adding...">
                </div>
            </div>


            </form>
        </div>

        <div class="card card-block">
            <table class="table table-bordered" style="width:50%; margin:auto">
            <tr>
                <th>SL</th>
                <th> Account Title</th>
                <th> Account Type</th>
                <th> Account Description</th>
                <th> Action</th>
            </tr>
            @foreach($account as $key)
             <tr>
                <td>{{$no++}}</td>
                <td>{{ $key->account_name}}</td>
                <td>{{ $key->account_type}}</td>
                <td>{{ $key->description}}</td>
                  <td class="display:"inline-block">
                    <button type="button" data-toggle="modal" data-target="#edit{{$key->id}}" class="btn  btn-sm btn-info">Edit</button>


                    <!-- Modal -->
                    <div class="modal fade" id="edit{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Unit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="{{route('update_account')}}" method="post">
                              @csrf
                              <div class="modal-body">
                                <div class="form-group">
                                    <input type="hidden" name="Uid" value="{{$key->id}}">
                                    <label>Account Title</label>
                                    <input type="text" class="form-control{{ $errors->has('account_name') ? ' is-invalid' : '' }}" name="account_name" value="{{$key->account_name}}">

                                    @if ($errors->has('account_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('account_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                 <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" class="form-control{{ $errors->has('Uname') ? ' is-invalid' : '' }}" name="description" value="{{$key->description}}">

                                    @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                              </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <a href="{{ route('deleteunit',$key->id)}}" class="btn btn-sm btn-danger">Trash</a>
                 </td>

            </tr>
            @endforeach

            </table>


        </div>

      </div>
    </div>
</div>
</div>

@endsection
