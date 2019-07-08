@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5>Import Products</h5>
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


                <form action=" import/products_upload" enctype="multipart/form-data" method="post" accept-charset="utf-8">
<input type="hidden" name="g_ea0d" value="492717f74d74cf5437a35dd697ec35fc" />                       
<input type="hidden"
                                                                                   name="g_ea0d"
                                                                                   value="492717f74d74cf5437a35dd697ec35fc">


                <hr>
                <p>Your products data file should as per this template <a
                            href="http://www.ultimatekode.com/samples/products_import.csv"><strong>Download
                            Template</strong></a>. Please download a database backup before importing the
                    geopos_products.
                </p>
                <p>Column Order in CSV File Must be like this</p>
                <pre>
     1. (string)Product A, 2. (string)ProductCODE, 3.(number)Sales_Price, 4.(number)Factory_Price,

     5.(number)TAX_Rate, 6.(number)Discount_Rate, 7.(integer)Quantity,

     8.(string)Product_Description, 9.(integer)Low_Stock_Alert_Quantity
</pre>

                <hr>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="name">File
                    </label>

                    <div class="col-sm-6">
                        <input type="file" name="userfile" size="15"/>(csv format only)
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="product_cat">Product Category</label>

                    <div class="col-sm-6">
                        <select name="product_cat" class="form-control">
                            <option value='13'>جوال</option><option value='12'>Shoes</option><option value='11'>Home</option><option value='10'>Automotive</option><option value='9'>Tools</option><option value='8'>Music</option><option value='7'>Home</option><option value='6'>Automotive</option><option value='5'>Toys</option><option value='4'>Home</option><option value='3'>Computers</option><option value='2'>Health</option><option value='1'>General</option>                        </select>


                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="product_cat">Warehouse</label>

                    <div class="col-sm-6">
                        <select name="product_warehouse" class="form-control">
                            <option value='11'>USA</option><option value='10'>UK</option><option value='9'>USA</option><option value='8'>Guatemala</option><option value='7'>Japan</option><option value='6'>Bulgaria</option><option value='5'>Albania</option><option value='4'>Croatia</option><option value='3'>China</option><option value='2'>France</option><option value='1'>Main WareHouse</option>                        </select>


                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit" class="btn btn-success margin-bottom"
                               value="Import Products" data-loading-text="Adding...">

                    </div>
                </div>


                </form>
            </div>
        </div>

</div>
</div>
</div>
@endsection