@extends('layouts.dashboard')
@section('title','Create Vendor')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            @include('layouts.inc.success')
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5 class="w-100 text-center">Add Vendor</h5>
            <hr>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-content">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                <div class="message"></div>
            </div>
            <div class="card-body">
                <form method="post" action="product-add-form2"  enctype="multipart/form-data">
                @csrf

                </div>
                    <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label" for="name">Name</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Name"
                               class="form-control margin-bottom required" name="name">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label" for="name">Company</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Company"
                               class="form-control margin-bottom" name="company">
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label" for="phone"> Phone</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="phone"
                               class="form-control margin-bottom  required" name="phone">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label" for="phone"> Phone </label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="optional phone number"
                               class="form-control margin-bottom  required" name="phone2">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label" for="email"> Email</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="email"
                               class="form-control margin-bottom required" name="email">
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label"
                           for="address"> Address</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="address"
                               class="form-control margin-bottom" name="address">
                    </div>
                </div>
                 <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label"
                           for="country">Country</label>

                    <div class="col-sm-6">
                               <select placeholder="Country"
                                     class="form-control margin-bottom" name="country" id="country_id">
                                   @foreach($country as $key)
                                    <option value="{{$key->id}}"> {{$key->name}}</option>
                                   @endforeach
                                    </select>
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label" for="city">City</label>

                    <div class="col-sm-6">
                                <select placeholder="city"
                                    class="form-control margin-bottom" name="city" id="city">
                                </select>
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label"
                           for="region">Region</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Region"
                               class="form-control margin-bottom" name="region">
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 offset-sm-2 col-form-label"
                           for="postbox">PostBox</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="PostBox"
                               class="form-control margin-bottom" name="postbox">
                    </div>
                </div>
                 <div class="form-group row">
                    <label class="col-sm-2 offset-sm-2 col-form-label">Account Name</label>

                    <div class="col-sm-6">
                          <input type="text" placeholder="Account Name"
                               class="form-control margin-bottom" name="bank_account">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 offset-sm-2 col-form-label">Account Number</label>

                    <div class="col-sm-6">
                       <input type="text" placeholder="Account Number"
                               class="form-control margin-bottom" name="bank_branch">
                    </div>
                </div>
                  <div class="form-group row">
                    <label class="col-sm-2 offset-sm-2 col-form-label">Bank Name</label>

                    <div class="col-sm-6">
                        <select class="form-control" name="bank_name"
                                data-loading-text="Adding...">
                            <option>--Select One--</option>
                            @foreach($bank as $key)
                             <option value="{{$key->bank}}">{{$key->bank}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>


                 <div class="form-group row">
                    <label class="col-sm-2 offset-sm-2 col-form-label">Account Name</label>

                    <div class="col-sm-6">
                          <input type="text" placeholder="Account Name(Optional)"
                               class="form-control margin-bottom" name="bank_account2">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 offset-sm-2 col-form-label">Account Number</label>

                    <div class="col-sm-6">
                       <input type="text" placeholder="Account Number (Optional)"
                               class="form-control margin-bottom" name="bank_branch2">
                    </div>
                </div>

                 <div class="form-group row">
                    <label class="col-sm-2 offset-sm-2 col-form-label">Bank Name (Optional)</label>

                    <div class="col-sm-6">
                        <select class="form-control" name="bank_name2"
                                data-loading-text="Adding...">
                            <option>--Select One--</option>
                          @foreach($bank as $key)
                             <option value="{{$key->bank}}">{{$key->bank}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>




                <div class="form-group row">
                    <label class="col-sm-2 offset-sm-2 col-form-label">Account Name</label>

                    <div class="col-sm-6">
                          <input type="text" placeholder="Account Name (Optional)"
                               class="form-control margin-bottom" name="bank_account1">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 offset-sm-2 col-form-label">Account Number</label>

                    <div class="col-sm-6">
                       <input type="text" placeholder="Account Number (Optional)"
                               class="form-control margin-bottom" name="bank_branch1">
                    </div>
                </div>
                 <div class="form-group row">
                    <label class="col-sm-2 offset-sm-2 col-form-label">Bank Name (Optional)</label>

                    <div class="col-sm-6">
                        <select class="form-control" name="bank_name1"
                                data-loading-text="Adding...">
                            <option>--Select One--</option>
                           @foreach($bank as $key)
                             <option value="{{$key->bank}}">{{$key->bank}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4 col-lg-3 m-auto">
                        <input type="submit"class="btn btn-success margin-bottom"
                               value="Save" data-loading-text="Adding...">
                    </div>
                </div>
                </form>
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
});
</script>
@endsection
