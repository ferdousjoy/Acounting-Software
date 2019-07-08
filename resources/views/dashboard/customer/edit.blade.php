@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
@include('layouts.inc.success')
<style>

.tab-pane {
    padding:20px;
}
.ll li{
    margin-right: 30px;
}

.ll li a{
  font-size:18px;
  color:inherit;
  font-weight: 700;
  transition: .5s;
}
.ll li a:hover{
  color:green;
}
.row > .text-right > h2{
    color:green;
}

.tabbtn{
  margin-top: 20px;
}


.table th,.table td{padding:.75rem}
.table td>p:first-child{margin-bottom:10px}
.table td>p:last-child{margin-bottom:0}
.table td.actions{position:relative;}
.table tr:first-child .delete{display:none}
.table td>.delete{
    position: absolute;
    z-index: 3;
    right: 0;
    width: 15px;
    height: 15px;
    margin: 0;
    padding: 0;
    text-align: center;
    line-height: 10px;
    border-radius: 50%;
    border: 0;
    color: #fff;
    background: red;
}
.table td>.delete:focus{outline:0}
</style>

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Customer</h4>
        </div>
<div class="card-body">

      <ul class="nav nav-tabs ll" id="myForm">
        <li class="active"><a href="#profile">Profile</a></li>
        <li><a href="#billingAddress">Billing Address</a></li>
        <li><a href="#shippingAddress">Shipping Addresses</a></li>
        </ul>

      <form  method="post" id="customerForm" class="form-horizontal"  action="{{route('customers.update',$customer->id)}}">
          @csrf @method('PUT')
        <div class="tab-content">
          <div class="tab-pane active" id="profile">
            <div class="row">
                <div class="col-lg-3 text-right">
                  <h2 style="font-weight:700;">Profile</h2>
                </div>
            </div>
            <div class="form-group row">

              <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Name <span style="color:#f5451f!important">*</span></label>

             <div class="col-sm-6 col-lg-3">
               <input type="text" placeholder="Name" class="form-control margin-bottom" name="name" value="{{ $customer->name }}">
             </div>
           </div>
           <div class="form-group row">

             <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Email <span style="color:#f5451f!important">*</span></label>

            <div class="col-sm-6 col-lg-3">
              <input type="text" placeholder="Email" class="form-control margin-bottom" name="email" value="{{ $customer->email }}">
            </div>
          </div>
          <div class="form-group row">

            <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Phone <span style="color:#f5451f!important">*</span></label>

            <div class="col-sm-6 col-lg-3">
              <input type="text" placeholder="Phone" class="form-control margin-bottom" name="phone" value="{{ $customer->phone }}">
            </div>
          </div>
          <div class="form-group row">

            <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Contact</label>

            <div class="col-sm-6 col-lg-3">
              <input type="text" placeholder="Contact" class="form-control margin-bottom" name="contact" value="{{ $customer->contact }}">
            </div>
          </div>
          <div class="form-group row">

            <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name"></label>

            <div class="col-sm-6 col-lg-3">
              <input type="text" placeholder="Contact" class="form-control margin-bottom" name="contact2" value="{{ $customer->contact2 }}">
            </div>

          </div>

          <div class="form-group row">
            <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Currency <span style="color:#f5451f!important">*</span></label>
            <div class="col-sm-6 col-lg-3">
              <select class="form-control margin-bottom" name="currency">
                <option>Select</option>
                <option value="BDT"{{ ($customer->currency =='BDT')?' selected':'' }}>BDT</option>
                <option value="Doller"{{ ($customer->currency =='Doller')?' selected':'' }}>Doller</option>
                <option value="Rupee"{{ ($customer->currency =='Rupee')?' selected':'' }}>Ruppee</option>
              </select>
            </div>
          </div>

          <hr>


          </div>

          <div class="tab-pane" id="billingAddress">
            <h2 style="font-weight:700;color:green;">Billing</h2>
            @php
              $billing_address = json_decode($customer->billing_address);
              $cities = App\City::where('country_id',$billing_address->country)->get();
            @endphp
            <table class="table table-bordered addressTable">
              <thead>
                <tr>
                  <th>Address</th>
                  <th>Country/State</th>
                  <th>City/Zip</th>
                </tr>
              </thead>
              <tbody>
                <tr class="align-middle">
                  <td>
                    <p><input type="text" placeholder="Address line" class="form-control" name="billing_address[line]" value="{{ $billing_address->line }}"></p>
                    <p><input type="text" placeholder="Address line2" class="form-control" name="billing_address[line2]" value="{{ $billing_address->line2 }}"></p>
                  </td>
                  <td class="align-middle">
                    <p><select class="form-control country" name="billing_address[country]" style="width:100%">
                        <option selected disabled>--Select Country--</option>
                        @foreach($countries as $country)
                         <option value="{{ $country->id }}"{{ ($country->id == $billing_address->country)?' selected':'' }}> {{ $country->name }}</option>
                        @endforeach
                    </select></p>
                    <p><input type="text" class="form-control state" name="billing_address[state]" placeholder="State" value="{{ $billing_address->state }}"></p>
                  </td>

                  <td class="align-middle">

                    <p><select class="form-control city" name="billing_address[city]" style="width:100%">
                      <option selected disabled>--Select city--</option>
                      @foreach ($cities as $k => $city)
                        <option value="{{ $city->id }}"{{ ($city->id == $billing_address->city)?' selected':'' }}>{{ $city->name }}</option>
                      @endforeach
                    </select></p>
                    <p><input type="text" placeholder="Postal/Zip code" class="form-control" name="billing_address[zip]" value="{{ $billing_address->zip }}"></p>
                  </td>
                </tr>
              </tbody>
            </table>


          <hr>
          </div>

              <div class="tab-pane" id="shippingAddress">
                <h2 style="font-weight:700;color:green;">Shipping</h2>
                @php
                  $shipping_addresses = json_decode($customer->shipping_addresses);
                  //$cities = App\City::where('country_id',$shipping_addresses->country)->get();
                @endphp
                <table class="table table-bordered addressTable">
                  <thead>
                    <tr>
                      <th>Phone/Contact</th>
                      <th>Address</th>
                      <th>Country/State</th>
                      <th>City/Zip</th>
                      <th>Notes</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($shipping_addresses as $shipping_address)
                    @php $cities = App\City::where('country_id',$shipping_address->country)->get(); @endphp
                    <tr>
                      <td class="align-middle">
                        <p><input type="text" class="form-control" placeholder="Ship to contact" name="shipping_addresses[contact][]" value="{{ $shipping_address->contact }}"></p>
                        <p><input type="text" class="form-control" placeholder="Phone" name="shipping_addresses[phone][]" value="{{ $shipping_address->phone }}"></p>
                      </td>
                      <td class="align-middle">
                        <p><input type="text" placeholder="Address line" class="form-control" name="shipping_addresses[line][]" value="{{ $shipping_address->line }}"></p>
                        <p><input type="text" placeholder="Address line2" class="form-control" name="shipping_addresses[line2][]" value="{{ $shipping_address->line2 }}"></p>
                      </td>
                      <td class="align-middle">
                        <p><select class="form-control country" name="shipping_addresses[country][]" style="width:100%">
                            <option selected disabled>--Select Country--</option>
                            @foreach($countries as $country)
                             <option value="{{ $country->id }}"{{ ($country->id == $shipping_address->country)?' selected':'' }}> {{ $country->name }}</option>
                            @endforeach
                        </select></p>
                        <p>
                          {{--<select class="form-control state" name="shipping_addresses[state][]" style="width:100%">
                            <option selected disabled>--Select State--</option>
                          </select>--}}
                          <input type="text" class="form-control state" placeholder="State" name="shipping_addresses[state][]" value="{{ $shipping_address->state }}">
                        </p>
                      </td>
                      <td class="align-middle">
                        <p><select class="form-control city" name="shipping_addresses[city][]" style="width:100%">
                          <option selected disabled>--Select City--</option>
                          @foreach ($cities as $k => $city)
                            <option value="{{ $city->id }}"{{ ($city->id == $shipping_address->city)?' selected':'' }}>{{ $city->name }}</option>
                          @endforeach
                        </select></p>
                        <p><input type="text" placeholder="Postal/Zip code" class="form-control" name="shipping_addresses[zip][]" value="{{ $shipping_address->zip }}"></p>
                      </td>
                      <td class="align-middle actions">
                        <button type="button" class="delete">&times;</button>
                        <textarea class="form-control" name="shipping_addresses[note][]" rows="4" cols="25">{{ $shipping_address->note }}</textarea>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="5"><button type="button" id="newAddress" class="btn btn-primary btn-block"><i class="fa fa-plus"></i>  Add Another Address</button>  </td>
                    </tr>
                  </tfoot>
                </table>
              <hr>

              <div class="form-group row">
                  <label class="col-sm-3 col-form-label" for="pay_cat"></label>
                  <div class="col-sm-4" style="padding-left:17%">
                      <input type="submit" class="btn btn-primary btn-md" value="Update">
                  </div>
              </div>
          </div>

        </div>
      </form>
</div>
        <br>

    </div>
</div>

</div>
</div>
</div>
@endsection
@section('footer_scripts')
  <script>
  $(document).ready(function(){
    $form = $('#customerForm');

    $form.on('change','.country',function() {
     $thatTr = $(this).parents('tr');
     var country_id = $(this).val();
     $.ajax({
       headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
       method:'POST',
       url:'{{ url("/customers/getcitylist") }}',
       data:{country_id: country_id},
       success: function (data) {
         $thatTr.find( ".city" ).html(data);
       }
     });
   });

   $form.on('click','#newAddress',function(){
     $table = $(this).parents('.addressTable');
     $tbody = $table.find('tbody');
     $tr = $tbody.find('tr:first-child').clone();
     $tr.find('input[type="text"]').val('');
     $tr.find('textarea').val('');
     $tr.find('.city').html('<option selected disabled>--Select City--</option>');
     $tr.appendTo($tbody);
   });

   $form.on('click','td.actions>.delete',function(){
     $(this).parents('tr').remove();
   });


    $('#myForm a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });


});
</script>
<script>
$(document).ready(function() {
    $('.seagirl').select2();
});
</script>
@endsection
