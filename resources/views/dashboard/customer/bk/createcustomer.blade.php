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
</style>

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add New Customer</h4>
        </div>
<div class="card-body">

      <ul class="nav nav-tabs ll" id="myForm">
        <li class="active"><a href="#one">Contact</a></li>
        <li><a href="#two">Billing</a></li>
        <li><a href="#tw">Shipping</a></li>
        <li><a href="#tw1">Shipping 2</a></li>
        <li><a href="#three">Shipping  3</a></li>
        </ul>

      <form  method="post"  class="form-horizontal"  action="{{Route('create_customer_form')}}">
          @csrf
        <div class="tab-content">
          <div class="tab-pane active" id="one">
            <div class="row">
                <div class="col-lg-3 text-right">
                       <h2 style="font-weight:700;"> Contact</h2>
                </div>
            </div>
            <div class="form-group row">

            <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Customer <span style="coler:#f5451f !important">*</span> </label>

           <div class="col-sm-6 col-lg-3">
            <input type="text" placeholder="Customer"
                   class="form-control margin-bottom" name="customer">
             </div>
          </div>
           <div class="form-group row">

          <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Email</label>

          <div class="col-sm-6 col-lg-3">
            <input type="text" placeholder="Email"
                   class="form-control margin-bottom" name="email">
          </div>
          </div>
          <div class="form-group row">

          <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Phone</label>

          <div class="col-sm-6 col-lg-3">
            <input type="text" placeholder="Phone"
                   class="form-control margin-bottom" name="phone">
          </div>
          </div>
          <div class="form-group row">

          <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Contact</label>

          <div class="col-sm-6 col-lg-3">
            <input type="text" placeholder="Contact"
                   class="form-control margin-bottom" name="contact">
          </div>
          </div>
          <div class="form-group row">

          <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name"></label>

          <div class="col-sm-6 col-lg-3">
            <input type="text" placeholder="Contact"
                   class="form-control margin-bottom" name="contact2">
          </div>
          </div>
          <hr>


          </div>

          <div class="tab-pane" id="two">
            <div class="row">
                <div class="col-lg-3 text-right">
                       <h2 style="font-weight:700;"> Billing</h2>
                </div>
            </div>

            <div class="form-group row">

            <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Currency</label>

           <div class="col-sm-6 col-lg-3">
               <select class="form-control margin-bottom" name="currency">
                 <option>Select</option>
                 <option value="BDT">BDT</option>
                 <option value="Doller">Doller</option>
                 <option value="Rupee">Ruppee</option>

             </select>

             </div>


          </div>
           <div class="form-group row">

          <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Address line</label>

          <div class="col-sm-6 col-lg-3">
            <input type="text" placeholder="Address line"
                   class="form-control margin-bottom" name="BL_Ad">
          </div>
          </div>
          <div class="form-group row">

          <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Address line 2</label>

          <div class="col-sm-6 col-lg-3">
            <input type="text" placeholder="Address line 2"
                   class="form-control margin-bottom" name="BL_Ad33">
          </div>
          </div>
          <div class="form-group row">

          <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">City</label>

          <div class="col-sm-6 col-lg-3">
            <input type="text" placeholder="City"
                   class="form-control margin-bottom" name="city">
          </div>
          </div>
          <div class="form-group row">

          <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Postal/Zip code</label>

          <div class="col-sm-6 col-lg-3">
            <input type="text" placeholder="Postal/Zip code"
                   class="form-control margin-bottom" name="zpo">
          </div>
          </div>

          <div class="form-group row">

          <label class="col-sm-2 offset-sm-2 col-form-label col-form-label text-right mb-2"
              for="country">Country</label>

          <div class="col-sm-6 col-lg-3">
                  <select placeholder="Country"
                        class="form-control margin-bottom seagirl" name="country" id="country_id">
                      @foreach($country as $key)
                       <option value="{{$key->id}}"> {{$key->name}}</option>
                      @endforeach
                       </select>
          </div>
          </div>
          <div class="form-group row">

          <label class="col-sm-2 offset-sm-2 col-form-label col-form-label text-right mb-2" for="city">State</label>

          <div class="col-sm-6 col-lg-3">
                   <select placeholder="State"
                       class="form-control margin-bottom" name="state" id="city">
                   </select>
          </div>
          </div>
          <hr>




          </div>
              <div class="tab-pane" id="tw">


                                  <div class="row">
                                        <div class="col-lg-3 text-right">
                                              <p>Specify a shiping adress</p>
                                               <h2 style="font-weight:700;"> Shipping</h2>
                                        </div>
                                    </div>
                                        <div class="form-group row">

                                   <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Ship to contact </label>

                                   <div class="col-sm-6 col-lg-3">
                                       <input type="text" placeholder="Contact Person"
                                              class="form-control margin-bottom" name="contact2">
                                   </div>
                               </div>


                               <div class="form-group row">

                                  <label class="col-sm-2 offset-sm-2 col-form-label col-form-label text-right mb-2"
                                         for="country">Country</label>

                                  <div class="col-sm-6 col-lg-3">
                                             <select placeholder="Country"
                                                   class="form-control margin-bottom" name="country" id="country_idd">
                                                 @foreach($country as $key)
                                                  <option value="{{$key->id}}"> {{$key->name}}</option>
                                                 @endforeach
                                                  </select>
                                  </div>
                              </div>
                              <div class="form-group row">

                                  <label class="col-sm-2 offset-sm-2 col-form-label col-form-label text-right mb-2" for="city">State</label>

                                  <div class="col-sm-6 col-lg-3">
                                              <select placeholder="city"
                                                  class="form-control margin-bottom" name="state2" id="cityy">
                                              </select>
                                  </div>
                              </div>
                                  <div class="form-group row">

                                   <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name"> Address line</label>

                                   <div class="col-sm-6 col-lg-3">
                                       <input type="text" placeholder="Address line"
                                              class="form-control margin-bottom" name="BL_Ad2">
                                   </div>
                               </div>

                                  <div class="form-group row">

                                   <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Address line 2</label>

                                   <div class="col-sm-6 col-lg-3">
                                       <input type="text" placeholder="Address line 2"
                                              class="form-control margin-bottom" name="BL_Ad222">
                                   </div>
                               </div>
                                  <div class="form-group row">

                                   <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">City</label>

                                   <div class="col-sm-6 col-lg-3">
                                       <input type="text" placeholder="City"
                                              class="form-control margin-bottom" name="city3">
                                   </div>
                               </div>
                                <div class="form-group row">

                                   <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Postal/Zip code</label>

                                   <div class="col-sm-6 col-lg-3">
                                       <input type="text" placeholder="Postal/Zip Code"
                                              class="form-control margin-bottom" name="zpo3">
                                   </div>
                               </div>
                                  <div class="form-group row">

                                   <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Phone</label>

                                   <div class="col-sm-6 col-lg-3">
                                       <input type="text" placeholder="Phone"
                                              class="form-control margin-bottom" name="phone3">
                                   </div>
                               </div>
                                 <div class="form-group row">

                                   <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Notes</label>

                                   <div class="col-sm-6 col-lg-3">
                                       <textarea type="text" placeholder="Notes"
                                              class="form-control margin-bottom" name="note">
                                       </textarea>
                                   </div>
                               </div>
                                <hr>

          </div>


          <div class="tab-pane" id="tw1">


                               <div class="row">
                                     <div class="col-lg-3 text-right">
                                           <p>Specify a shiping adress</p>
                                            <h2 style="font-weight:700;"> Shipping 2</h2>
                                     </div>
                                 </div>
                                     <div class="form-group row">

                                <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Ship to contact </label>

                                <div class="col-sm-6 col-lg-3">
                                    <input type="text"  placeholder="Contact Person"
                                           class="form-control margin-bottom" name="contact_ship2">
                                </div>
                            </div>


                            <div class="form-group row">
                               <label class="col-sm-2 offset-sm-2 col-form-label col-form-label text-right mb-2"
                                      for="country">Country</label>

                               <div class="col-sm-6 col-lg-3">
                                          <select placeholder="Country"
                                                class="form-control margin-bottom" name="country3" id="country_iddd">
                                              @foreach($country as $key)
                                               <option value="{{$key->id}}"> {{$key->name}}</option>
                                              @endforeach
                                               </select>
                               </div>
                           </div>
                           <div class="form-group row">

                               <label class="col-sm-2 offset-sm-2 col-form-label col-form-label text-right mb-2" for="city">State</label>

                               <div class="col-sm-6 col-lg-3">
                                           <select placeholder="State"
                                               class="form-control margin-bottom" name="state3" id="cityyy">
                                           </select>
                               </div>
                           </div>



                               <div class="form-group row">

                                <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Address line</label>

                                <div class="col-sm-6 col-lg-3">
                                    <input type="text" placeholder="Address line"
                                           class="form-control margin-bottom" name="BL_Ad4">
                                </div>
                            </div>

                               <div class="form-group row">

                                <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Address line 2</label>

                                <div class="col-sm-6 col-lg-3">
                                    <input type="text" placeholder="Address line 2"
                                           class="form-control margin-bottom" name="BL_Ad5">
                                </div>
                            </div>
                               <div class="form-group row">

                                <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">City</label>

                                <div class="col-sm-6 col-lg-3">
                                    <input type="text" placeholder="City"
                                           class="form-control margin-bottom" name="city5">
                                </div>
                            </div>
                             <div class="form-group row">

                                <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Postal/Zip code</label>

                                <div class="col-sm-6 col-lg-3">
                                    <input type="text" placeholder="Postal/Zip code"
                                           class="form-control margin-bottom" name="zpo4">
                                </div>
                            </div>
                               <div class="form-group row">

                                <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Phone</label>

                                <div class="col-sm-6 col-lg-3">
                                    <input type="text" placeholder="Phone"
                                           class="form-control margin-bottom" name="phone4">
                                </div>
                            </div>
                              <div class="form-group row">

                                <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Notes</label>

                                <div class="col-sm-6 col-lg-3">
                                    <textarea type="text" placeholder="Notes"
                                           class="form-control margin-bottom" name="note2">
                                    </textarea>
                                </div>
                            </div>
                             <hr>


       </div>
          <div class="tab-pane" id="three">
            <div class="row">
                  <div class="col-lg-3 text-right">
                        <p>Specify a shiping adress</p>
                         <h2 style="font-weight:700;"> Shipping 3</h2>
                  </div>
              </div>
                  <div class="form-group row">

             <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Ship to contact </label>

             <div class="col-sm-6 col-lg-3">
                 <input type="text" placeholder="contact Person"
                        class="form-control margin-bottom" name="contact_ship">
             </div>
         </div>


         <div class="form-group row">
            <label class="col-sm-2 offset-sm-2 col-form-label col-form-label text-right mb-2"
                   for="country">Country</label>

            <div class="col-sm-6 col-lg-3">
                       <select placeholder="Country"
                             class="form-control margin-bottom" name="country6" id="country_id5">
                           @foreach($country as $key)
                            <option value="{{$key->id}}"> {{$key->name}}</option>
                           @endforeach
                            </select>
            </div>
        </div>
        <div class="form-group row">

            <label class="col-sm-2 offset-sm-2 col-form-label col-form-label text-right mb-2" for="city">State</label>

            <div class="col-sm-6 col-lg-3">
                        <select placeholder="State"
                            class="form-control margin-bottom" name="state6" id="city5">
                        </select>
            </div>
        </div>


            <div class="form-group row">

             <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Address line</label>

             <div class="col-sm-6 col-lg-3">
                 <input type="text" placeholder="Address line"
                        class="form-control margin-bottom" name="Bilingadres2">
             </div>
         </div>

            <div class="form-group row">

             <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Address line 2</label>

             <div class="col-sm-6 col-lg-3">
                 <input type="text" placeholder="Address line 2"
                        class="form-control margin-bottom" name="BL_Ad9">
             </div>
         </div>
            <div class="form-group row">

             <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">City</label>

             <div class="col-sm-6 col-lg-3">
                 <input type="text" placeholder="City"
                        class="form-control margin-bottom" name="phone11">
             </div>
         </div>
          <div class="form-group row">

             <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Postal/Zip code</label>

             <div class="col-sm-6 col-lg-3">
                 <input type="text" placeholder="Postal/Zip code"
                        class="form-control margin-bottom" name="zpo11">
             </div>
         </div>
            <div class="form-group row">

             <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Phone</label>

             <div class="col-sm-6 col-lg-3">
                 <input type="text" placeholder="Phone"
                        class="form-control margin-bottom" name="phone12">
             </div>
         </div>
           <div class="form-group row">

             <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Notes</label>

             <div class="col-sm-6 col-lg-3">
                 <textarea type="text" placeholder="Notes"
                        class="form-control margin-bottom" name="note3">
                 </textarea>
             </div>
         </div>
         <div class="form-group row">
                             <label class="col-sm-3 col-form-label" for="pay_cat"></label>

                             <div class="col-sm-4" style="padding-left:17%">
                                 <input type="submit" class="btn btn-primary btn-md" value="Save">


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
 $('#country_id').change(function() {
   var country_id = $(this).val();
   $.ajaxSetup({
     headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
   });
   $.ajax({
     type:'POST',
     url:'/getcitylist',
     data:{country_id: country_id},
     success: function (data) {
       $( "#city" ).html(data);
     }
   });
 });

 $('#country_idd').change(function() {
   var country_id = $(this).val();
   $.ajaxSetup({
     headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
   });
   $.ajax({
     type:'POST',
     url:'/getcitylist',
     data:{country_id: country_id},
     success: function (data) {
       $( "#cityy" ).html(data);
     }
   });
 });
 $('#country_iddd').change(function() {
   var country_id = $(this).val();
   $.ajaxSetup({
     headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
   });
   $.ajax({
     type:'POST',
     url:'/getcitylist',
     data:{country_id: country_id},
     success: function (data) {
       $( "#cityyy" ).html(data);
     }
   });
 });
 $('#country_id5').change(function() {
   var country_id = $(this).val();
   $.ajaxSetup({
     headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
   });
   $.ajax({
     type:'POST',
     url:'/getcitylist',
     data:{country_id: country_id},
     success: function (data) {
       $( "#city5" ).html(data);
     }
   });
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
