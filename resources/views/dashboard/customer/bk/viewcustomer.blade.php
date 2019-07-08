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
            <h4 class="card-title">Customer Details                : {{$customerview->billing_name}}</h4>
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
                    <div class="col-md-4 border-right border-right-grey">


                        <div class="ibox-content mt-2">
                            <img alt="image" id="dpic" class="card-img-top img-fluid"
                                 src=" userfiles/customers/example.png">
                        </div>
                        <hr>
                        <h6>Client Group<small>{{$customerview->group}}</small>
                        </h6>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <a href=" customers/view?id=1"
                                   class="btn btn-blue btn-md mr-1 mb-1 btn-block btn-lighten-1"><i
                                            class="fa fa-user"></i> View</a>
                                <a href=" customers/invoices?id=1"
                                   class="btn btn-success btn-md mr-1 mb-1 btn-block btn-lighten-1"><i
                                            class="fa fa-file-text"></i> View Invoices                                </a>
                                <a href=" customers/transactions?id=1"
                                   class="btn btn-blue-grey btn-md mr-1 mb-1 btn-block  btn-lighten-1"><i
                                            class="fa fa-money"></i> View Transactions                                </a>
                                <a href=" customers/statement?id=1"
                                   class="btn btn-primary btn-block btn-md mr-1 mb-1 btn-lighten-1"><i
                                            class="fa fa-briefcase"></i> Account Statements                                </a>
                                <a href=" customers/quotes?id=1"
                                   class="btn btn-purple btn-md mr-1 mb-1 btn-block btn-lighten-1"><i
                                            class="fa fa-quote-left"></i> Quotes                                </a> <a href=" customers/projects?id=1"
                                        class="btn btn-vimeo btn-md mr-1 mb-1 btn-block btn-lighten-2"><i
                                            class="fa fa-bullhorn"></i> Projects                                </a>
                                <a href=" customers/invoices?id=1&t=sub"
                                   class="btn btn-flickr btn-md mr-1 mb-1 btn-block btn-lighten-1"><i
                                            class="fa fa-calendar-check-o"></i> Subscriptions                                </a>
                                <a href=" customers/notes?id=1"
                                   class="btn btn-github btn-block btn-md mr-1 mb-1 btn-lighten-1"><i
                                            class="fa fa-book"></i> Notes                                </a>


                                <a href=" customers/documents?id=1"
                                   class="btn btn-facebook btn-md mr-1 mb-1 btn-block btn-lighten-1"><i
                                            class="icon-folder"></i> Documents                                </a>

                            </div>
                        </div>


                    </div>
                    <div class="col-md-8">
                        <div id="mybutton">

                            <div class="">
                                <a href=" customers/balance?id=1"
                                   class="btn btn-success btn-md"><i
                                            class="fa fa-briefcase"></i> Wallet                                </a>
                                <a href="#sendMail" data-toggle="modal" data-remote="false"
                                   class="btn btn-primary btn-md " data-type="reminder"><i
                                            class="fa fa-envelope"></i> Send Message                                </a>


                                <a href=" customers/edit?id=1"
                                   class="btn btn-info btn-md"><i
                                            class="fa fa-pencil"></i> Edit Profile                                </a>


                                <a href=" customers/changepassword?id=1"
                                   class="btn btn-danger btn-md"><i
                                            class="fa fa-key"></i> Change Password                                </a>
                            </div>

                        </div>
                        <div class="">
                            <h4></h4>


                            <hr>
                            
                            <div class="row m-t-lg">
                                <div class="col-md-2">
                                    <strong>Email</strong>
                                </div>
                                <div class="col-md-10">
                                {{$customerview->billing_email}}                              </div>

                            </div>
                            <hr>
                            <div class="row m-t-lg">
                                <div class="col-md-2">
                                    <strong> Phone</strong>
                                </div>
                                <div class="col-md-10">
                                {{$customerview->billing_phone}}                             </div>

                            </div>
                            <hr>
                            <div id="accordionWrapa1" role="tablist" aria-multiselectable="true">


                                <div id="heading2" class="card-header">
                                    <a data-toggle="collapse" data-parent="#accordionWrapa1" href="#accordion2"
                                       aria-expanded="false" aria-controls="accordion2"
                                       class="card-title lead collapsed">
                                        <i class="fa fa-plus-circle"></i>  Address Details                                    </a>
                                </div>
                                <div id="accordion2" role="tabpanel" aria-labelledby="heading2"
                                     class="card-collapse collapse" aria-expanded="false">
                                    <div class="card-body">
                                        <div class="card-block">
                                            <div class="row m-t-lg">
                                                <div class="col-md-2">
                                                    <strong> Address</strong>
                                                </div>
                                                <div class="col-md-10">{{$customerview->billing_address}}   </div>

                                            </div>
                                            <hr>
                                            <div class="row m-t-lg">
                                                <div class="col-md-2">
                                                    <strong>City</strong>
                                                </div>
                                                <div class="col-md-10">{{$customerview->billing_city}} </div>

                                            </div>
                                            <hr>
                                            <div class="row m-t-lg">
                                                <div class="col-md-2">
                                                    <strong>Region</strong>
                                                </div>
                                                <div class="col-md-10">{{$customerview->billing_region}} </div>

                                            </div>
                                            <hr>
                                            <div class="row m-t-lg">
                                                <div class="col-md-2">
                                                    <strong>Country</strong>
                                                </div>
                                                <div class="col-md-10">{{$customerview->billing_country}} </div>

                                            </div>
                                            <hr>
                                            <div class="row m-t-lg">
                                                <div class="col-md-2">
                                                    <strong>PostBox</strong>
                                                </div>
                                                <div class="col-md-10">{{$customerview->billing_post}}</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="heading3" class="card-header">
                                    <a data-toggle="collapse" data-parent="#accordionWrapa1" href="#accordion3"
                                       aria-expanded="false" aria-controls="accordion3"
                                       class="card-title lead collapsed">
                                        <i class="fa  fa-plus-circle"></i> Shipping Address                                    </a>
                                </div>
                                <div id="accordion3" role="tabpanel" aria-labelledby="heading3"
                                     class="card-collapse collapse" aria-expanded="false">
                                    <div class="card-body">
                                        <div class="card-block">
                                            <div class="row m-t-lg">
                                                <div class="col-md-2">
                                                    <strong> Address</strong>
                                                </div>
                                                <div class="col-md-10">{{$customerview->shipping_address}}</div>

                                            </div>
                                            <hr>
                                            <div class="row m-t-lg">
                                                <div class="col-md-2">
                                                    <strong>City</strong>
                                                </div>
                                                <div class="col-md-10">{{$customerview->shipping_city}} </div>

                                            </div>
                                            <hr>
                                            <div class="row m-t-lg">
                                                <div class="col-md-2">
                                                    <strong>Region</strong>
                                                </div>
                                                <div class="col-md-10">{{$customerview->shipping_region}}</div>

                                            </div>
                                            <hr>
                                            <div class="row m-t-lg">
                                                <div class="col-md-2">
                                                    <strong>Country</strong>
                                                </div>
                                                <div class="col-md-10">{{$customerview->shipping_country}}</div>

                                            </div>
                                            <hr>
                                            <div class="row m-t-lg">
                                                <div class="col-md-2">
                                                    <strong>PostBox</strong>
                                                </div>
                                                <div class="col-md-10">{{$customerview->shipping_post}}</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="heading9" class="card-header">
                                    <a data-toggle="collapse" data-parent="#accordionWrapa1" href="#accordion9"
                                       aria-expanded="false" aria-controls="accordion9"
                                       class="card-title lead collapsed">
                                        <i class="fa  fa-plus-circle"></i> Extra</a>
                                </div>
                                <div id="accordion9" role="tabpanel" aria-labelledby="heading3"
                                     class="card-collapse collapse" aria-expanded="false">
                                    <div class="card-body">
                                        <div class="card-block">
                                            <div class="row m-t-lg">
                                                <div class="col-md-4">
                                                    <strong>RegisterDate</strong>
                                                </div>
                                                <div class="col-md-6">{{$customerview->created_at}}</div>
                                            </div>
                                            <hr>
                                            <div class="row m-t-lg">
                                                <div class="col-md-4">
                                                    <strong>Document ID</strong>
                                                </div>
                                                <div class="col-md-6">{{$customerview->document_id}}</div>
                                            </div>
                                            <hr>
                                            <div class="row m-t-lg">
                                                <div class="col-md-4">
                                                    <strong>Other</strong>
                                                </div>
                                                <div class="col-md-6">{{$customerview->extra}}</div>
                                            </div>
                                            

                                        </div>
                                    </div>
                                </div>

                                <h5 class="bg-blue bg-lighten-4  p-1 mt-2">Wallet Balance: $ 0.00</h5>

                                <hr>
                                <h5>Summary</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <span class="badge tag-default tag-pill bg-success float-xs-right">$ 175,213.90</span>
                                        Income                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge tag-default tag-pill bg-danger float-xs-right">$ 0.00</span>
                                        Expenses                                    </li>

                                    <li class="list-group-item">
                                        <span class="badge tag-default tag-pill bg-pink float-xs-right">$ 59,819.43</span>
                                        Total Due                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge tag-default tag-pill bg-blue float-xs-right">$ 17,452.24</span>
                                         Total Discount                                    </li>


                                </ul>
                                <div id="heading6" class="card-header bg-grey bg-lighten-4 p-1 mt-2">
                                    <a data-toggle="collapse" data-parent="#accordionWrapa6" href="#accordion6"
                                       aria-expanded="false" aria-controls="accordion6"
                                       class="card-title lead collapsed">
                                        <i class="icon-circle-plus"></i> Wallet
                                        Recharge/Payment History</a>
                                </div>
                                <div id="accordion6" role="tabpanel" aria-labelledby="heading6"
                                     class="card-collapse collapse" aria-expanded="false">
                                    <div class="card-body">
                                        <div class="card-block">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Amount</th>
                                                    <th>Note</th>


                                                </tr>
                                                </thead>
                                                <tbody id="activity">
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                            </div>


                            <div id="progress" class="progress1">
                                <div class="progress-bar progress-bar-success"></div>
                            </div>

                            <div class="col-md-12"><br>
                                <h5>Change Customer Picture</h5><input
                                        id="fileupload"
                                        type="file"
                                        name="files[]"></div>


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

                <h4 class="modal-title">Email</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <div class="modal-body">
                <form id="sendmail_form"><input type="hidden"
                                                name="g_ea0d"
                                                value="492717f74d74cf5437a35dd697ec35fc">
                    <div class="row">
                        <div class="col">
                            <div class="input-group">
                                <div class="input-group-addon"><span class="icon-envelope-o"
                                                                     aria-hidden="true"></span></div>
                                <input type="text" class="form-control" placeholder="Email" name="mailtoc"
                                       value="example@example.com">
                            </div>

                        </div>

                    </div>


                    <div class="row">
                        <div class="col mb-1"><label
                                    for="shortnote">Customer Name</label>
                            <input type="text" class="form-control"
                                   name="customername" value="Walk-in Client"></div>
                    </div>
                    <div class="row">
                        <div class="col mb-1"><label
                                    for="shortnote">Subject</label>
                            <input type="text" class="form-control"
                                   name="subject" id="subject">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-1"><label
                                    for="shortnote">Message</label>
                            <textarea name="text" class="summernote" id="contents" title="Contents"></textarea></div>
                    </div>

                    <input type="hidden" class="form-control"
                           id="cid" name="tid" value="1">
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

<script src=" assets/myjs/jquery.ui.widget.js"></script>
<!-- The basic File Upload plugin -->
<script src=" assets/myjs/jquery.fileupload.js"></script>
<script>
    /*jslint unparam: true */
    /*global window, $ */
    $(function () {
        'use strict';
        // Change this to the location of your server-side upload handler:
        var url = ' customers/displaypic?id=1&g_ea0d=' + crsf_hash;
        $('#fileupload').fileupload({
            url: url,
            dataType: 'json',
            formData: {'g_ea0d': crsf_hash},
            done: function (e, data) {
                //$('<p/>').text(file.name).appendTo('#files');
                $("#dpic").attr('src', ' userfiles/customers/' + data.result + '?8978');
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .progress-bar').css(
                    'width',
                    progress + '%'
                );
            }
        }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
    });
</script>
<script type="text/javascript">
    $(function () {
        $('.summernote').summernote({
            height: 100,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['fullscreen', ['fullscreen']],
                ['codeview', ['codeview']]
            ]
        });
    });
</script></div>
</div>
</div>
@endsection