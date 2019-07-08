@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><script src=" assets/myjs/loading-bar.js" type="text/javascript"></script>
<article class="content content items-list-page">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <div class="card-body">
            <h5>Application Update</h5>

            <hr>
            <h5>Current Version 3.5 /
                <small>Build:53</small>
            </h5>
            <hr>
                        <span id="ldBar2" class="text-center"
                  style="width:100%;height:30px" ,

            ></span>
            <p id="step1"><span id="ldBar" class="text-center"
                                style="width:100%;height:30px" ,

                ></span>
                You can download and install updates with 3 clicks with this easy WebUpdater. Please remember this
                function will not work properly if your server has very restricted file permissions and you have to
                update manually.
                <br><br>
                <button type="button"
                        class="update_chart btn btn-primary btn-min-width btn-lg mr-1 mb-1"
                        id="download_update"><i class="icon-download"></i> &nbsp; Step 1. Check & Download Update
                </button>

            </p>

            <p>
            <hr>

            </p>
                        <span id="insldBar2" class="text-center"
                  style="width:100%;height:30px" ,

            ></span>
            <p id="step2" style="display:none;">
            <span id="insldBar" class="text-center"
                  style="width:100%;height:30px" ,

            ></span><br>
                <br>Update files downloaded, ready to install.. </br><br>
                <button type="button"
                        class="update_chart btn btn-success btn-min-width btn-lg mr-1 mb-1"
                        id="install_update"><i class="icon-file-text3"></i> &nbsp; 2. Update Files
                </button>
            </p>
            <p>
            <hr>
            </p>
                        <span id="dbldBar2" class="text-center"
                  style="width:100%;height:30px" ,

            ></span>
            <p id="step3" style="display:none;">
            <span id="dbldBar" class="text-center"
                  style="width:100%;height:30px" ,

            ></span><br>
                <br>Database update available, ready to install.. </br><br>
                <button type="button"
                        class="update_chart btn btn-red btn-min-width btn-lg mr-1 mb-1"
                        id="db_update"><i class="icon-database"></i> &nbsp; 3. Update Database
                </button>
            </p>
                    </div>
    </div>
</article>
<script type="text/javascript">


    function draw_c(cat_data) {
        $('#cat-chart').empty();
        Morris.Bar({
            element: 'cat-chart',
            data: cat_data,
            xkey: 'y',
            ykeys: ['a'],
            labels: ['Amount'],
            barColors: [
                '#85362b',
            ],
            barFillColors: [
                '#34cea7',
            ],
            barOpacity: 0.6,
        });
    }

    $(document).on('click', "#download_update", function (e) {
        e.preventDefault();
        var bar1 = new ldBar("#ldBar");

        setInterval(function () {
            bar1.set(Math.floor((Math.random() * 70) + 30));
        }, 2000);
        $.ajax({
            url: baseurl + 'webupdate/download_update',
            dataType: 'html',
            method: 'POST',
            data: {
                'v': '5',
                'g_ea0d': '492717f74d74cf5437a35dd697ec35fc'
            },
            success: function (data) {
                $('#step1').html(data);
                var bar1 = new ldBar("#ldBar2");
                bar1.set(100);
                //     $('#step1').hide();
                $('#step2').show();
            }
        });

    });

    $(document).on('click', "#install_update", function (e) {
        e.preventDefault();
        $('#ldBar2').html('');

        var bar1 = new ldBar("#insldBar");

        setInterval(function () {
            bar1.set(Math.floor((Math.random() * 70) + 30));
        }, 2000);
        $.ajax({
            url: baseurl + 'webupdate/install_update',
            dataType: 'html',
            method: 'POST',
            data: {'v': 5, 'g_ea0d': '492717f74d74cf5437a35dd697ec35fc'},
            success: function (data) {
                $('#step2').html(data);
                var bar1 = new ldBar("#insldBar2");
                bar1.set(100);
                //    $('#step2').hide();
                $('#step3').show();
            }
        });

    });


    $(document).on('click', "#db_update", function (e) {
        e.preventDefault();
        $('#ldBar2').html('');
        $('#insldBar').html('');

        var bar1 = new ldBar("#dbldBar");

        setInterval(function () {
            bar1.set(Math.floor((Math.random() * 70) + 30));
        }, 2000);
        $.ajax({
            url: baseurl + 'webupdate/update_db',
            dataType: 'html',
            method: 'POST',
            data: {'v': 5, 'g_ea0d': '492717f74d74cf5437a35dd697ec35fc'},
            success: function (data) {
                $('#step3').html(data);
                var bar1 = new ldBar("#dbldBar2");
                bar1.set(100);
            }
        });

    });


</script></div>
</div>
</div>
@endsection