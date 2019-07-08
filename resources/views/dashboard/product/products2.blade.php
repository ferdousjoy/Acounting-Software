@extends('layouts.dashboard')
@section('title','Vendor List')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="success"><span id="dash_0"></span></h3>
                                <span>In Stock</span>
                            </div>
                            <div class="align-self-center">
                                <i class="icon-rocket success font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="danger"><span id="dash_1"></span></h3>
                                <span>Stock out</span>
                            </div>
                            <div class="align-self-center">
                                <i class="icon-eyeglasses danger font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="purple"><span id="dash_2"></span></h3>
                                <span>Total</span>
                            </div>
                            <div class="align-self-center">
                                <i class="icon-pie-chart purple font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="card">
        <div class="card-header">
            <h5>Vendor List <a
                        href="{{Route('add_product')}}"
                        class="btn btn-primary btn-sm rounded">
                    Add new                </a></h5>
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


                <table id="productstable" class="table table-striped table-bordered zero-configuration" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ven as $key)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$key->name}}</td>
                            <td>{{$key->email}}</td>
                            <td>{{$key->phone}}</td>
                            <td>{{$key->address}}</td>
                                 <td>


                            <a href="{{Route('edit_vendor',$key->id)}}" class="btn btn-sm btn-warning btn-xs"><i class="fa fa-pencil"></i>  </a>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    ...
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </div>
                              </div>
                            </div>


                            <a class="btn btn-danger btn-sm delete-object" href="#" data-object-id="1"> <i class="fa fa-trash"></i> </a>
                            <div id="delete_model" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <h4 class="modal-title">Delete Product</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this product?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form method="POST" action="{{Route('delete_purches2',$key->id)}}" >
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
@endsection
