@extends('layouts.dashboard')
@section('title','Product Category Form')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        @include('layouts.inc.success')
        </div>
        <div class="content-body"><article class="content-body">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <div class="card-body">


            <form method="post" action="{{Route('edit_product_category_form')}}" class="form-horizontal">
                @csrf
                @method('put')
                <h5>Edit Product Category</h5>
                <hr>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="product_catname">Category Name</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Product Category Name"
                               class="form-control margin-bottom  required" name="product_catname" value="{{$EditProductCategory->category_name}}">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="product_catname">Description</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Product Category Short Description"
                               class="form-control margin-bottom required" name="product_catdesc" value="{{$EditProductCategory->category_description}}">
                    </div>
                </div>
                 <input type="hidden" value="0" name="cat_type">
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit" class="btn btn-success margin-bottom"
                               value="Add Category" data-loading-text="Adding...">
                        <input type="hidden" value="{{$EditProductCategory->id}}" name="id"   >
                    </div>
                </div>

            </form>
        </div>
    </div>
</article>

</div>
</div>
</div>
@endsection