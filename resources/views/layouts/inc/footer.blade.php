
    <script src="{{asset('dashjscss')}}/assets/myjs/jquery.ui.widget.js"></script>
    <script src="{{asset('dashjscss')}}/assets/myjs/jquery.fileupload.js"></script>
    <script src="{{asset('dashjscss')}}/assets/myjs/jquery-ui.js"></script>
    <script src="{{asset('dashjscss')}}/assets/myjs/jquery.fileupload.min.js"></script>
    <script src="{{asset('dashjscss')}}/app-assets/vendors/js/extensions/unslider-min.js"></script>
    <script src="{{asset('dashjscss')}}/app-assets/vendors/js/timeline/horizontal-timeline.js"></script>
    <script src="{{asset('dashjscss')}}/app-assets/js/core/app-menu.js"></script>
    <script src="{{asset('dashjscss')}}/app-assets/js/core/app.js"></script>
    <script src="{{asset('dashjscss')}}/app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
    <script src="{{asset('dashjscss')}}/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="{{asset('dashjscss')}}/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="{{asset('dashjscss')}}/app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script>
    <script src="{{asset('dashjscss')}}/app-assets/vendors/js/tables/jszip.min.js"></script>
    <script src="{{asset('dashjscss')}}/app-assets/vendors/js/tables/pdfmake.min.js"></script>
    <script src="{{asset('dashjscss')}}/app-assets/vendors/js/tables/vfs_fonts.js"></script>
    <script src="{{asset('dashjscss')}}/app-assets/vendors/js/tables/buttons.html5.min.js"></script>
    <script src="{{asset('dashjscss')}}/app-assets/vendors/js/tables/buttons.print.min.js"></script>

    <script type="text/javascript">var dtformat = $('#hdata').attr('data-df');
        var currency = $('#hdata').attr('data-curr');
        ;</script>
    <script src="{{asset('dashjscss')}}/assets/myjs/custom.js"></script>
    <script src="{{asset('dashjscss')}}/assets/myjs/basic.js"></script>
    <script src="{{asset('dashjscss')}}/assets/myjs/control.js"></script>
    <script src="{{asset('dashjscss')}}/app-assets/vendors/js/extensions/moment.min.js"></script>
    <script src="{{asset('dashjscss')}}/app-assets/vendors/js/extensions/fullcalendar.min.js"></script>
    <script src="{{asset('dashjscss')}}/assets/c_portjs/main.js"></script>
    <script src="{{asset('dashjscss')}}/appjs/app.js"></script>
    <script src="{{asset('dashjscss')}}/appjs/projectdatatable.js"></script>
    @yield('footer_scripts')

    <script>$('.edate').datepicker({autoHide: true, format: 'dd-mm-yyyy'});
        var slider = $('#progress');
        var textn = $('#prog');
        textn.text(slider.val() + '%');
        $(document).on('change', slider, function (e) {
            e.preventDefault();
            textn.text($('#progress').val() + '%');

        });</script>
        <script type="text/javascript">

$(document).ready(function () {
    $(document).on('click', ".set-task", function (e) {
        e.preventDefault();
        $('#taskid').val($(this).attr('data-id'));
        $('#pop_model').modal({backdrop: 'static', keyboard: false});

    });


    $(document).on('click', ".view_task", function (e) {
        e.preventDefault();

        var actionurl = 'projects/view_project';
        var id = $(this).attr('data-id');
        $('#task_model').modal({backdrop: 'static', keyboard: false});


    });
    miniDash();


});
</script>
<script>
       //dashboard-income-chart
       function drawIncomeChart(dataVisits) {
                $('#dashboard-income-chart').empty();
                Morris.Area({
                    element: 'dashboard-income-chart',
                    data: dataVisits,
                    xkey: 'x',
                    ykeys: ['y'],
                    ymin: 'auto 40',
                    labels: ['Amount'],
                    xLabels: "day",
                    hideHover: 'auto',
                    yLabelFormat: function (y) {
                        // Only integers
                        if (y === parseInt(y, 10)) {
                            return y;
                        } else {
                            return '';
                        }
                    },
                    resize: true,
                    lineColors: [
                        '#00A5A8',
                    ],
                    pointFillColors: [
                        '#00A5A8',
                    ],
                    fillOpacity: 0.4,
                });
            }

</script>
<script>
    $(window).on("load", function () {
                $('#recent-buyers').perfectScrollbar({
                    wheelPropagation: true
                });
                /********************************************
                 *               PRODUCTS SALES              *
                 ********************************************/
                var sales_data = [
                    { y: '2019-02-16', sales: 236398, invoices: 87 }, { y: '2019-02-15', sales: 8972, invoices: 8 }, { y: '2019-02-12', sales: 933, invoices: 2 }, { y: '2019-02-11', sales: 466, invoices: 1 }, { y: '2019-02-10', sales: 466, invoices: 1 }, { y: '2019-02-09', sales: 3012, invoices: 2 }, { y: '2019-02-08', sales: 1161, invoices: 1 }, { y: '2019-02-07', sales: 2389, invoices: 2 }, { y: '2019-02-06', sales: 7285, invoices: 4 },];
                var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                Morris.Area({
                    element: 'products-sales',
                    data: sales_data,
                    xkey: 'y',
                    ykeys: ['sales', 'invoices'],
                    labels: ['sales', 'invoices'],
                    behaveLikeLine: true,
                    xLabelFormat: function (x) { // <--- x.getMonth() returns valid index
                        var day = x.getDate();
                        var month = months[x.getMonth()];
                        return day + ' ' + month;
                    },
                    resize: true,
                    pointSize: 0,
                    pointStrokeColors: ['#00B5B8', '#FA8E57', '#F25E75'],
                    smooth: true,
                    gridLineColor: '#E4E7ED',
                    numLines: 6,
                    gridtextSize: 14,
                    lineWidth: 0,
                    fillOpacity: 0.9,
                    hideHover: 'auto',
                    lineColors: ['#00B5B8', '#F25E75']
                });


            });

