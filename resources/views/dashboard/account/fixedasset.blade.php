 @extends('layouts.dashboard')
@section('title','Add New Asset')
@section('content')
@include('layouts.inc.success') 
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">;
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <div class="card card-block">
            <form action="{{Route('add_asset_form')}}" class="card-body"  method="post" accept-charset="utf-8">
                @csrf                                                                                              


            <h5> Add NewvAsset</h5>
            <hr>

            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="accno">Asset</label>

                <div class="col-sm-6">
                    <input type="text" placeholder="Asset Name"
                           class="form-control margin-bottom required" name="asset_name">
                </div>
            </div>
            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="accno">Price</label>

                <div class="col-sm-4">
                    <input type="text" placeholder="Price"
                           class="form-control margin-bottom required" name="price">
                </div>
                <label class="col-sm-2 col-form-label text-right"
                       for="accno">Depreciation Rate</label>

                <div class="col-sm-4">
                    <input type="text"
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
                           value="Add Asset" data-loading-text="Adding...">
                </div>
            </div>


            </form>
        </div>
           <div class="card card-block">
            <table class="table table-bordered" style="width:50%; margin:auto">
            <tr>
                <th>SL</th>
                <th>Asset Name</th>
                <th>Price</th>
                <th>Depreciation Rate</th>
                <th>Remarks</th>
                <th> Action</th>
            </tr>
            @foreach($asset as $key)
             <tr>
                <td>{{$no++}}</td>
                <td>{{$key->asset_name}}</td>
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
                            <h5 class="modal-title" id="exampleModalCenterTitle">Update Asset Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="{{route('update_asset')}}" method="post">
                              @csrf
                              <div class="modal-body">
                                <div class="form-group">
                                    <input type="hidden" name="Uid" value="{{$key->id}}">
                                    <label>Asset Name</label>
                                    <input type="text" class="form-control{{ $errors->has('account_name') ? ' is-invalid' : '' }}" name="asset_name" value="{{$key->asset_name}}">
                                    
                                    @if ($errors->has('account_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('account_name') }}</strong>
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