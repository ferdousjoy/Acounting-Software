@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <form method="post" id="product_action" class="form-horizontal">
            <div class="card-body">

                <h5>Attendance</h5>
                <p>Employee can mark attendance self by
                    using Clock In (Clock In)
                    , Clock Out (Clock Out)
                    feature. </p>
                <hr>


                <div class="form-group row">

                    <label class="col-sm-4 col-form-label"
                           for="tzone">SelfAttendance</label>

                    <div class="col-sm-4">
                        <select name="attend" class="form-control">

                            <option value="1">*Yes</option><option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>


                <div class="form-group row">

                    <label class="col-sm-4 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit" id="time_update" class="btn btn-success margin-bottom"
                               value="Update" data-loading-text="Updating...">
                    </div>
                </div>

            </div>
        </form>
    </div>
<script type="text/javascript">
    $("#time_update").click(function (e) {
        e.preventDefault();
        var actionurl = baseurl + 'employee/auto_attendance';
        actionProduct(actionurl);
    });
</script>

</div>
</div>
</div>

@endsection