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
                Departments <a href=" employee/adddep"
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

                <div class="content-body">
                    <div class="card">
                        <div class="card-header">
                            <h5>Export Products</h5>
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


                                <form method="post" action=" export/products_o"
                                      class="form-horizontal">
                                    <input type="hidden" name="g_ea0d"
                                           value="492717f74d74cf5437a35dd697ec35fc">

                                    <div class="form-group row">

                                        <select name="type" class="form-control">
                                            <option value="1">Products</option>
                                            <option value="2">Products with categories</option>
                                        </select>
                                    </div>


                                    <div class="form-group row">


                                        <div class="col-sm-4">
                                            <input type="submit" class="btn btn-success margin-bottom"
                                                   value="Backup" data-loading-text="Updating...">

                                        </div>
                                    </div>


                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                    $(function () {
                        $('.summernote').summernote({
                            height: 250,
                            toolbar: [
                                // [groupName, [list of button]]
                                ['style', ['bold', 'italic', 'underline', 'clear']],
                                ['font', ['strikethrough', 'superscript', 'subscript']],
                                ['fontsize', ['fontsize']]

                            ]
                        });
                    });
                </script>

</div>
</div>
</div>
@endsection