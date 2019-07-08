@extends('layouts.dashboard')
@section('title','All Message')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
        
    <div class="row">
        <div class="col-md-2">
                <a class="btn btn-success" href="{{Route('all_message')}}"> Inbox </a>
        </div>
        <div class="col-md-10">
        <div class="row">
            <div class="col-md-8">
             {{$reads->RelationMessageSender->email}}
            </div>
            <div class="col-md-4">
            {{$reads->created_at}} GMT
            </div>
        </div>
             <h6 style="margin-top:20px;">{{$reads->subject}}</h6>
            <div class="row">
                <div class="col-md-10">
                <p style="margin-top:30px;">Message {{$reads->message}}</p>
                </div>
            </div>
        </div>
    </div>

        </div>
    </div>
</div>

</div>
</div>
</div>
@endsection