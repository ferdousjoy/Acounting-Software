 @extends('layouts.dashboard')
@section('title','Invoice List')
@section('content')
<!-- Horizontal navigation-->
@include('layouts.inc.success')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5 class="title">
                Invoice  List <a href="{{Route('new_invoice')}}"
                                                            class="btn btn-primary btn-sm rounded">
                    Add new                </a>
            </h5>
            <hr>
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


                <table id="notestable" class="table table-striped table-bordered zero-configuration" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th> Action</th>


                    </tr>
                    </thead>
                    <tbody>

    @foreach($quotes as $key)
    <tr>
        <td>{{$no++}}</td>
        <td>{{$key->product}}</td>
        <td>{{$key->description}}</td>
        <td>{{$key->quantity}}</td>
        <td>{{$key->quantity}}</td>


        <td>

        <a href="{{Route('view_invoice',$key->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> </a>
     <a href="{{Route('quotelist',$key->id)}}" class="btn btn-sm btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
     <a class="btn btn-danger btn-sm" href="{{Route('delete_pos_invoices2',$key->id)}}"> <i class="fa fa-trash"></i> </a>
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
</div>
</div>
@endsection
