@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><article class="content-body">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>	<div class="alert alert-warning white">
             
  
            <div class="message"><strong>Note</strong>: WooCommerce Module is a separate module not included in this app. </div>
        </div>
		<div class="alert alert-danger">
		<div class="message white"><strong>Buy Here</strong>: <a class="white" href="https://codecanyon.net/item/woocommerce-to-geo-pos-importer/22597390">https://codecanyon.net/item/woocommerce-to-geo-pos-importer/22597390</a></div></div>
        <form method="post" id="data_form" class="form-horizontal">
            <div class="card-body">

                <h5>Woocommerce Integration Using REST</h5>
                <hr>
                <p>WooCommerce (WC) 2.6+ is fully integrated with the WordPress REST API.  <br><span class="text-primary" >You can link your WooCommerce Store to Geo POS. To create or manage keys for a specific WordPress user, go to WooCommerce > Settings >Advanced > REST API.</span>
                </p>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="terms">Consumer Key</label>

                    <div class="col-sm-8">
                        <input type="text"
                               class="form-control margin-bottom  required" name="key1"
                               value="">
                    </div>
                </div>

                         <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="terms">Consumer Secret</label>

                    <div class="col-sm-8">
                        <input type="text"
                               class="form-control margin-bottom  required" name="key2"
                               value="">
                    </div>
                </div>

                 <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="terms">Store Url</label>

                    <div class="col-sm-8">
                        <input type="text"
                               class="form-control margin-bottom  required" name="url"
                               value="">
                    </div>
                </div>

                 <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="terms">Employee for store invoices</label>

                    <div class="col-sm-8">
                             <select name="emp" class="form-control">
                             <option value=''>Do not change</option>
                            <option value='9'>BusinessOwner</option><option value='16'>Oliver Mammatt</option><option value='17'>Harry McGaughey</option><option value='18'>William Longlands</option><option value='20'>Mark Wales</option><option value='19'>Stephen L. Turner</option>                        </select>
                    </div>
                </div>





                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit" id="submit-data" class="btn btn-success margin-bottom"
                               value="Update" data-loading-text="Updating...">
                        <input type="hidden" value="woocommerce" id="action-url">
                    </div>
                </div>

            </div>
        </form>

          <div class="card-body border-purple border-lighten-3">
              <div class="row">
                  <div class="col-md-6">       <h5>Import Woocommerce Products</h5>
                <hr>


                <p>You can import your woocommerce products to geo pos with one click.</p>
 <a href="#"  data-toggle="modal" data-target="#importProducts" class="btn btn-blue-grey btn-lg margin-bottom"
         data-loading-text="Importing...">Import</a>
               <div class="card card-block" id="products">   </div></div>    <div class="col-md-6">  <h5>Import Woocommerce Orders</h5>
                <hr>


                <p>You can import your woocommerce orders to geo pos with one click.</p>
 <a href="#"  data-toggle="modal" data-target="#importOrders" class="btn btn-blue btn-lg margin-bottom"
         data-loading-text="Importt...">Import</a>
               <div class="card card-block" id="orders">   </div></div>
              </div>

          </div>

      <div class="card-body border-success border-lighten-3">
<h5 class="purple">Cron Jobs</h5>

                 <hr>
                <p class="text-bold-500 blue">WooCommerce Auto Orders Import is</p>
                <pre class="card-block card">WGET https://pos.ultimatekode.com/woocommerce/woo_orders?token=99293768</pre>
                <pre class="card-block card">GET https://pos.ultimatekode.com/woocommerce/woo_orders?token=99293768</pre>
                <hr>
                <hr>
                <p class="text-bold-500 success">WooCommerce Auto Products Import is</p>
                <pre class="card-block card">WGET https://pos.ultimatekode.com/woocommerce/woo_products?token=99293768</pre>
                <pre class="card-block card">GET https://pos.ultimatekode.com/woocommerce/woo_products?token=99293768</pre>
                <hr>
				   <p class="text-bold-500 purple">WooCommerce Auto Products Sync (After Import) is</p>
                <pre class="card-block card">WGET https://pos.ultimatekode.com/woocommerce/woo_products_sync?token=99293768</pre>
                <pre class="card-block card">GET #</pre>
                <hr> </div></div>    </div></div>

</article>
<div id="importProducts" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Import products</h4>  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>Do you want to import products from WooCommerce Store ?</p>
            </div>
            <div class="modal-footer">


                <button type="button" data-dismiss="modal" class="btn btn-primary"
                        id="wimport_products">Yes</button>
                <button type="button" data-dismiss="modal"
                        class="btn">Cancel</button>
            </div>
        </div>
    </div>
</div>
<div id="importOrders" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Import Orders</h4>   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>Do you want to import Orders from WooCommerce Store ?</p>
            </div>
            <div class="modal-footer">


                <button type="button" data-dismiss="modal" class="btn btn-primary"
                        id="wimport_orders">Yes</button>
                <button type="button" data-dismiss="modal"
                        class="btn">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" >

        $(document).on('click', "#wimport_products", function (e) {
        e.preventDefault();

        var aurl = '#';
        var div_id='products';
        var message='Product Import Successful!';

woo_action(aurl,div_id,message);


    });
        $(document).on('click', "#wimport_orders", function (e) {
        e.preventDefault();
        var aurl = '#';
        var div_id='orders';
        var message='Orders Import Successful!';

woo_action(aurl,div_id,message);


    });
        function woo_action(aurl,div_id,message){
                    jQuery.ajax({

            url: aurl,
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                $('#'+div_id).html(message);
            }
        });
        }

    </script></div>
</div>
</div>


@endsection