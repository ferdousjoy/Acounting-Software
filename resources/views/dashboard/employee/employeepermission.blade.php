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
            <h5 class="title">
                Employee <a href=" employee/add"
                                                               class="btn btn-primary btn-sm rounded">
                    Add new                </a>
            </h5>
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


                <form method="post" id="data_form" class="form-horizontal">
                    <table id="" class="table table-striped table-bordered zero-configuration table-responsive"
                           cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Inventory Manager</th>
                            <th>Sales Person</th>
                            <th>Sales Manager</th>
                            <th>Business Manager</th>
                            <th>Business Owner</th>
                            <th>Project Manager</th>


                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                    <td>1</td>
                    <td>Sales</td>
                            <td><input type="checkbox" name="r_1_1"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_1_2"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_1_3"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_1_4"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_1_5"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_1_6"
                                       class="m-1" ></td>
                            
                    </tr><tr>
                    <td>2</td>
                    <td>Stock</td>
                            <td><input type="checkbox" name="r_2_1"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_2_2"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_2_3"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_2_4"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_2_5"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_2_6"
                                       class="m-1" ></td>
                            
                    </tr><tr>
                    <td>3</td>
                    <td>Crm</td>
                            <td><input type="checkbox" name="r_3_1"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_3_2"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_3_3"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_3_4"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_3_5"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_3_6"
                                       class="m-1" ></td>
                            
                    </tr><tr>
                    <td>4</td>
                    <td>Project</td>
                            <td><input type="checkbox" name="r_4_1"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_4_2"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_4_3"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_4_4"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_4_5"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_4_6"
                                       class="m-1" checked="checked"></td>
                            
                    </tr><tr>
                    <td>5</td>
                    <td>Accounts</td>
                            <td><input type="checkbox" name="r_5_1"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_5_2"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_5_3"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_5_4"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_5_5"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_5_6"
                                       class="m-1" ></td>
                            
                    </tr><tr>
                    <td>6</td>
                    <td>Miscellaneous</td>
                            <td><input type="checkbox" name="r_6_1"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_6_2"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_6_3"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_6_4"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_6_5"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_6_6"
                                       class="m-1" ></td>
                            
                    </tr><tr>
                    <td>7</td>
                    <td>Assign Project</td>
                            <td><input type="checkbox" name="r_7_1"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_7_2"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_7_3"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_7_4"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_7_5"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_7_6"
                                       class="m-1" ></td>
                            
                    </tr><tr>
                    <td>8</td>
                    <td>Customer Profile</td>
                            <td><input type="checkbox" name="r_8_1"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_8_2"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_8_3"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_8_4"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_8_5"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_8_6"
                                       class="m-1" ></td>
                            
                    </tr><tr>
                    <td>9</td>
                    <td>Employees</td>
                            <td><input type="checkbox" name="r_9_1"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_9_2"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_9_3"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_9_4"
                                       class="m-1" ></td>
                            <td><input type="checkbox" name="r_9_5"
                                       class="m-1" checked="checked"></td>
                            <td><input type="checkbox" name="r_9_6"
                                       class="m-1" ></td>
                            
                    </tr>                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Inventory Manager</th>
                            <th>Sales Person</th>
                            <th>Sales Manager</th>
                            <th>Business Manager</th>
                            <th>Business Owner</th>
                            <th>Project Manager</th>

                        </tr>
                        </tfoot>
                    </table>
                    <div class="form-group row">

                        <div class="col-sm-1"></div>

                        <div class="col-sm-6">
                            <input type="submit" id="submit-data" class="btn btn-success margin-bottom btn-lg"
                                   value="Update"
                                   data-loading-text="Adding...">
                            <input type="hidden" value="employee/permissions_update" id="action-url">
                        </div>
                    </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {

        //datatables
        $('#emptable').DataTable({responsive: true});


    });

</script>



</div>
</div>
</div>
@endsection