@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><article class="content">
    <div class="card card-block">
                <div class="card-body">
            <div class="card-block"><h4>Automated Tasks & Cron Job Management </h4>

                <hr>
                <p>The software utility Cron is a time-based job scheduler. People who set up and maintain automated
                    application task use cron to schedule jobs to run periodically at fixed times, dates, or intervals.
                    Recommended cron job scheduling is in midnight.</p><br><a
                        href=" cronjob/generate" class="btn btn-primary btn-md rounded"> <i
                            class="icon icon-refresh2"></i>
                    Update Cron Token
                </a>
                <p></p>
                <h4 class="text-gray-dark">99293768</h4>

                <hr>
                <a
                        data-toggle="collapse" href="#accordion3c"
                        aria-expanded="false" aria-controls="accordion3c"
                        class="btn btn-default card-title font-size-large  collapsed blue"><i
                            class="fa fa-plus-circle"></i>
                    Subscription Invoices Auto Management URL</a>

                <div id="accordion3c" role="tabpanel"
                     class="card-collapse collapse">


                    <pre class="card-block card">WGET  cronjob/subscription?token=99293768</pre>
                    <pre class="card-block card">GET  cronjob/subscription?token=99293768</pre>


                </div>
                <hr>

                <a
                        data-toggle="collapse" href="#a1"
                        aria-expanded="false" aria-controls="accordion3c"
                        class="btn btn-default card-title font-size-large  collapsed success"><i
                            class="fa fa-plus-circle"></i>
                    Due Invoices Automatic Email URL</a>

                <div id="a1" role="tabpanel"
                     class="card-collapse collapse">
                    <pre class="card-block card">GET  cronjob/due_invoices_email?token=99293768</pre>
                    <pre class="card-block card">WGET  cronjob/due_invoices_email?token=99293768</pre>


                </div>
                <hr>

                <a
                        data-toggle="collapse" href="#a2"
                        aria-expanded="false" aria-controls="accordion3c"
                        class="btn btn-default card-title font-size-large  collapsed blue"><i
                            class="fa fa-plus-circle"></i>
                    Automatic Report data update</a>

                <div id="a2" role="tabpanel"
                     class="card-collapse collapse">
                    <p>
                        <small>This action will update the monthly sales,sold items, total income and expenses of past
                            12
                            months.
                        </small>
                    </p>
                    <pre class="card-block card">GET  cronjob/reports?token=99293768</pre>
                    <pre class="card-block card">WGET  cronjob/reports?token=99293768</pre>


                </div>


                <hr>


                <a
                        data-toggle="collapse" href="#a3"
                        aria-expanded="false" aria-controls="accordion3c"
                        class="btn btn-default card-title font-size-large  collapsed success"><i
                            class="fa fa-plus-circle"></i>
                    Automatic Currency Exchange Rates update</a>

                <div id="a3" role="tabpanel"
                     class="card-collapse collapse">
                    <p>
                        <small>This action will update the payment Currency Exchange Rates.
                        </small>
                    </p>
                    <pre class="card-block card">GET  cronjob/update_exchange_rate?token=99293768</pre>
                    <pre class="card-block card">WGET  cronjob/update_exchange_rate?token=99293768</pre>


                </div>
                <hr>

                <a
                        data-toggle="collapse" href="#a4"
                        aria-expanded="false" aria-controls="accordion3c"
                        class="btn btn-default card-title font-size-large  collapsed blue"><i
                            class="fa fa-plus-circle"></i>
                    Clean Drafts URL</a>

                <div id="a4" role="tabpanel"
                     class="card-collapse collapse">

                    <pre class="card-block card">WGET  cronjob/cleandrafts?token=99293768</pre>
                    <pre class="card-block card">GET  cronjob/cleandrafts?token=99293768</pre>

                </div>
                <hr>


                <a
                        data-toggle="collapse" href="#a5"
                        aria-expanded="false" aria-controls="accordion3c"
                        class="btn btn-default card-title font-size-large  collapsed success"><i
                            class="fa fa-plus-circle"></i>
                    Promo/Coupon Expired</a>

                <div id="a5" role="tabpanel"
                     class="card-collapse collapse">
                    <p>
                    <pre class="card-block card">WGET  cronjob/promo?token=99293768</pre>
                    <pre class="card-block card">GET  cronjob/promo?token=99293768</pre>

                </div>
                <hr>
                <a
                        data-toggle="collapse" href="#a6"
                        aria-expanded="false" aria-controls="accordion3c"
                        class="btn btn-default card-title font-size-large  collapsed blue"><i
                            class="fa fa-plus-circle"></i>
                    Low Stock Products Alert</a>

                <div id="a6" role="tabpanel"
                     class="card-collapse collapse">
                    <p>
                    <pre class="card-block card">WGET  cronjob/stock_alert?token=99293768</pre>
                    <pre class="card-block card">GET  cronjob/stock_alert?token=99293768</pre>

                </div>
                <hr>
                <a
                        data-toggle="collapse" href="#a7"
                        aria-expanded="false" aria-controls="accordion3c"
                        class="btn btn-default card-title font-size-large  collapsed success"><i
                            class="fa fa-plus-circle"></i>
                    Expiring Products Alert</a>

                <div id="a7" role="tabpanel"
                     class="card-collapse collapse">
                    <p>
                    <pre class="card-block card">WGET  cronjob/expiry_alert?token=99293768</pre>
                    <pre class="card-block card">GET  cronjob/expiry_alert?token=99293768</pre>
                </div>
                <hr>

                <a
                        data-toggle="collapse" href="#a8"
                        aria-expanded="false" aria-controls="accordion3c"
                        class="btn btn-default card-title font-size-large  collapsed blue"><i
                            class="fa fa-plus-circle"></i>
                    Database BackUp</a>

                <div id="a8" role="tabpanel"
                     class="card-collapse collapse">
                    <p>
                    <pre class="card-block card">WGET  cronjob/dbbackup?token=99293768</pre>
                    <pre class="card-block card">GET  cronjob/dbbackup?token=99293768</pre>
                </div>
                <hr>
                <a
                        data-toggle="collapse" href="#a9"
                        aria-expanded="false" aria-controls="accordion3c"
                        class="btn btn-default card-title font-size-large  collapsed success"><i
                            class="fa fa-plus-circle"></i>
                    Clean 7 Days Old Log</a>

                <div id="a9" role="tabpanel"
                     class="card-collapse collapse">
                    <p>
                    <pre class="card-block card">WGET  cronjob/cleanlog?token=99293768</pre>
                    <pre class="card-block card">GET  cronjob/cleanlog?token=99293768</pre>
                </div>
                <hr>


            </div>


        </div>
    </div>
</article>
<script type="text/javascript">
    $(document).ready(function () {

        //datatables
        $('#acctable').DataTable({responsive: true});

    });
</script></div>
</div>
</div>
@endsection