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
            <h5>Backup Database</h5>
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


                <form method="post" action=" export/dbexport_c" class="form-horizontal">

                    <input type="hidden" name="g_ea0d"
                           value="492717f74d74cf5437a35dd697ec35fc">


                    <div class="form-group row">

                        You can backup your database. It takes some time, depends on your database size and server speed.                    </div>


                    <div class="form-group row">


                        <div class="col-sm-4">
                            <input type="submit" class="btn btn-success margin-bottom"
                                   value="Backup"
                                   data-loading-text="Updating...">

                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>
</div></div>
</div>
</div>
@endsection