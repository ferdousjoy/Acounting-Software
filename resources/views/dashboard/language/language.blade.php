@extends('layouts.dashboard')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5>Change Language</h5>
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
                <form method="post" id="product_action" class="form-horizontal">

                    <input type="hidden" name="id" value="1">


                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="currency">Language</label>

                        <div class="col-sm-6">
                            <select name="language" class="form-control">

                                <option value="english">--english--</option><option value="english">English</option> <option value="arabic">Arabic</option><option value="bengali">Bengali</option>
                       <option value="czech">Czech</option><option value="chinese-simplified">Chinese-simplified</option> <option value="chinese-traditional">Chinese-traditional</option> <option value="dutch">Dutch</option><option value="french">French</option><option value="german">German</option><option value="greek">Greek</option><option value="hindi">Hindi</option><option value="indonesian">Indonesian</option>  <option value="italian">Italian</option><option value="japanese">Japanese</option><option value="korean">Korean</option><option value="latin">Latin</option> <option value="polish">Polish</option><option value="portuguese">Portuguese</option> <option value="russian">Russian</option> <option value="swedish">Swedish</option><option value="spanish">Spanish</option><option value="turkish">Turkish</option><option value="urdu">Urdu</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"></label>

                        <div class="col-sm-4">
                            <input type="submit" id="billing_update" class="btn btn-success margin-bottom"
                                   value="Update" data-loading-text="Updating...">
                        </div>
                    </div>

            </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#billing_update").click(function (e) {
        e.preventDefault();
        var actionurl = baseurl + 'settings/language';
        actionProduct(actionurl);
    });
</script>

</div>
</div>
</div>

@endsection