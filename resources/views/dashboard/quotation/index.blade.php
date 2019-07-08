@extends('layouts.dashboard')
@section('title','Quotation List ')
@section('content')
<!-- Horizontal navigation-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Quotation List <a
                        href="{{route('quotations.create')}}"
                        class="btn btn-primary btn-sm rounded">
                    Add new</a></h4>
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
                <hr>
                <table id="quotations" class="table table-striped table-bordered  dataex-res-constructor">
                    <thead>
                      <tr>
                          <th>Status</th>
                          <th>Date</th>
                          <th>Expired Date</th>
                          <th>Number</th>
                          <th>Customer</th>
                          <th class="no-sort">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($quotations as $quotation)

                        <tr>
                            <td>
                              @php
                                  $mytime = Carbon\Carbon::now();
                                  $onlydate = $mytime->toDateString();
                                  $loll=$quotation->quotation_exdate;
                              @endphp
                              @if ( $onlydate < $loll)
                                <span class="btns-sm btn-info" style="padding:10px;border-radius:4px;">Due</span>
                              @else
                                <span class="btn-sm btn-danger" style="padding:10px;border-radius:4px;">Expired</span>
                              @endif
                            </td>
                            <td>{{$quotation->quotation_date}}</td>
                            <td>{{$quotation->quotation_exdate}}</td>
                            <td>{{$quotation->quotation_no}}</td>
                            <td>{{$quotation->customerInfo->name}}</td>

                            <td>
                              <a href="{{route('quotations.show',$quotation->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> </a>
                              <a href="{{route('quotations.edit',$quotation->id)}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                              <a href="{{route('quotations.pdf',$quotation->id)}}" class="btn btn-success btn-sm"> <i class="fas fa-file-pdf">pdf</i> </a>
                              <a href="{{route('quotations.destroy',$quotation->id)}}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_model2"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @empty
                        {{--<tr><td colspan="6">No quotation found!</td></tr>--}}
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div id="delete_model2" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Invoice</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this quotation ?</p>
            </div>
            <div class="modal-footer">
                <form id="deleteForm" action="{{ url('quotations/destroy')}}" method="post">
                  @csrf @method('DELETE')
                  <button type="submit" data-dismiss="modal" class="btn btn-primary" id="delete-confirm">Delete</button>
                  <button type="button" data-dismiss="modal" class="btn">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
@section('footer_scripts')
<script>
    $('#delete_model2').on('show.bs.modal', function (event) {
      var $button = $(event.relatedTarget);
      var $modal = $(this);
      $modal.find('#deleteForm').attr('action',$button.attr('href'));
    });
    $('#delete_model2').on('hide.bs.modal', function (event) {
      $(this).find('#deleteForm').submit();
    });
</script>
@endsection
