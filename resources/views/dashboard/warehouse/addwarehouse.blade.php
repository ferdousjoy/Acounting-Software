@extends('layouts.dashboard')
@section('title','Add Warehouse')
@section('content')
<!-- Horizontal navigation-->
@include('layouts.inc.success')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><article class="content">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message">
               
            </div>
        </div>
        <div class="card card-block">
            <form method="post" class="card-body" action="{{Route('warehouse_add_form')}}">
            @csrf
                <h5>Add New Product Warehouse</h5>
                <hr>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"
                           for="product_catname">Name</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Product Warehouse Name"
                               class="form-control margin-bottom  required" name="ware_name">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="product_catname">Description</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Product Warehouse Description"
                               class="form-control margin-bottom required" name="ware_desc">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="pay_cat">Business Locations</label>

                    <div class="col-sm-6">
                        <select name="location" class="form-control">
                            <option value='All'>All</option>
                       </select>


                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit" class="btn btn-success margin-bottom"
                               value="Submit" >
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