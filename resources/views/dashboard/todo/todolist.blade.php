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
                            <div class="media-body text-left">
                                <h3 class="danger" id="dash_0"></h3>
                                <span>Due</span>
                            </div>
                            <div class="align-self-center">
                                <i class="fa fa-clock-o danger font-large-2 float-right"></i>
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
                            <div class="media-body text-left">
                                <h3 class="blue" id="dash_1"></h3>
                                <span>Progress</span>
                            </div>
                            <div class="align-self-center">
                                <i class="fa fa-refresh blue font-large-2 float-right"></i>
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
                            <div class="media-body text-left">
                                <h3 class="success" id="dash_2"></h3>
                                <span>Done</span>
                            </div>
                            <div class="align-self-center">
                                <i class="fa fa-flag-checkered success font-large-2 float-right"></i>
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
                            <div class="media-body text-left">
                                <h3 class="purple" id="dash_6">12</h3>
                                <span>Total</span>
                            </div>
                            <div class="align-self-center">
                                <i class="icon-support purple font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">

        <div class="card-header">
            <h3>Task <a href="{{Route('add_to_do')}}"  class="btn btn-primary btn-sm rounded"> Add new </a></h3>

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
            <table id="todotable" class="table table-striped table-bordered zero-configuration">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Task</th>
                    <th>Due Date</th>
                    <th>Start</th>
                    <th>Actions</th>


                </tr>
                </thead>
                <tbody>
                    @foreach($todolists as $todolist)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$todolist->task_title}}</td>
                        <td>{{$todolist->task_start_date}}</td>
                        <td>{{$todolist->task_status}}</td>
                        <td>
                         <a href="{{Route('edit_to_do',$todolist->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                         <a class="btn btn-danger btn-sm delete-object" href="#" data-object-id="1"> <i class="fa fa-trash"></i> </a>
                         <div id="delete_model" class="modal fade {{$todolist->id}}">
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
                                <form method="POST" action="{{Route('delete_to_do',$todolist->id)}}">
                                        @csrf
                                        @method('delete')
                                    <button type="submit"  class="btn btn-danger "><i class='fa fa-trash'></i> Delete </button>
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
    <input type="hidden" id="dashurl" value="tools/task_stats">
</div>

<div id="delete_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Delete</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this task </p>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="object-id" value="">
                <input type="hidden" id="action-url" value="tools/delete_i">
                <button type="button" data-dismiss="modal" class="btn btn-primary"
                        id="delete-confirm">Delete</button>
                <button type="button" data-dismiss="modal"
                        class="btn">Cancel</button>
            </div>
        </div>
    </div>
</div>
<div id="pop_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Change Status</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <div class="modal-body">
                <form id="form_model">


                    <div class="row">
                        <div class="col mb-1"><label
                                    for="status">Change Status</label>
                            <select name="stat" class="form-control mb-1">
                                <option value="Due">Due</option>
                                <option value="Progress">Progress</option>
                                <option value="Done">Done</option>
                            </select>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" class="form-control"
                               name="tid" id="taskid" value="">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal"> Close</button>
                        <input type="hidden" id="action-url" value="tools/set_task">
                        <button type="button" class="btn btn-primary"
                                id="submit_model">Change Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="task_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="task_title">Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <div class="modal-body">
                <form id="form_model">


                    <div class="row">
                        <div class="col mb-1" id="description">

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col mb-1">Priority <strong><span
                                        id="priority"></span></strong>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-1">Assigned to <strong><span
                                        id="employee"></span></strong>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-1">Assigned by <strong><span
                                        id="assign"></span></strong>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" class="form-control required"
                               name="tid" id="taskid" value="">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal"> Close</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    $(document).ready(function () {

        $('#todotable').DataTable({
            "processing": true,
            "serverSide": true,
            "stateSave": true,
            responsive: true,
            "ajax": {
                "url": " tools/todo_load_list",
                "type": "POST",
                'data': {'g_ea0d': crsf_hash}
            },
            "columnDefs": [
                {
                    "targets": [0],
                    "orderable": true,
                },
            ],dom: 'Blfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        footer: true,
                        exportOptions: {
                            columns: [0,1,2, 3,4, 5]
                        }
                    }
                ],

        });

        $(document).on('click', ".set-task", function (e) {
            e.preventDefault();
            $('#taskid').val($(this).attr('data-id'));
            $('#pop_model').modal({backdrop: 'static', keyboard: false});
        });


        $(document).on('click', ".view_task", function (e) {
            e.preventDefault();
            var actionurl = 'tools/view_task';
            var id = $(this).attr('data-id');
            $('#task_model').modal({backdrop: 'static', keyboard: false});
            $.ajax({
                url: baseurl + actionurl,
                type: 'POST',
                data: {'tid': id, 'g_ea0d': crsf_hash},
                dataType: 'json',
                success: function (data) {
                    $('#description').html(data.description);
                    $('#task_title').html(data.name);
                    $('#employee').html(data.employee);
                    $('#assign').html(data.assign);
                    $('#priority').html(data.priority);
                }
            });

        });
        miniDash();


    });

</script></div>
</div>
</div>
@endsection