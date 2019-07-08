@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
@include('layouts.inc.success')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <i class="fa fa-clock-o primary font-large-2 float-left"></i>
                            </div>
                            <div class="media-body text-right">
                                <h3 class="pink" id="dash_0"></h3>
                                <span>Waiting</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <i class="fa fa-exchange warning font-large-2 float-left"></i>
                            </div>
                            <div class="media-body text-right">
                                <h3 class="indigo" id="dash_1"></h3>
                                <span>Progress</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <i class="fa fa-flag-checkered success font-large-2 float-left"></i>
                            </div>
                            <div class="media-body text-right">
                                <h3 class="green" id="dash_2"></h3>
                                <span>Finished</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <i class="fa fa-dot-circle-o danger font-large-2 float-left"></i>
                            </div>
                            <div class="media-body text-right">
                                <h3 class="deep-cyan" id="dash_6">1</h3>
                                <span>Total</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="title">
                Projects <a href="{{Route('add_project')}}"   class="btn btn-primary btn-sm rounded"> Add new </a>
            </h3>
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

                <table id="ptable" class="table table-striped table-bordered zero-configuration" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Project</th>
                        <th>Due Date</th>
                        <th>Customer</th>
                        <th>Status</th>

                        <th>Actions</th>


                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1; @endphp
                    @foreach($projects as $project)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$project->project_title}}</td>
                            <td>{{$project->project_due_date}}</td>
                            <td>{{$project->project_customer}}</td>
                            <td>{{$project->project_status}}</td>
                            <td>
                            <a href="{{Route('edit_project',$project->id)}}" class="btn btn-sm btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                         <a class="btn btn-danger btn-sm delete-object" href="#" data-object-id="1"> <i class="fa fa-trash"></i> </a>
                         <div id="delete_model" class="modal fade {{$project->id}}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h4 class="modal-title">Delete Customer</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this customer?</p>
                                </div>
                                <div class="modal-footer">
                                <form method="POST" action="{{Route('delete_project',$project->id)}}">
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
                        @php $i++; @endphp
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
   </div>
</div>
</div>
@endsection