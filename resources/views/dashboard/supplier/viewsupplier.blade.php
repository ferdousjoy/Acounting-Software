@extends('layouts.dashboard')
@section('title','Supplier Profile')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{$viewsupplier->name}}</h4>
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
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-block">
                            <div class="ibox-content mt-2">
                                <img alt="image" id="dpic" class="img-responsive rounded-circle" height="200"
                                     src="{{asset('uploads/supplier')}}/{{$viewsupplier->image}}">
                            </div>
                            <hr>
                            <div class="user-button">
                                <div class="row mt-3">
                                    <div class="col-md-6">

                                        <a href="#sendMail" data-toggle="modal" data-remote="false"
                                           class="btn btn-primary btn-md  " data-type="reminder"><i
                                                    class="icon-envelope"></i> Send Message                                        </a>

                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{Route('edit_supplier',$viewsupplier->id)}}"
                                           class="btn btn-warning btn-md"><i
                                                    class="icon-pencil"></i> Edit Profile                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h5>Balance Summary</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <span class="badge tag-default tag-pill bg-primary float-xs-right"> $ 0.00</span> Income                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge tag-default tag-pill bg-danger float-xs-right"> $ 0.00</span>
                                            Expenses                                        </li>

                                    </ul>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="">
                            <h4>Supplier Details</h4>
                            <hr>
                            <div class="row m-t-lg">
                                <div class="col-md-2">
                                    <strong>Name</strong>
                                </div>
                                <div class="col-md-10">
                                    {{$viewsupplier->name}}
                                       </div>

                            </div>
                            <hr>
                            <div class="row m-t-lg">
                                <div class="col-md-2">
                                    <strong>Company</strong>
                                </div>
                                <div class="col-md-10">
                                {{$viewsupplier->company}}                           </div>

                            </div>
                            <hr>
                            <div class="row m-t-lg">
                                <div class="col-md-2">
                                    <strong> Address</strong>
                                </div>
                                <div class="col-md-10">
                                {{$viewsupplier->address}}                           </div>

                            </div>
                            <hr>
                            <div class="row m-t-lg">
                                <div class="col-md-2">
                                    <strong>City</strong>
                                </div>
                                <div class="col-md-10">
                                {{$viewsupplier->city}}                             </div>

                            </div>
                            <hr>
                            <div class="row m-t-lg">
                                <div class="col-md-2">
                                    <strong>Region</strong>
                                </div>
                                <div class="col-md-10">
                                {{$viewsupplier->region}}                               </div>

                            </div>
                            <hr>
                            <div class="row m-t-lg">
                                <div class="col-md-2">
                                    <strong>Country</strong>
                                </div>
                                <div class="col-md-10">
                                {{$viewsupplier->country}}                               </div>

                            </div>
                            <hr>
                            <hr>
                            <div class="row m-t-lg">
                                <div class="col-md-2">
                                    <strong>Email</strong>
                                </div>
                                <div class="col-md-10">
                                {{$viewsupplier->email}}                               </div>

                            </div>
                            <hr>
                            <div class="row m-t-lg">
                                <div class="col-md-2">
                                    <strong> Phone</strong>
                                </div>
                                <div class="col-md-10">
                                {{$viewsupplier->phone}}                            </div>

                            </div>
                            <hr>
                            <div class="row mt-3">
                                <div class="col-md-6">

                                    <a href="#"
                                       class="btn btn-primary btn-lg"><i
                                                class="icon-file-text2"></i> View Purchase Orders                                    </a>

                                </div>
                                <div class="col-md-6">
                                    <a href="#"
                                       class="btn btn-success btn-lg"><i
                                                class="icon-money3"></i> View Transactions                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<div id="sendMail" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Email</h4>
            </div>

            <div class="modal-body">
                <form id="sendmail_form">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <div class="input-group-addon"><span class="icon-envelope-o"
                                                                     aria-hidden="true"></span></div>
                                <input type="text" class="form-control" placeholder="Email" name="mailtoc"
                                       value="arifulislam58@gmail.com">
                            </div>

                        </div>

                    </div>


                    <div class="row">
                        <div class="col-xs-12 mb-1"><label
                                    for="shortnote"></label>
                            <input type="text" class="form-control"
                                   name="customername" value="Space IT"></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 mb-1"><label
                                    for="shortnote">Subject</label>
                            <input type="text" class="form-control"
                                   name="subject" id="subject">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 mb-1"><label
                                    for="shortnote">Message</label>
                            <textarea name="text" class="summernote" id="contents" title="Contents"></textarea></div>
                    </div>

                    <input type="hidden" class="form-control"
                           id="cid" name="tid" value="53">
                    <input type="hidden" id="action-url" value="communication/send_general">


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal"> Close</button>
                <button type="button" class="btn btn-primary"
                        id="sendNow">Send</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection