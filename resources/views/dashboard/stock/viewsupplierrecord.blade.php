@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-content">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                <div class="message"></div>
            </div>
            <div id="thermal_a" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                <div class="message"></div>
            </div>
            <div id="invoice-template" class="card-body">
                <div class="row">

                    <div class="">
                                                    <div class="title-action">



                            <a href="" class="btn btn-warning mb-1"><i
                                        class="fa fa-pencil"></i> Edit</a>

                            <a href="#part_payment" data-toggle="modal" data-remote="false" data-type="reminder"
                               class="btn btn-large btn-info mb-1" title="Partial Payment"
                            ><span class="fa fa-money"></span> Make Payment </a>

                            <div class="btn-group">
                                <button type="button" class="btn btn-facebook dropdown-toggle mb-1"
                                        data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                            <span
                                    class="fa fa-envelope-o"></span> Email
                                </button>
                                <div class="dropdown-menu"><a href="#sendEmail" data-toggle="modal"
                                                              data-remote="false" class="dropdown-item sendbill"
                                                              data-type="notification">Supplier Record Notification</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#sendEmail" data-toggle="modal" data-remote="false"
                                       class="dropdown-item sendbill"
                                       data-type="reminder">Payment Reminder</a>
                                    <a
                                            href="#sendEmail" data-toggle="modal" data-remote="false"
                                            class="dropdown-item sendbill"
                                            data-type="received">Payment Received</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#sendEmail" data-toggle="modal" data-remote="false"
                                       class="dropdown-item sendbill" href="#"
                                       data-type="overdue">Payment Overdue</a><a
                                            href="#sendEmail" data-toggle="modal" data-remote="false"
                                            class="dropdown-item sendbill"
                                            data-type="refund">Refund Generated</a>

                                </div>

                            </div>

                            <!-- SMS -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-blue dropdown-toggle mb-1"
                                        data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                            <span
                                    class="fa fa-mobile"></span> SMS
                                </button>
                                <div class="dropdown-menu"><a href="#sendSMS" data-toggle="modal"
                                                              data-remote="false" class="dropdown-item sendsms"
                                                              data-type="notification">Supplier Notification</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#sendSMS" data-toggle="modal" data-remote="false"
                                       class="dropdown-item sendsms"
                                       data-type="reminder">Payment Reminder</a>
                                    <a
                                            href="#sendSMS" data-toggle="modal" data-remote="false"
                                            class="dropdown-item sendsms"
                                            data-type="received">Payment Received</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#sendSMS" data-toggle="modal" data-remote="false"
                                       class="dropdown-item sendsms" href="#"
                                       data-type="overdue">Payment Overdue</a><a
                                            href="#sendSMS" data-toggle="modal" data-remote="false"
                                            class="dropdown-item sendbill"
                                            data-type="refund">Refund Generated</a>

                                </div>

                            </div>

                            <div class="btn-group ">
                                <button type="button" class="btn btn-success mb-1 btn-min-width dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="fa fa-print"></i> Print                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item"
                                       href="#">Print</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item"
                                       href="#">PDF Download</a>

                                </div>
                            </div>
                            <a href="#" class="btn btn-blue-grey mb-1"><i
                                        class="fa fa-globe"></i> Preview                            </a>

                            <a href="#pop_model" data-toggle="modal" data-remote="false"
                               class="btn btn-large btn-cyan mb-1" title="Change Status"
                            ><span class="fa fa-retweet"></span> Change Status</a>
                            <a href="#cancel-bill" class="btn btn-danger mb-1" id="cancel-bill"><i
                                        class="fa fa-minus-circle"> </i> Cancel                            </a>
                            <div class="btn-group ">
                                <button type="button" class="btn btn-primary mb-1 btn-min-width dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="icon-anchor"></i> Extra                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item"
                                       href="">Delivery Note</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item"
                                       href="">Proforma Invoice</a>

                                </div>
                            </div>
                            <div class="btn-group ">
                                <button type="button" class="btn btn-vimeo mb-1 btn-md dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="fa fa-print"></i> POS Print                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item"
                                       href="">PDF Print</a>
                                </div>
                            </div>




                            </div>                    </div>
                </div>

                <!-- Invoice Company Details -->
                <div id="invoice-company-details" class="row mt-2">
                    <div class="col-md-6 col-sm-12 text-xs-center text-md-left"><p></p>
                        <img src="{{asset('uploads/company')}}/{{$company->company_logo}}"
                             class="img-responsive p-1 m-b-2" style="max-height: 120px;">
                    </div>
                    <div class="col-md-6 col-sm-12 text-xs-center text-md-right">
                        <h2>Supplier Record</h2>
                        <p class="pb-1"> SRN 1012</p>
                            <p class="pb-1">Reference:{{$view->billing_reference}}</p>                        <ul class="px-0 list-unstyled">
                            <li>Gross Amount</li>
                            <li class="lead text-bold-800">$ {{$view->product_price}}</li>
                        </ul>
                    </div>
                </div>
                <!--/ Invoice Company Details -->

                <!-- Invoice Customer Details -->
                <div id="invoice-customer-details" class="row pt-2">
                    <div class="col-sm-12 text-xs-center text-md-left">
                        <p class="text-muted"> Bill To</p>
                    </div>
                    <div class="col-md-6 col-sm-12 text-xs-center text-md-left">
                        <ul class="px-0 list-unstyled">


                            <li class="text-bold-800"><strong  class="invoice_a">{{$view->billing_name}}</strong></li>
                            <li></li>
                            <li>Address:{{$view->billing_address}}s</li>
                            <li> Phone: {{$view->billing_phone}}</li>
                            <li> Email: {{$view->billing_email}}</li>

                        </ul>

                    </div>
                    <div class="offset-md-3 col-md-3 col-sm-12 text-xs-center text-md-left">
                        <p><span class="text-muted">Invoice Date  :</span> {{$view->billing_date}}</p> 
                      <p><span class="text-muted">Terms :</span> {{$view->payment_terms}}</p>                    </div>
                </div>
                <!--/ Invoice Customer Details -->

                <!-- Invoice Items Details -->
                <div id="invoice-items-details" class="pt-2">
                    <div class="row">
                        <div class="table-responsive col-sm-12">
                            <table class="table table-striped">
                                <thead>
                                                                    <tr>
                                        <th>#</th>
                                        <th>Description</th>
                                        <th class="text-xs-left">Rate</th>
                                        <th class="text-xs-left">Qty</th>
                                        <th class="text-xs-left">Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                            <th scope="row">1</th>
                            <td>{{$view->billing_description}} </td>                           
                            <td>$ {{$view->product_price}}</td>
                             <td>{{$view->product_quantity}}</td>
                            <td>$ {{$view->product_price}}</td>
                        </tr><tr><td colspan=5></td></tr>
                                    </tbody>
                                                            </table>
                        </div>
                    </div>
                    <p></p>
                    <div class="row">
                        <div class="col-md-7 col-sm-12 text-xs-center text-md-left">


                            <div class="row">
                                <div class="col-md-8"><p
                                            class="lead">Payment Status:
                                        <u><strong
                                                    id="pstatus">{{$view->payment_status}}</strong></u>
                                    </p>
                                    <p class="lead">Payment Method: <u><strong
                                                    id="pmethod"> Cash</strong></u>
                                    </p>

                                    <p class="lead mt-1"><br>Note:</p>
                                    <code>{{$view->billing_note}}  </code>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <!-- Invoice Footer -->

                <div id="invoice-footer"><p class="lead">Credit Transactions:</p>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Method</th>
                            <th>Debit</th>
                            <th>Credit</th>
                            <th>Note</th>


                        </tr>
                        </thead>
                        <tbody id="activity">
                        
                        </tbody>
                    </table>

                    <div class="row">

                        <div class="col-md-7 col-sm-12">

                            <h6>Terms & Condition</h6>
                            <p> <strong>Payment On Receipt</strong><br>
1. 10% discount if payment received within ten days otherwise payment 30 days after invoice date

</p>
                        </div>

                    </div>

                </div>
                <!--/ Invoice Footer -->
                <hr>



                <!-- The container for the uploaded files -->
                <table id="files" class="files table table-striped"></table>
                <br>

            </div>
        </div>
    </div>
</div>


<!-- Modal HTML -->
<div id="part_payment" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Payment Confirmation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <div class="modal-body">
                <form class="payment">
                    <div class="row">
                        <div class="col">
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="text" class="form-control" placeholder="Total Amount" name="amount"
                                       id="rmpay"
                                       value="49.00">
                                <div class="form-control-position">
                                    $                                </div>

                            </fieldset>


                        </div>
                        <div class="col">
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="text" class="form-control required"
                                       placeholder="Billing Date" name="paydate"
                                       data-toggle="datepicker">
                                <div class="form-control-position">
                      <span class="fa fa-calendar"
                            aria-hidden="true"></span>
                                </div>

                            </fieldset>


                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-1"><label
                                    for="pmethod">Payment Method</label>
                            <select name="pmethod" class="form-control mb-1">
                                <option value="Cash">Cash</option>
                                <option value="Card">Card</option>
                                <option value="Balance">Client Balance</option>
                                <option value="Bank">Bank</option>
                            </select><label for="account">Account</label>

                            <select name="account" class="form-control">
                                <option value="1">Sales Account / 123456</option><option value="2">test / 115210</option>                            </select></div>
                    </div>
                    <div class="row">
                        <div class="col mb-1"><label
                                    for="shortnote">Note</label>
                            <input type="text" class="form-control"
                                   name="shortnote" placeholder="Short note"
                                   value="Payment for invoice #1012"></div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" class="form-control required"
                               name="tid" id="invoiceid" value="26">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal"> Close</button>
                        <input type="hidden" name="cid" value="2"><input type="hidden"
                                                                                                     name="cname"
                                                                                                     value="Wyatan Spilsted">
                        <button type="button" class="btn btn-primary"
                                id="submitpayment">Make Payment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- cancel -->
<div id="cancel_bill" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Cancel Invoice</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form class="cancelbill">


                    You can not revert this action! Are you sure?

            </div>


            <div class="modal-footer">
                <input type="hidden" class="form-control"
                       name="tid" value="26">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal"> Close</button>
                <button type="button" class="btn btn-danger"
                        id="send">Cancel Invoice</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal HTML -->
<div id="sendEmail" class="modal fade">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> Email</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div id="request">
                <div id="ballsWaveG">
                    <div id="ballsWaveG_1" class="ballsWaveG"></div>
                    <div id="ballsWaveG_2" class="ballsWaveG"></div>
                    <div id="ballsWaveG_3" class="ballsWaveG"></div>
                    <div id="ballsWaveG_4" class="ballsWaveG"></div>
                    <div id="ballsWaveG_5" class="ballsWaveG"></div>
                    <div id="ballsWaveG_6" class="ballsWaveG"></div>
                    <div id="ballsWaveG_7" class="ballsWaveG"></div>
                    <div id="ballsWaveG_8" class="ballsWaveG"></div>
                </div>
            </div>
            <div class="modal-body" id="emailbody" style="display: none;">
                <form id="sendbill">
                    <div class="row">
                        <div class="col">
                            <div class="input-group">
                                <div class="input-group-addon"><span class="icon-envelope-o"
                                                                     aria-hidden="true"></span></div>
                                <input type="text" class="form-control" placeholder="Email" name="mailtoc"
                                       value="wspilsted1@wikipedia.org">
                            </div>

                        </div>

                    </div>


                    <div class="row">
                        <div class="col mb-1"><label
                                    for="shortnote">Customer Name</label>
                            <input type="text" class="form-control"
                                   name="customername" value="Wyatan Spilsted"></div>
                    </div>
                    <div class="row">
                        <div class="col mb-1"><label
                                    for="shortnote">Subject</label>
                            <input type="text" class="form-control"
                                   name="subject" id="subject">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-1"><label
                                    for="shortnote">Message</label>
                            <textarea name="text" class="summernote" id="contents" title="Contents"></textarea></div>
                    </div>

                    <input type="hidden" class="form-control"
                           id="invoiceid" name="tid" value="26">
                    <input type="hidden" class="form-control"
                           id="emailtype" value="">


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal"> Close</button>
                <button type="button" class="btn btn-primary"
                        id="sendM">Send</button>
            </div>
        </div>
    </div>
</div>
<!--sms-->
<!-- Modal HTML -->
<div id="sendSMS" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Send SMS</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div id="request_sms">
                <div id="ballsWaveG1">
                    <div id="ballsWaveG_1" class="ballsWaveG"></div>
                    <div id="ballsWaveG_2" class="ballsWaveG"></div>
                    <div id="ballsWaveG_3" class="ballsWaveG"></div>
                    <div id="ballsWaveG_4" class="ballsWaveG"></div>
                    <div id="ballsWaveG_5" class="ballsWaveG"></div>
                    <div id="ballsWaveG_6" class="ballsWaveG"></div>
                    <div id="ballsWaveG_7" class="ballsWaveG"></div>
                    <div id="ballsWaveG_8" class="ballsWaveG"></div>
                </div>
            </div>
            <div class="modal-body" id="smsbody" style="display: none;">
                <form id="sendsms">
                    <div class="row">
                        <div class="col">
                            <div class="input-group">
                                <div class="input-group-addon"><span class="icon-envelope-o"
                                                                     aria-hidden="true"></span></div>
                                <input type="text" class="form-control" placeholder="SMS" name="mobile"
                                       value="202-243-5627">
                            </div>

                        </div>

                    </div>


                    <div class="row">
                        <div class="col mb-1"><label
                                    for="shortnote">Customer Name</label>
                            <input type="text" class="form-control"
                                   value="Wyatan Spilsted"></div>
                    </div>

                    <div class="row">
                        <div class="col mb-1"><label
                                    for="shortnote">Message</label>
                            <textarea class="form-control" name="text_message" id="sms_tem" title="Contents"
                                      rows="3"></textarea></div>
                    </div>


                    <input type="hidden" class="form-control"
                           id="smstype" value="">


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal"> Close</button>
                <button type="button" class="btn btn-primary"
                        id="submitSMS">Send</button>
            </div>
        </div>
    </div>
</div>

<div id="pop_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Change Status</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <div class="modal-body">
                <form id="form_model">


                    <div class="row">
                        <div class="col mb-1"><label
                                    for="pmethod">Mark As</label>
                            <select name="status" class="form-control mb-1">
                                <option value="paid">Paid</option>
                                <option value="due">Due</option>
                                <option value="partial">Partial</option>
                            </select>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" class="form-control required"
                               name="tid" id="invoiceid" value="26">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal"> Close</button>
                        <input type="hidden" id="action-url" value="invoices/update_status">
                        <button type="button" class="btn btn-primary"
                                id="submit_model">Change Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>

@endsection