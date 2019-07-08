@extends('layouts.dashboard')
@section('title','Edit Account')
@section('content')
@include('layouts.inc.success')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5>Edit Account</h5>
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
                <form action="{{Route('edit_account_form')}}" class="form-horizontal" method="post" accept-charset="utf-8">
                    @csrf
                    @method('put')
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="accno">Account No</label>

                    <div class="col-sm-8">
                        <input type="text"
                               class="form-control margin-bottom required" name="accno"
                               value="{{$accountedit->account_no}}">
                    </div>
                </div>


                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="holder">Name</label>

                    <div class="col-sm-8">


                        <input type="text" name="holder" class="form-control required"
                               aria-describedby="sizing-addon1" value="{{$accountedit->name}}">

                    </div>

                </div>


                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="acode">Note</label>

                    <div class="col-sm-8">


                        <input type="text" name="notes" class="form-control"
                               aria-describedby="sizing-addon1" value="{{$accountedit->notes}}">

                    </div>

                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="lid">Business Locations</label>

                    <div class="col-sm-6">
                    <input type="text" name="businesslocation" class="form-control" aria-describedby="sizing-addon1" value="{{$accountedit->business_location}}">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit" class="btn btn-success margin-bottom"
                               value="Update" data-loading-text="Updating...">
                        <input type="hidden" value="{{$accountedit->id}}" name="id">
                    </div>
                </div>

            </div>
            </form>
        </div>

    </div>
</div>

</div>
</div>
</div>


@endsection