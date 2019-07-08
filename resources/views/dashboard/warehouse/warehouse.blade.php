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
            <h5 class="title"> Warehouses <a
                        href="{{Route('warehouse_add')}}"
                        class="btn btn-primary btn-sm rounded">
                    Add new                </a>
            </h5>
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


                <table id="catgtable" class="table table-striped table-bordered zero-configuration">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Stock Quantity</th>
                        <th>Worth (Sales/Stock)</th>
                        <th> Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($warehouses as $warehouse)
                        <tr>
                        <td>{{$no++}}</td>
                            <td>{{$warehouse->name}}</td>
                            <td>{{$totalproduct->sum('product_stock_units')}}</td>
                            <td>{{$totalproduct->sum('product_retail_price')}}</td>
                            <td>
                         <a class="btn btn-danger btn-sm delete-object" href="#" data-object-id="1"> <i class="fa fa-trash"></i> </a>
                         <div id="delete_model" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete Product</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete this product?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <form method="POST" action="{{Route('delete_warehouse',$warehouse->id)}}">
                                                @csrf
                                                @method('delete')
                                            <button type="submit"  class="btn btn-danger "><i class='fa fa-trash'></i>Delete</button>
                                            <button type="button" data-dismiss="modal" class="btn">Cancel</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </td>
                        </tr>
                    @endforeach
                   </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection