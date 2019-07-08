 @extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
        <style>
     .table1 {
    width: 100%;
    border-bottom: 1px dashed #5e5e5e;
}

.td2 {
    width: 7%;
}

.td1 {
    width: 30%;

}

.compane-name {
    font-size: 20px;
    text-transform: capitalize;
    font-weight: 600;
    text-align: right;

}

.company-adress {
    font-size: 14px;
    line-height: 20px;
    text-align: right;
}

.company-group-head {
    font-weight: 700;
    font-size: 14px;

}

.company-group-adress {
    font-size: 13px;
    line-height: 20px;
    margin-top: -12px;
}

.td3 {
    transform: translateY(-20px);

}

.td4 {
    width: 30%;
}

.td5 {
    transform: translateY(-20px);
}

.td3 p {
    line-height: 3px;
    font-size: 14px;
    font-weight: 700;
    text-align: right;

}

.td3 p {
    line-height: 3px;
    font-size: 14px;
    font-weight: 700;

}


.td3 p span {
    font-weight: 400;
    padding-left: 10px;
    width: 50px;
    text-align: left;

}

.odd-td {
    width: 40%;
    transform: translateX(149%);
}
@media (min-width:576px) and (max-width:768px) {
    .company-adress {
        font-size: 11px;
        line-height: 16px;
        text-align: left;
    }

    .compane-name {
        text-align: left;
    }

    .td3 p {
        line-height: 1px;
        font-size: 9px;

    }

    .td3 p span {
        padding-left: 0px;

    }
}

@media (min-width: 320px) and (max-width:575px) {
    .company-adress {
        font-size: 11px;
        line-height: 16px;
        text-align: left;
    }

    .compane-name {
        text-align: left;
    }

    .td3 p {
        line-height: 1px;
        font-size: 9px;

    }

    .td3 p span {
        padding-left: 0px;

    }
}</style>
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



                            <a href="edit?id=26" class="btn btn-warning mb-1">
                                <i
                                        class="fa fa-pencil"></i> Edit Invoice
                            </a>

                            
                                        <div class="btn-group ">
                                <button type="button" class="btn btn-success mb-1 btn-min-width dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="fa fa-print"></i> Print                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item"
                                       href="#">Print</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item"
                                       href="#">Download</a>

                                </div>
                            </div>




                            </div>                    </div>
                </div>
 
 <section style="padding: 30px 0;">
         <div class="container">
             <div class="row">
                 <table class="table1">
                     <tr>
                         <td class="td1">
                             <img src="{{asset('images/lo.png')}}" style="width: 241PX;height: 135px;" alt="">
                         </td>
                         <td class="td2">
                             <h6 class="compane-name">Orika Corporation </h6>
                             <p class="company-adress"> House no: 557/4, Flat No: (1st floor),<br> Shameem Sarani, Shewrapara,<br> Mirpur, Dhaka 1216 <br>Bangladesh <br>Web: www.orika.com.bd <br>Hotline: +8809638 786 786<br> Mobile: 01712662245</p>
                         </td>
                     </tr>

                 </table>
             </div>
         </div>
     </section>
     <!--     ==============another section===============-->
     <section>
         <div class="container">
             <div class="row">
                 <table style="width:95%; margin:auto">
                     <tr>
                         <td class="td4">
                             <h6 class="company-group-head">Paruma Construction Limited</h6>
                             <p class="company-group-adress"> Syful Amam <br>9th Flor, TBC Bhaban <br>Karwan Bazer,Dhaka-1212<br> 01712662245 <br> 0298189302 <br> almas@baygroup.com</p>
                         </td>
                         <td class="td5">
                             <h6 class="company-group-head">Mr. Jabe Ali </h6>
                             <p class="company-group-adress"> Hazrat Shajalal International Airport<br> Kurmitola,Dhaka-1216 <br> Bangladesh <br> 01713506475</p>
                         </td>

                         <td class="td3">
                             <p>Estimate Number: <span>76543</span> </p>
                             <p>Reference Number:<span>00.00</span> </p>
                             <p>Estimate Date: <span>00.00</span></p>
                             <p>Payment Due:<span>00.00</span> </p>
                             <p>Amount Due (BDT):<span>000.00</span> </p>
                         </td>
                     </tr>
                 </table>
             </div>
         </div>

     </section>
     <!--     ==============another section===============-->
     <section>
         <div class="container">
             <img src="{{asset('images/line.png')}}" class="img-fluid" alt="">
         </div>
     </section>
 
 
     <section style="background:url(images/bg2.png); background-position: center;background-repeat: no-repeat">
         <div class="container">
             <div class="row">
                 <table style="width:100%;">
                     <tr>
                         <td style="padding-left: 5%; padding-top: 5px;">
                             <p style="font-size:14px; font-weight:700;">¾” Stone chips (19mm stone)</p>
                             <p style="font-size:14px; line-height: 20px; transform: translateY(-16px);">Bhutan Tossa Stone Chips, This rate including Transport ,Site <br>measurement <br>Chalan No# 2152454 & 1254112 & 1225574 </p>

                         </td>
                         <td>1250.00</td>
                         <td>cft</td>
                         <td>182.50 </td>
                     </tr>
                     <tr>
                         <td style="padding-left: 5%; padding-top: 5px;">
                             <p style="font-size:14px; font-weight:700;">¾” Stone chips (19mm stone)</p>
                             <p style="font-size:14px; line-height: 20px; transform: translateY(-16px);">Voalagang Stone Chips, This rate including Transport ,Site measurement</p>

                         </td>
                         <td>1250.00</td>
                         <td>cft</td>
                         <td>182.50 </td>
                     </tr>
                     <tr>
                         <td style="padding-left: 5%; padding-top: 5px;">
                             <p style="font-size:14px; font-weight:700;">¾” Stone chips (19mm stone)</p>
                             <p style="font-size:14px; line-height: 20px; transform: translateY(-16px);">Voalagang Stone Chips, This rate including Transport ,Site measurement</p>
                         </td>
                     </tr>
                     <tr>
                         <td style="padding-left: 5%; padding-top: 5px;">
                             <p style="font-size:14px; font-weight:700;">¾” Stone chips (19mm stone)</p>
                             <p style="font-size:14px; line-height: 20px; transform: translateY(-16px);">Voalagang Stone Chips, This rate including Transport ,Site measurement</p>
                         </td>
                     </tr>
                     <tr>
                         <td style="padding-left: 5%; padding-top: 5px;">
                             <p style="font-size:14px; font-weight:700;">¾” Stone chips (19mm stone)</p>
                             <p style="font-size:14px; line-height: 20px; transform: translateY(-16px);">Voalagang Stone Chips, This rate including Transport ,Site measurement</p>
                         </td>
                     </tr>
                     <tr style="border-top:1px dashed #5e5e5e;">
                         <td class="odd-td">
                         <p  style="border-bottom:1px dashed #5e5e5e; font-size:14px; font-weight:700; margin-top:15px;">Subtotal:</p>
                         <p  style="font-size:14px; font-weight:700">Discount:</p>
                         <p  style="border-bottom:1px dashed #5e5e5e; font-size:14px; font-weight:700">Vat & Tax:</p>
                         <p  style="border-bottom:1px dashed #5e5e5e; font-size:14px; font-weight:700">Amount Due (BDT):</p> 
                         
                         </td>  
                     </tr> 
                 </table>
             </div>
         </div>
     </section> 
            </div> 
            </div>
        </div>
    </div>
</div>

</div>
</div>

</div>
</div>
</div>

@endsection