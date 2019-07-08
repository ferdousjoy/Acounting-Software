@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
@php
    $list=DB::table('unit_models')->get();
    $no=1;
@endphp
<div class="app-content content">
    <div class="content-wrapper">
         
        <div class="content-header row">
            @include('layouts.inc.success')
        </div>
        @if(session('update'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-primary text-center">{{session('update')}}</div>
                </div>
            </div>
        @endif
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Unit <a
                        href="{{Route('new_subscription')}}"
                        class="btn btn-primary btn-sm rounded">
                    Add new</a></h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
        </div>
        
         <div class="card-body">
                <form method="post" action="{{Route('unit.submit')}}"  enctype="multipart/form-data" style="margin-left:25%">
                @csrf
                   
                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label"for="name">Unit</label>

                    <div class="col-sm-2">
                        <input style="transform: translateX(-88%);" type="text" placeholder="Ex: kg, cm"
                               class="form-control margin-bottom" name="unit_name">
                    </div>
                </div>

               
                 
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit"class="btn btn-success margin-bottom"
                               value="Save" data-loading-text="Adding...">
                    </div>
                </div>
                </form>
            </div>
             <div class="card-body">
                 <table class="table table-bordered" style="width:30%; margin-left:39%">
            <tr>
            <th>SL</th>
            <th>Unit Name</th>
            <th>Action</th>
            </tr>
            <tbody>
                
               @foreach($list as $key)
                <tr>
                    <td style="width:40px;">{{$no++}}</td>
                    <td>{{$key->unit_name}}</td>
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
                          <form action="{{route('update_units')}}" method="post">
                              @csrf
                              <div class="modal-body">
                                <div class="form-group">
                                    <input type="hidden" name="Uid" value="{{$key->id}}">
                                    <label>Unit Name</label>
                                    <input type="text" class="form-control{{ $errors->has('Uname') ? ' is-invalid' : '' }}" name="Uname" value="{{$key->unit_name}}">
                                    
                                    @if ($errors->has('Uname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Uname') }}</strong>
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
            
            
            </tbody>
            
           
           
        </table>
            </div>
    </div>
</div>
</div>
</div>
@endsection