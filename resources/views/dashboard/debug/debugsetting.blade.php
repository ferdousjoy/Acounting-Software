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
            <h5>Application Debug Mode</h5>
            <hr>
            <p>
                You can enable the debug mode to Development Mode to read your server related issue - like PHP Version
                etc.
            </p>


            <div class="form-group row">

                <label class="col-sm-2 col-form-label"
                       for="debug">Application Mode </label>
                <div class="col-sm-6"><select name="debug" class="form-control">

                        <option value="production">** Production Version ** - Recommended</option>                        <option value="production"> Production Version - Recommended</option>
                        <option value="development">Development Mode</option>


                    </select>

                </div>
            </div>


            <div class="form-group row">

                <label class="col-sm-2 col-form-label"></label>

                <div class="col-sm-4">
                    <input type="submit" id="billing_update" class="btn btn-success margin-bottom"
                           value="Update" data-loading-text="Updating...">
                </div>
            </div>             <div class="section">
                <p><strong>Your PHP settings </strong></p>
                <hr/>
                <div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th width="25%">PHP Settings</th>
                            <th width="27%">Current Version</th>
                            <th>Required Version</th>
                            <th class="text-center">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>PHP Version</td>
                            <td>7.2.x</td>
                            <td>7.1+</td>
                            <td class="text-center">
                                                                    <i class="status fa success fa-check-circle-o"></i>
                                                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="section">
                <p><strong>Required extensions:</strong></p>
                <hr/>
                <div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th width="25%">Extension</th>
                            <th width="27%">Current Settings</th>
                            <th>Required Settings</th>
                            <th class="text-center">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>MySQLi</td>
                            <td>                                     On
                                                            </td>
                            <td>On</td>
                            <td class="text-center">
                                                                    <i class="status success fa fa-check-circle-o"></i>
                                                            </td>
                        </tr>
                        <tr>
                            <td>GD</td>
                            <td>                                     On
                                                            </td>
                            <td>On</td>
                            <td class="text-center">
                                                                    <i class="status success fa fa-check-circle-o"></i>
                                                            </td>
                        </tr>
                        <tr>
                            <td>cURL</td>
                            <td>                                     On
                                                            </td>
                            <td>On</td>
                            <td class="text-center">
                                                                    <i class="status success fa fa-check-circle-o"></i>
                                                            </td>
                        </tr>

                        <tr>
                            <td>mbstring</td>
                            <td>                                     On
                                                            </td>
                            <td>On</td>
                            <td class="text-center">
                                                                    <i class="status success fa fa-check-circle-o"></i>
                                                            </td>
                        </tr>


                        <tr>
                            <td>Server timezone</td>
                            <td> America/Los_Angeles                            </td>
                            <td>-</td>
                            <td class="text-center">
                                                                    <i class="status success fa fa-check-circle-o"></i>
                                                            </td>
                        </tr>

                        </tbody>
                    </table><p><small>You can set different timezone in datetime settings for the application</small></p>
                </div><p class="text-right"><a href=" settings/server" ><i
                            class="ft-eye"></i> <small>Server PHP Info</small></a></p>
            </div>

        </div>
    </form>

</div>
<script type="text/javascript">
    $("#billing_update").click(function (e) {
        e.preventDefault();
        var actionurl = baseurl + 'settings/debug';
        actionProduct(actionurl);
    });
</script>
</div>
</div>
</div>
@endsection