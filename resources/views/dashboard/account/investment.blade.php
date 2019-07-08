@extends('layouts.dashboard')
@section('title','Create Investment')
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
            <form action="{{Route('add_invest_form')}}" class="card-body"  method="post" accept-charset="utf-8">
                @csrf                                                                                              


            <h5>Create Investment</h5>
            <hr>

            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="accno">Investor Name</label>

                <div class="col-sm-6">
                    <input type="text" placeholder="Investor Name"
                           class="form-control margin-bottom required" name="name">
                </div>
            </div>
            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="accno">Investment Ammount</label>

                <div class="col-sm-4">
                    <input type="number" placeholder="Investment Ammount"
                           class="form-control margin-bottom required" name="price">
                </div>
                <label class="col-sm-2 col-form-label text-right"
                       for="accno">Rate of Interest</label>

                <div class="col-sm-4">
                    <input type="number" placeholder="Rate will be with % sign"
                           class="form-control margin-bottom required" name="rate">
                </div>
            </div>
            <div class="form-group row">

                <label class="col-sm-2 col-form-label" for="holder">Remarks</label>

                <div class="col-sm-6">
                    <textarea class="form-control" name="remarks" id=""></textarea>
                </div>
            </div>
            <div class="form-group row">

                <label class="col-sm-2 col-form-label"></label>

                <div class="col-sm-4">
                    <input type="submit" class="btn btn-success margin-bottom"
                           value="Add Investment" data-loading-text="Adding...">
                </div>
            </div>


            </form>
        </div>
          <div class="card card-block">
            <table class="table table-bordered" style="width:50%; margin:auto">
            <tr>
                <th>SL</th>
                <th>Invest Name</th>
                <th>Price</th>
                <th>Depreciation Rate</th>
                <th>Remarks</th>
                <th> Action</th>
            </tr>
            @foreach($invest as $key)
             <tr>
                <td>{{$no++}}</td>
                <td>{{$key->name}}</td>
                <td>{{$key->price}} tk</td> 
                <td>{{$key->rate}} %</td>
                 <td>{{$key->remarks}}</td>
                  <td class="display:"inline-block">
                    <button type="button" data-toggle="modal" data-target="#edit{{$key->id}}" class="btn  btn-sm btn-info">Edit</button>
                    
                    
                    <!-- Modal -->
                    <div class="modal fade" id="edit{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Update Invest Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="{{route('update_invest')}}" method="post">
                              @csrf
                              <div class="modal-body">
                                <div class="form-group">
                                    <input type="hidden" name="Uid" value="{{$key->id}}">
                                    <label>invest Name</label>
                                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$key->name}}">
                                    
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                 <div class="form-group"> 
                                    <label>Price</label>
                                    <input type="text" class="form-control{{ $errors->has('Uname') ? ' is-invalid' : '' }}" name="price" value="{{$key->price}}">
                                    
                                    @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                 <div class="form-group"> 
                                    <label>Rate</label>
                                    <input type="text" class="form-control{{ $errors->has('Uname') ? ' is-invalid' : '' }}" name="rate" value="{{$key->rate}}">
                                    
                                    @if ($errors->has('rate'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rate') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                 <div class="form-group"> 
                                    <label>Remark</label>
                                    <input type="text" class="form-control{{ $errors->has('Uname') ? ' is-invalid' : '' }}" name="remarks" value="{{$key->remarks}}">
                                    
                                    @if ($errors->has('remarks'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('remarks') }}</strong>
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
                    <a href="{{ route('deleteasset',$key->id)}}" class="btn btn-sm btn-danger">Trash</a>
                 </td>
                  
                
            </tr>
            @endforeach
           
            </table>
            
            
        </div>
    </div></div>
</div>
</div>

@endsection