</script>

<script>
     $('#dashboard-sales-breakdown-chart').empty();
            Morris.Donut({
                element: 'dashboard-sales-breakdown-chart',
                data: [{
                    label: "Income",
                    value: 185247
                },
                {
                    label: "Expenses",
                    value: 10750
                }
                ],
                resize: true,
                colors: ['#34cea7', '#ff6e40'],
                gridTextSize: 6,
                gridTextWeight: 400
            });
</script>

<script>
               drawIncomeChart(dataVisits);
            drawExpenseChart(dataVisits2);

            $('a[data-toggle=tab').on('shown.bs.tab', function (e) {
                window.dispatchEvent(new Event('resize'));
            });

</script>
<script>
       //dashboard-expense-chart
       function drawExpenseChart(dataVisits2) {

$('#dashboard-expense-chart').empty();
Morris.Area({
    element: 'dashboard-expense-chart',
    data: dataVisits2,
    xkey: 'x',
    ykeys: ['y'],
    ymin: 'auto 0',
    labels: ['Amount'],
    xLabels: "day",
    hideHover: 'auto',
    yLabelFormat: function (y) {
        // Only integers
        if (y === parseInt(y, 10)) {
            return y;
        } else {
            return '';
        }
    },
    resize: true,
    lineColors: [
        '#ff6e40',
    ],
    pointFillColors: [
        '#34cea7',
    ]
});
}


</script>
<script>

    $(document).on('click', ".tr_clone_add", function (e) {
                e.preventDefault();
                var n_row = $('#v_var').find('tbody').find("tr:last").clone();

                $('#v_var').find('tbody').find("tr:last").after(n_row);

            });
                        $(document).on('click', ".tr_clone_add_w", function (e) {
                e.preventDefault();
                var n_row = $('#w_var').find('tbody').find("tr:last").clone();

                $('#w_var').find('tbody').find("tr:last").after(n_row);

            });
</script>
<script>
    //Select Box
$(function () {
    $('.select-box').select2();

    $('.summernote').summernote({
        height: 250,
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['fullscreen', ['fullscreen']],
            ['codeview', ['codeview']]
        ]
    });
});
</script>
<script>

$("#customer_statement").select2({
    minimumInputLength: 4,
    tags: [],
        processResults: function (data) {
            return {
                results: $.map(data, function (item) {
                    return {
                        text: item.name,
                        id: item.id
                    }
                })
            };
        },
    }
});


</script>
<script>
     $(document).on('click', ".set-task", function (e) {
        e.preventDefault();
        $('#taskid').val($(this).attr('data-id'));
        $('#pop_model').modal({backdrop: 'static', keyboard: false});

    });
    $(document).ready(function(){

        $('#price-0').keyup(function(){
            var price = $('#price-0').val();
            var amount = $('#amount-0').val();

            $('#texttaxa-0').text(price*amount);
        });
        $('#vat-0').keyup(function(){

            var amount = $('#amount-0').val();
            var price = $('#price-0').val();
            var vat = $('#vat-0').val();

            $('#texttaxa-0').text(price * amount + vat);
        });

    });


</script>
 <script type="text/javascript">
        $(document).ready(function () {
            var cat_data = [
                {y: "2019-03-12", a: 1265.29 },{y: "2019-03-14", a: 1123.95 },{y: "2019-03-15", a: 3515.35 },{y: "2019-03-17", a: 2211.86 },{y: "2019-03-18", a: 466.58 },{y: "2019-03-19", a: 466.58 },{y: "2019-03-20", a: 466.58 },{y: "2019-03-21", a: 1399.74 },{y: "2019-03-22", a: 933.16 },{y: "2019-03-23", a: 466.58 },{y: "2019-03-24", a: 61673.03 },{y: "2019-03-25", a: 348577.55 },{y: "2019-03-26", a: 4520106.77 },            ];
            draw_c(cat_data);
        });

        function draw_c(cat_data) {
            $('#cat-chart').empty();
            Morris.Bar({
                element: 'cat-chart',
                data: cat_data,
                xkey: 'y',
                ykeys: ['a'],
                labels: ['Amount'],
                barColors: [
                    '#248500',
                ],
                barFillColors: [
                    '#34cea7',
                ],
                barOpacity: 0.6,
            });
        }

        $(document).on('click', ".update_chart", function (e) {
            e.preventDefault();
            var a_type = $(this).attr('data-val');
            if (a_type == 'custom') {
                $('#custom_c').show();
            } else {
                $.ajax({
                    url: baseurl + 'chart/income_update',
                    dataType: 'json',
                    method: 'POST',
                    data: {
                        'p': $(this).attr('data-val'),
                        'g_ea0d': '864836f0cdfa70118fea6daa96b0cd96'
                    },
                    success: function (data) {
                        draw_c(data);
                    }
                });
            }
        });


        $(document).on('click', "#custom_update_chart", function (e) {
            e.preventDefault();
            $.ajax({
                url: baseurl + 'chart/income_update',
                dataType: 'json',
                method: 'POST',
                data: $('#chart_custom').serialize() + '&g_ea0d=864836f0cdfa70118fea6daa96b0cd96',
                success: function (data) {
                    draw_c(data);
                }
            });

        });


    </script>
</body>

</html>
