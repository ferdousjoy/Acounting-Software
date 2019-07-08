@extends('layouts.dashboard')
@section('title','Promo ')
@section('content')
<!-- Horizontal navigation-->
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
                                <h3 class="success" id="dash_0"></h3>
                                <span>Active</span>
                            </div>
                            <div class="align-self-center">
                                <i class="fa fa-check-circle success font-large-2 float-right"></i>
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
                                <h3 class="danger" id="dash_1"></h3>
                                <span>Used</span>
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
                                <h3 class="blue" id="dash_2"></h3>
                                <span>Expired</span>
                            </div>
                            <div class="align-self-center">
                                <i class="fa fa-flag-checkered blue font-large-2 float-right"></i>
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
                                <h3 class="purple" id="dash_6">4</h3>
                                <span>Total</span>
                            </div>
                            <div class="align-self-center">
                                <i class="fa fa-list-alt purple font-large-2 float-right"></i>
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
                Promo Codes <a href="{{Route('add_promo')}}"
                                                                  class="btn btn-primary btn-sm rounded">
                    Add new                </a>
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

            <hr>
            <div class="card-body">


                    <div class="card card-block">
                        <div id="notify" class="alert alert-success" style="display:none;">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>

                            <div class="message"></div>
                        </div>


                        <table id="promotable" class="table table-striped table-bordered zero-configuration">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Code</th>
                                <th>Amount</th>
                                <th>Valid</th>
                                <th>Status</th>
                                <th> Action</th>


                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            @foreach($promos as $promo)
                                    <td>{{$no++}}</td>
                                    <td>{{$promo->promo_code}}</td>
                                    <td>{{$promo->promo_amount}}</td>
                                    <td>{{$promo->promo_valid}}</td>
                                    <td>{{$promo->promo_link_account}}</td>
                                    <td>
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
                                            <form method="POST" action="{{Route('delete_promo',$promo->id)}}">
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
                                
                                @endforeach
                                </tr>
                            </tbody>

                        </table>
                    </div>

                <input type="hidden" id="dashurl" value="promo/promo_stats">
            </div>

    </div>
</div>
<div id="delete_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Delete</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-footer">
                <input type="hidden" id="object-id" value="">
                <input type="hidden" id="action-url" value="promo/delete_i">
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
                                <option value="0">Active</option>
                                <option value="1">Used</option>
                                <option value="2">Expired</option>
                            </select>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" class="form-control"
                               name="tid" id="taskid" value="">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal"> Close</button>
                        <input type="hidden" id="action-url" value="promo/set_status">
                        <button type="button" class="btn btn-primary"
                                id="submit_model">Change Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function () {

        $('#promotable').DataTable({

            "processing": true,
            "serverSide": true,
            "stateSave": true,
            responsive: true,
            "ajax": {
                "url": " promo/load_list",
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
                data: {'tid': id},
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