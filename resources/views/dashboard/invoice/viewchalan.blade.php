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
                             <img src="images/lo.png" style="width: 241PX;height: 135px;" alt="">
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
                             <h6 class="company-group-head">{{$iv->customer}}</h6>
                             <p class="company-group-adress"> {{$iv->city}}<br>{{$iv->BL_Ad}} <br>{{$iv->state}}<br> {{$iv->phone}} <br> {{$iv->phone3}} <br> {{$iv->email}}</p>
                         </td>
                         <td class="td5">
                             <h6 class="company-group-head">{{$iv->contact}} </h6>
                             <p class="company-group-adress"> {{$iv->BL_Ad222}} <br> {{$iv->city3}} <br> {{$iv->state3}} <br> {{$iv->phone}}</p>
                         </td>

                         <td class="td3">
                             <p>Invoice Number: <span>{{$in->po_number}}</span> </p>
                             <p>Po Number:<span>{{$in->chalan_name}}</span> </p>
                             <p>Invoice Date: <span>{{$in->date}}.00</span></p>
                             <p>Payment Due:<span>00.00</span> </p>
                             <p>Amount Due (BDT):<span>{{$in->ammount}}.00</span> </p>
                         </td>
                     </tr>
                 </table>
             </div>
         </div>

     </section>
     <!--     ==============another section===============-->
     <section>
         <div class="container">
             <img src="images/line.png" class="img-fluid" alt=""style="margin-bottom:15px;">
         </div>
     </section>


     <section style="background: url(images/bg2.png); background-position: center;background-repeat: no-repeat">
         <div class="container">
             <div class="row">
                 <table style="width:100%;">
                   <tr>
                     <th style="text-align: center;">Name</th>
                     <th>Price</th>
                     <th>Unit</th>
                     <th>Quantity</th>
                   </tr>
                     <tr>
                         <td style="padding-left: 5%; padding-top: 5px;">
                             <p style="font-size:14px; font-weight:700;">{{$pro->name}}</p>
                             <p style="font-size:14px; line-height: 20px; transform: translateY(-16px);">{{$pro->Describtion}}  <br>Chalan No# {{$in->chalan_name}} </p>

                         </td>
                         <td>{{$pro->price}}.00</td>
                         <td>{{$unit->name}}</td>
                         <td>{{$in->quantity}}}.00 </td>
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
