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
            <h4 class="card-title">Edit Customer</h4>
        </div>
<div class="card-body">

      <ul class="nav nav-tabs ll" id="myForm">
        <li class="active"><a href="#one">Contact</a></li>
        <li><a href="#two">Billing</a></li>
        <li><a href="#tw">Shipping</a></li>
        <li><a href="#tw1">Shipping 2</a></li>
        <li><a href="#three">Shipping  3</a></li>
        </ul>

      <form  method="post"  class="form-horizontal"  action="{{Route('update_customer')}}">
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
             <input type="hidden" name="product_id" value="{{$customeredit->id}}">
            <input type="text" placeholder="Customer"
                   class="form-control margin-bottom" name="customer" value="{{$customeredit->customer}}" >
             </div>
          </div>
           <div class="form-group row">

          <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Email</label>

          <div class="col-sm-6 col-lg-3">
            <input type="text" placeholder="Email"
                   class="form-control margin-bottom" name="email" value="{{$customeredit->email}}">
          </div>
          </div>
          <div class="form-group row">

          <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Phone</label>

          <div class="col-sm-6 col-lg-3">
            <input type="text" placeholder="Phone"
                   class="form-control margin-bottom" name="phone" value="{{$customeredit->phone}}">
          </div>
          </div>
          <div class="form-group row">

          <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Contact</label>

          <div class="col-sm-6 col-lg-3">
            <input type="text" placeholder="Contact"
                   class="form-control margin-bottom" name="contact" value="{{$customeredit->contact}}">
          </div>
          </div>
          <div class="form-group row">

          <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name"></label>

          <div class="col-sm-6 col-lg-3">
            <input type="text" placeholder="Contact"
                   class="form-control margin-bottom" name="contact2" value="{{$customeredit->contact2}}">
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
               <select class="form-control margin-bottom" name="currency" value="{{$customeredit->currency}}">
                 <option>Select</option>
                 <option value="BD">BD</option>
                 <option value="Doller">Doller</option>
                 <option value="Rupee">Ruppee</option>

             </select>

             </div>


          </div>
           <div class="form-group row">

          <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Billing address</label>

          <div class="col-sm-6 col-lg-3">
            <input type="text" placeholder="Billing address"
                   class="form-control margin-bottom" name="BL_Ad" value="{{$customeredit->BL_Ad}}">
          </div>
          </div>
          <div class="form-group row">

          <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Billing address 2</label>

          <div class="col-sm-6 col-lg-3">
            <input type="text" placeholder="Billing address 2"
                   class="form-control margin-bottom" name="BL_Ad33" value="{{$customeredit->BL_Ad33}}">
          </div>
          </div>
          <div class="form-group row">

          <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">City</label>

          <div class="col-sm-6 col-lg-3">
            <input type="text" placeholder="Phone"
                   class="form-control margin-bottom" name="city" value="{{$customeredit->city}}">
          </div>
          </div>
          <div class="form-group row">

          <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Postal/Zip code</label>

          <div class="col-sm-6 col-lg-3">
            <input type="text" placeholder="Contact"
                   class="form-control margin-bottom" name="zpo" value="{{$customeredit->zpo}}">
          </div>
          </div>

          <div class="form-group row">

          <label class="col-sm-2 offset-sm-2 col-form-label col-form-label text-right mb-2"
              for="country">Country</label>

          <div class="col-sm-6 col-lg-3">
                  <select placeholder="Country"
                        class="form-control margin-bottom" name="country" id="country_id" value="{{$customeredit->country}}" >
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
                       class="form-control margin-bottom" name="state" id="city" value="{{$customeredit->state}}">
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
                                       <input type="text" placeholder="Billing address"
                                              class="form-control margin-bottom" name="contact2" value="{{$customeredit->contact2}}">
                                   </div>
                               </div>


                               <div class="form-group row">

                                  <label class="col-sm-2 offset-sm-2 col-form-label col-form-label text-right mb-2"
                                         for="country">Country</label>

                                  <div class="col-sm-6 col-lg-3">
                                             <select placeholder="Country"
                                                   class="form-control margin-bottom" name="country" id="country_idd" value="{{$customeredit->country}}">
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
                                                  class="form-control margin-bottom" name="state2" id="cityy" value="{{$customeredit->state2}}">
                                              </select>
                                  </div>
                              </div>




                                  <div class="form-group row">

                                   <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Billing address</label>

                                   <div class="col-sm-6 col-lg-3">
                                       <input type="text" placeholder="Billing address"
                                              class="form-control margin-bottom" name="BL_Ad2" value="{{$customeredit->BL_Ad2}}">
                                   </div>
                               </div>

                                  <div class="form-group row">

                                   <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Billing address 2</label>

                                   <div class="col-sm-6 col-lg-3">
                                       <input type="text" placeholder="Billing address 2"
                                              class="form-control margin-bottom" name="BL_Ad222" value="{{$customeredit->BL_Ad222}}">
                                   </div>
                               </div>
                                  <div class="form-group row">

                                   <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">City</label>

                                   <div class="col-sm-6 col-lg-3">
                                       <input type="text" placeholder="Phone"
                                              class="form-control margin-bottom" name="city3" value="{{$customeredit->city3}}">
                                   </div>
                               </div>
                                <div class="form-group row">

                                   <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Postal/Zip code</label>

                                   <div class="col-sm-6 col-lg-3">
                                       <input type="text" placeholder="Contact"
                                              class="form-control margin-bottom" name="zpo3" value="{{$customeredit->zpo3}}">
                                   </div>
                               </div>
                                  <div class="form-group row">

                                   <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Phone</label>

                                   <div class="col-sm-6 col-lg-3">
                                       <input type="text" placeholder="Phone"
                                              class="form-control margin-bottom" name="phone3" value="{{$customeredit->phone3}}">
                                   </div>
                               </div>
                                 <div class="form-group row">

                                   <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Notes</label>

                                   <div class="col-sm-6 col-lg-3">
                                       <textarea type="text" placeholder="Notes"
                                              class="form-control margin-bottom" name="note" value="{{$customeredit->note}}">
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
                                    <input type="text" placeholder="Billing address"
                                           class="form-control margin-bottom" name="contact_ship2" value="{{$customeredit->contact_ship2}}">
                                </div>
                            </div>


                            <div class="form-group row">
                               <label class="col-sm-2 offset-sm-2 col-form-label col-form-label text-right mb-2"
                                      for="country">Country</label>

                               <div class="col-sm-6 col-lg-3">
                                          <select placeholder="Country"
                                                class="form-control margin-bottom" name="country3" id="country_iddd" value="{{$customeredit->country3}}">
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
                                               class="form-control margin-bottom" name="state3" id="cityyy" value="{{$customeredit->state3}}">
                                           </select>
                               </div>
                           </div>



                               <div class="form-group row">

                                <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Billing address</label>

                                <div class="col-sm-6 col-lg-3">
                                    <input type="text" placeholder="Billing address"
                                           class="form-control margin-bottom" name="BL_Ad4" value="{{$customeredit->BL_Ad4}}">
                                </div>
                            </div>

                               <div class="form-group row">

                                <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Billing address 2</label>

                                <div class="col-sm-6 col-lg-3">
                                    <input type="text" placeholder="Billing address 2"
                                           class="form-control margin-bottom" name="BL_Ad5" value="{{$customeredit->BL_Ad5}}">
                                </div>
                            </div>
                               <div class="form-group row">

                                <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">City</label>

                                <div class="col-sm-6 col-lg-3">
                                    <input type="text" placeholder="Phone"
                                           class="form-control margin-bottom" name="city5" value="{{$customeredit->city5}}">
                                </div>
                            </div>
                             <div class="form-group row">

                                <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Postal/Zip code</label>

                                <div class="col-sm-6 col-lg-3">
                                    <input type="text" placeholder="Contact"
                                           class="form-control margin-bottom" name="zpo4" value="{{$customeredit->zpo4}}">
                                </div>
                            </div>
                               <div class="form-group row">

                                <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Phone</label>

                                <div class="col-sm-6 col-lg-3">
                                    <input type="text" placeholder="Phone"
                                           class="form-control margin-bottom" name="phone4" value="{{$customeredit->phone4}}">
                                </div>
                            </div>
                              <div class="form-group row">

                                <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Notes</label>

                                <div class="col-sm-6 col-lg-3">
                                    <textarea type="text" placeholder="Notes"
                                           class="form-control margin-bottom" name="note2" value="{{$customeredit->note2}}">
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
                 <input type="text" placeholder="contact"
                        class="form-control margin-bottom" name="contact_ship" value="{{$customeredit->contact_ship}}">
             </div>
         </div>


         <div class="form-group row">
            <label class="col-sm-2 offset-sm-2 col-form-label col-form-label text-right mb-2"
                   for="country">Country</label>

            <div class="col-sm-6 col-lg-3">
                       <select placeholder="Country"
                             class="form-control margin-bottom" name="country6" id="country_id5" value="{{$customeredit->country6}}">
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
                            class="form-control margin-bottom" name="state6" id="city5" value="{{$customeredit->state6}}">
                        </select>
            </div>
        </div>


            <div class="form-group row">

             <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Billing address</label>

             <div class="col-sm-6 col-lg-3">
                 <input type="text" placeholder="BL_Ad8"
                        class="form-control margin-bottom" name="Bilingadres2" value="{{$customeredit->Bilingadres2}}">
             </div>
         </div>

            <div class="form-group row">

             <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Billing address 2</label>

             <div class="col-sm-6 col-lg-3">
                 <input type="text" placeholder="Billing address 2"
                        class="form-control margin-bottom" name="BL_Ad9"  value="{{$customeredit->BL_Ad9}}">
             </div>
         </div>
            <div class="form-group row">

             <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">City</label>

             <div class="col-sm-6 col-lg-3">
                 <input type="text" placeholder="City"
                        class="form-control margin-bottom" name="phone11" value="{{$customeredit->phone11}}">
             </div>
         </div>
          <div class="form-group row">

             <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Postal/Zip code</label>

             <div class="col-sm-6 col-lg-3">
                 <input type="text" placeholder="Contact"
                        class="form-control margin-bottom" name="zpo11" value="{{$customeredit->zpo11}}">
             </div>
         </div>
            <div class="form-group row">

             <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Phone</label>

             <div class="col-sm-6 col-lg-3">
                 <input type="text" placeholder="Phone"
                        class="form-control margin-bottom" name="phone12" value="{{$customeredit->phone12}}">
             </div>
         </div>
           <div class="form-group row">

             <label class="col-sm-2 offset-sm-2 col-form-label text-right mb-2" for="name">Notes</label>

             <div class="col-sm-6 col-lg-3">
                 <textarea type="text" placeholder="Notes"
                        class="form-control margin-bottom" name="note3" value="{{$customeredit->note3}}">
                 </textarea>
             </div>
         </div>
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
@endsection
