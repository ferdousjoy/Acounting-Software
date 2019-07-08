@extends('layouts.dashboard')
@section('title','Invoice Create')
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
            <h5 class="title">Challan <a href="{{Route('challans.create')}}" class="btn btn-primary btn-sm rounded">Add new</a></h5>
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
                        <th>Status</th>
                        <th>Date</th>
                        <th>Customer Name</th>
                        <th>Customer Shiping</th>
                        <th>Challan Number</th>
                        <th>Track Number</th>
                        <th>Amount</th>
                        <th> Action</th>


                    </tr>
                    </thead>
                    <tbody>
                        @foreach($challans as $challan)

                        <tr>
                            <td>

                              @php
                              $mytime = Carbon\Carbon::now();
                               $onlydate = $mytime->toDateString();
                               $loll=$challan->date;
                              @endphp
                              @if ( $onlydate < $loll) <span class="btns-sm btn-info" style="padding:10px;border-radius:4px;">Due</span>
                               @else<span class="btn-sm btn-danger" style="padding:10px;border-radius:4px;">Expired</span>
                                @endif



                            </td>
                            <td>{{$challan->date}}</td>
                            <td>{{$challan->cusinfo->customer}}</td>
                            <td>{{$challan->shipping_address}}</td>
                            <td>{{$challan->chalan_number}}</td>
                            <td>{{$challan->track_number}}</td>
                            <td>{{$challan->total}}</td>
                            <td>

                         <a href="{{Route('edit_invoice',$challan->id)}}" class="btn btn-sm btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
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
                                    <form method="POST" action="{{Route('delete_invoice',$challan->id)}}">
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

                </table>

            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
@endsection
