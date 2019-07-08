@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><article class="content">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <div class="card-body">
            <h5 class="title">
                TAX List <a
                        href="/Tax"
                        class="btn btn-primary btn-sm rounded">
                    Add new                </a>
            </h5>

            <p>&nbsp;</p>
            <table class="table table-bordered" cellspacing="0" style="width:50%; margin:auto">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Rate</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                  @foreach($tax as $key)
                  <tr>
                      <td>{{$key->tax}}</td>
                      <td>{{$key->percentage}}</td>
                      <td style="width:80px">
                          <a class="btn btn-danger btn-sm delete-object" href="#" data-object-id="1"> <i class="fa fa-trash">Delete</i> </a>
                          <a class="btn btn-info btn-sm" href="#" data-object-id="1"> <i class="fas fa-pen">Edit</i> </a>

          <div id="delete_model" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">

                      <h4 class="modal-title">Delete Product</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                  aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                      <p>Are you sure you want to delete this product?</p>
                  </div>
                  <div class="modal-footer">
                      <form method="POST" action="{{Route('taxdelete',$key->id)}}">
                          @csrf
                          @method('delete')
                      <button type="submit"  class="btn btn-danger "><i class='fa fa-trash'></i>Delete</button>
                      <button type="button" data-dismiss="modal" class="btn">Cancel</button>
                      </form>
                  </div>
              </div>
          </div>
          </div></td>


                  </tr>

                  @endforeach

               </tbody>

            </table>
        </div>
    </div>
</article>

<div id="delete_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Delete</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>Delete ?</p>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="object-id" value="">
                <input type="hidden" id="action-url" value="settings/taxslabs_delete">
                <button type="button" data-dismiss="modal" class="btn btn-primary"
                        id="delete-confirm">Delete</button>
                <button type="button" data-dismiss="modal"
                        class="btn">Cancel</button>
            </div>
        </div>
    </div>
</div></div>
</div>
</div>
@endsection
