@extends('layouts.dashboard')
@section('title','All Message')
@section('content')
@include('layouts.inc.success')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5 class="title">
            <h5 class="card-title">Messages <a
                        href="#sendUserPM" data-toggle="modal"
                        data-remote="false" data-type="reminder"
                        class="btn btn-large btn-success"
                        title="Partial Payment"
                ><span class="icon-mail"></span> Compose </a></h5>

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
                        <th>message</th>
                        <th>Subject</th>
                        <th>Sender Name</th>
                        <th>Sender Email</th>
                        <th>Date</th>
                        <th> Action</th>


                    </tr>
                    </thead>
                    <tbody>
                        @foreach($messages as $message)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{str_limit(strip_tags($message->message,20))}}..</td>
                            <td>{{$message->subject}}</td>
                            <td>{{$message->RelationMessageSender->email}}</td>
                            <td>{{$message->RelationMessageSender->name}}</td>
                            <td>{{$message->created_at}}</td>
                            <td>
                                
                            <a href="{{Route('view_message',$message->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> </a>
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
                                    <form method="POST" action="{{Route('delete_message',$message->id)}}">
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
<div id="sendUserPM" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Send Message</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form method="post" action="{{Route('send_message_form')}}">
                @csrf
                <div class="modal-body" id="emailbody">
                    
                        <div class="row">
                        <input type="hidden" value="{{Auth::user()->id}}" name="sender">
                                <div class="form-group">
                                        <label for="to" class="control-label">To:</label>
                                        <select style="padding-left:20px;" class="custom-select" name="to">
                                        <option value="">Select Reciever Email</option>
                                        @foreach($emails as $email)
                                            @if(Auth::user()->id == $email->id)
                                                @else
                                                <option  value="{{$email->id}}">{{$email->email}}</option>
                                            @endif    
                                        @endforeach
                                    </select>
                                    </div>
                                    @if ($errors->has('to'))
                                    <div class="alert alert-danger">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <p>{{ $errors->first('to') }}</p>
                                    </div>
                                    @endif

                        </div>
                        <div class="row">
                            <div class="col mb-1"><label
                                        for="shortnote">Subject</label>
                                <input type="text" class="form-control"
                                       name="subject" id="subject">
                            </div>
                            @if ($errors->has('subject'))
                                    <div class="alert alert-danger">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <p>{{ $errors->first('to') }}</p>
                                    </div>
                                    @endif
                        </div>
                        <div class="row">
                            <div class="col mb-1"><label
                                        for="shortnote">Message</label>
                                <textarea name="message" class="summernote" id="contents" title="Contents"></textarea>
                            </div>
                            @if ($errors->has('message'))
                                    <div class="alert alert-danger">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <p>{{ $errors->first('to') }}</p>
                                    </div>
                                    @endif
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                            data-dismiss="modal"> Close</button>
                    <button type="submit" class="btn btn-primary" >Send</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
