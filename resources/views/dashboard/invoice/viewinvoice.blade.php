@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
  <style>
  .line-p{
      font-weight: bold;
      font-size: 17px;
  }
     .ship {
         margin-left: 43%;

     }

     .ship2 {
         margin-left: 38%;
         margin-top: 65px;
     }

     .ship h5 {
         font-size: 16px;
         text-transform: capitalize;
         font-weight: 700;
     }

     .ship p {
         font-size: 16px;
         text-transform: capitalize;
         font-weight: 400;
         line-height: 20px;
     }

     .delivery_notes {
         line-height: 20px;
     }

     .delivery_notes h6 {
         text-align: center;
         width: 73%;
         text-transform: capitalize;
         font-weight: 700;
         padding: 3px 0;
         margin-left: 8%;
     }

     .delivery_notes h6 span {
         padding-right: 8px;

     }

     .delivery_notes p span {
         font-weight: 700;
         text-transform: capitalize;
         padding-right: 8px;

     }

     .delivery_notes p {
         margin-left: 42%;
         line-height: 20px;

     }

     .second-row {
         margin-top: 10px;
     }

     .address2 {
         margin-left: 17%;
     }

     .vehicle {
         padding-left: 25%;
         font-size: 14px;
     }

     .vehicle p {
         font-weight: 500;
     }

     .vehicle p span {
         text-transform: capitalize;
         font-weight: 700;
         padding-right: 20px;
     }

     .driver {
         padding-left: 28%;
         font-size: 14px;
     }

     .driver p span {
         text-transform: capitalize;
         font-weight: 700;
         padding-right: 20px;
     }

     .third-row {
         margin-top: 20px;
     }

     .fouth-row {
         margin-top: 30px;
     }

     .tablee {
         width: 90%;
         border-top: 1px dashed #000000;
         border-bottom: 1px dashed #000000;
         margin-top: 30px;
         margin: auto;
     }

     .tablee th {
         text-align: center;

     }

     .tablee td {
         text-align: center;
         padding-top: 25px;
         padding-bottom: 6px;
     }

     .table3 {
         width: 90%;
         margin: auto;
     }

     .table3 th p {
         font-size: 14px;
     }

     .table3 th {
         text-align: center;
         padding-top: 60px;
     }

     .main_title {
         color: #0070c0;
         font-weight: 700;
         font-size: 20px;
     }

     .main-adress {
         font-size: 18px;
     }

     .hotline {
         color: #5e5e5e;
         font-size: 20px;

     }

     @media (min-width:576px) and (max-width:768px) {
         .ship {
             margin-left: 2%;

         }

         .ship2 {
             margin-left: 2%;

         }


         .address2 {
             margin-left: 2%;
         }

         .delivery_notes h6 {
             width: 100%;
             text-transform: capitalize;
             margin-left: 0%;
         }

         .delivery_notes p {
             margin-left: 5%;
         }

         .vehicle {
             padding-left: 2%;

         }

         .driver {
             padding-left: 2%;

         }

         .tablee td {
             font-size: 10px;
         }

     }

     @media (min-width: 320px) and (max-width:575px) {
         .ship {
             margin-left: 2%;

         }

         .ship2 {
             margin-left: 2%;

         }


         .address2 {
             margin-left: 2%;
         }

         .delivery_notes h6 {
             width: 100%;
             text-transform: capitalize;
             margin-left: 0%;
         }

         .delivery_notes p {
             margin-left: 5%;
         }

         .vehicle {
             padding-left: 2%;

         }

         .driver {
             padding-left: 2%;

         }

         .tablee td {
             font-size: 10px;
         }

         .main_title {

             font-size: 16px;
         }

         .main-adress {
             font-size: 14px;
         }
         .hotline {
         font-size:15px;

     }

     }

 </style>
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
                      <a href="edit?id=26" class="btn btn-warning mb-1"><i class="fa fa-pencil"></i> Edit Invoice</a>
                      <div class="btn-group">
                        <button type="button" class="btn btn-success mb-1 btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-print"></i> Print</button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Print</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Download</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

@foreach(['Company Copy','Customer Copy'] as $k=> $item)
    <section style="background: url({{asset('images/bg2.png')}});padding:40px 0;background-repeat:no-repeat;background-position: center;">
       <div class="container">
           <div class="row">
               <table style="width:76%;margin: auto;">
                   <tr>
                       <td style="text-align: right">
                           <div><img style="width:115px;height:115px;" src="{{asset('images/logo.jpg')}}" alt=""></div>
                       </td>
                       <td style="text-align:center">
                           <div>
                               <h1 class="main_title">ORIKA CORPORATION</h1>
                               <p class="main-adress">Corporate office: 557/4, (1st floor), Shameem Sarani, Shewrapara,<br>Mirpur, Dhaka 1216 </p>
                               <h3 class="hotline">Hotline: +8809638 786 786</h3>
                           </div>
                       </td>
                       <td style="text-align:left">
                           <div class="delivery" style="padding-top:5px;text-align:left;">
                               <h6 style="font-size:22px;">Delivery Notes</h6>
                               <p style="font-size:16px;font-weight:500;font-family:'Playfair Display', serif;padding-left: 20px;">({{$item}})</p>
                           </div>
                       </td>
                   </tr>

               </table>


               <table style="width:100%; margin-top:20px;">
                   <tr>
                       <td>
                           <div class="address">
                               <div class="ship">
                                   <h6 style="color: #5e5e5e;font-size: 17px;text-transform: uppercase;font-weight: 600;padding-top: 5px;">SHIP TO</h6>
                                   <h5>{{ $invoice->shipping_address }}</h5>
                                   <p></p>
                               </div>
                           </div>
                       </td>
                       <td style="transform: translateY(-55px);">
                           <div class="address">
                               <div class="ship ship2">
                                   <h6 style="color:#5e5e5e;font-size:17px;text-transform:uppercase;font-weight:600;">Bill TO</h6>
                                   <h5>{{$invoice->cusinfo->customer}}</h5>
                               </div>
                           </div>
                       </td>
                       <td style="transform: translateY(-15px);">
                           <div class="address">
                               <div class="ship ml-0">
                                   <h6 style="color:#5e5e5e;font-size:17px;text-transform:uppercase;font-weight:600;">Challan No</h6>
                                   <h5>{{$invoice->chalan_number}}</h5>
                               </div>
                           </div>
                       </td>
                   </tr>
                   <tr>
                     <td><h6 class="ship"><strong>P.O. No:</strong> {{$invoice->po_number}}</h6></td>
                     <td><h6 style="margin-left:38%"><strong>Date:</strong> {{$invoice->date}}</h6></td>
                     <td><h6><strong>Delivery Note:</strong> </h6></td>
                   </tr>
               </table>


           </div>
       </div>
       <div class="container" style="margin: 50px 0;">
           <div class="row">
               <table style="width:100%">
                   <tr>
                       <td style="text-align: right;">
                           <div class="vehicle">
                               <p><span>Vehicle no:</span>  {{$invoice->track_number}}</p>
                           </div>
                       </td>
                       <td style="text-align: right;">
                           <div class="driver">
                               <p><span>Driver Mobile No:</span>  {{$invoice->driver_mobile}}</p>
                           </div>
                       </td>
                   </tr>
               </table>
           </div>
       </div>
       <div class="container">
           <div class="row">
               <table class="tablee">
                   <tr>
                       <th>SL</th>
                       <th>Item</th>
                       <th>Description</th>
                       <th>Quantity</th>
                   </tr>
                   @php $products = json_decode($invoice->products); @endphp
                   @forelse($products as $k2 => $product)
                   <tr>
                       <td>{{ $k2+1 }}</td>
                       <td>{{$product->name}}</td>
                       <td>{{$product->description}}</td>
                       <td>{{$product->quantity}}</td>
                   </tr>
                   @empty
                   <tr>
                     <td colspan="4">Product not found!</td>
                   </tr>
                   @endforelse
               </table>
           </div>

           <div class="row">
               <table class="table3">
                   <tr>
                       <th>
                           <p>PREPARED BY</p>
                       </th>
                       <th>
                           <p>AUTHORIZE BY</p>
                       </th>
                       <th>
                           <p>RECEIVE BY</p>
                       </th>
                   </tr>
               </table>
           </div>
       </div>
    </section>
    @if($k===0)
    <div class="hr" style="margin:20px 0;border-bottom:1px dashed"></div>
    @endif
@endforeach


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
