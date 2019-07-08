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
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <input style="transform: translateX(-88%);" type="text" placeholder="Ex: kg, cm"
                               class="form-control margin-bottom" name="unit_name" value="{{ $product->unit_name}}">
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
           
    </div>
</div>
</div>
</div>
@endsection