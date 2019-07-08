@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><article class="content">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <form method="post" id="product_action" class="form-horizontal">
            <div class="card-body">

                <h5>About</h5>
                <hr>


                <div class="form-group row">


                    <div class="col-sm-12 text-center">
                        <h3>POS</h3><h5>V 3.5</h5> <h6>
                            Copyright 2019 <a
                                    href="#">Monowar Hoshen</a>
                        </h6>

                    </div>
                </div>


            </div>
        </form>
    </div>
</article>
@endsection