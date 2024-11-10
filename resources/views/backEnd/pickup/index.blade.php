@extends('backEnd.layouts.master')
@section('title', $type. ' Pickup Manage')
@section('css')
    <link href="{{ asset('public/backEnd') }}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/backEnd/') }}/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">{{$type}} Pickup Manage</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form class="row mb-3">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="pickup_id" class="form-label">Pickup Id</label>
                                <input type="text" value="{{ request()->get('pickup_id') }}" class="form-control" name="pickup_id">
                            </div>
                        </div>
                        <!--col-sm-3-->
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="merchant" class="form-label">Merchant Phone</label>
                                <input type="text" value="{{ request()->get('merchant') }}" class="form-control"
                                    name="merchant">
                            </div>
                        </div>
                        <!--col-sm-3-->
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="start_date" class="form-label">Start Date</label>
                                <input type="date" value="{{ request()->get('start_date') }}"
                                    class="form-control flatdate" name="start_date">
                            </div>
                        </div>
                        <!--col-sm-3-->
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="end_date" class="form-label">End Date</label>
                                <input type="date" value="{{ request()->get('end_date') }}"
                                    class="form-control flatdate" name="end_date">
                            </div>
                        </div>
                        <!--col-sm-3-->
                        <div class="col-sm-2">
                            <div class="form-group mt-3">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <!-- col end -->
                    </form>
                    <div class="row">
                        <div class="col-sm-8">
                            <ul class="action2-btn">
                                <li><a data-bs-toggle="modal" data-bs-target="#asignRider" class="btn rounded-pill btn-success"><i class="fe-plus"></i> Assign Rider</a></li>
                                <li><a data-bs-toggle="modal" data-bs-target="#changeStatus" class="btn rounded-pill btn-primary"><i class="fe-plus"></i> Change Status</a></li>
                                <li><a href="" class="btn rounded-pill btn-danger order_delete"><i class="fe-plus"></i> Delete All</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="mt-1 table table-responsive parcel-table">
                                <thead>
                                    <tr>
                                        <th style="width:2%"><div class="form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input checkall" value=""></label>
                                        <th>Pickup ID</th>
                                        <th>Merchant</th>
                                        <th>E. Parcel</th>
                                        <th>Rider</th>
                                        <th>Note</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pickups as $key=>$value)
                                    <tr>
                                        <td><input type="checkbox" class="checkbox" value="{{$value->id}}"></td>
                                        <td>{{$value->pickup_id}}</td>
                                        <td>
                                            <p>{{$value->merchant?$value->merchant->name:''}}</p>
                                            <p>{{$value->merchant?$value->merchant->phone:''}}</p>
                                            <p>{{$value->merchant?$value->merchant->address:''}}</p>
                                        </td>
                                        <td>{{$value->estimedparcel}}</td>
                                        <td>{{$value->rider?$value->rider->name:'Not Assign'}}</td>
                                        <td>{{$value->note}}</td>
                                        <td><span class="@if($value->status == 'complete') success @else warning @endif">{{$value->status}}</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Parcel Status Start -->
<div class="modal fade" id="changeStatus" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pickup Status Change</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('admin.pickup.status')}}" id="pickup_status_form">
      <div class="modal-body">
        <div class="form-group">
            <label for="pickup_status" class="mb-2">Delivery Status</label>
            <select name="pickup_status" id="pickup_status" class="form-control">
                <option value="">Select..</option>
                <option value="approved">Approved</option>
                <option value="completed">Completed</option>
                <option value="cancelled">Cancelled</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="note" class="mb-2">Note</label>
            <textarea name="note" class="form-control" id="note"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Parcel Status End-->

<!-- Assign Rider Start -->
<div class="modal fade" id="asignRider" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Assign Rider</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('admin.pickup.rider_assign')}}" id="pickup_assign">
      <div class="modal-body">
        <div class="form-group">
            <select name="rider_id" id="rider_id" class="form-control">
                <option value="">Select..</option>
                @foreach($riders as $key=>$value)
                <option value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Assign Rider End-->
@endsection

@section('script')
<script src="{{ asset('public/backEnd/') }}/assets/libs/select2/js/select2.min.js"></script>
<script src="{{ asset('public/backEnd/') }}/assets/libs/flatpickr/flatpickr.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.select2').select2();
        flatpickr(".flatdate", {});
    });
</script>
<script>

    $(".checkall").on('change',function(){
      $(".checkbox").prop('checked',$(this).is(":checked"));
    });
    // pickup assign
    $(document).on('submit', 'form#pickup_assign', function(e){
        e.preventDefault();
        var url = $(this).attr('action');
        var method = $(this).attr('method');
        let rider_id=$(document).find('select#rider_id').val();
        var pickup = $('input.checkbox:checked').map(function(){
          return $(this).val();
        });
        var pickup_ids=pickup.get();
        if(pickup_ids.length ==0){
            toastr.error('Please Select An Order First !');
            return ;
        }
        $.ajax({
           type:'GET',
           url:url,
           data:{rider_id,pickup_ids},
           success:function(res){
               if(res.status=='success'){
                toastr.success(res.message);
                window.location.reload();
            }else{
                toastr.error('Failed something wrong');
            }
           }
        });
    
    });

    // pickup status change 
    $(document).on('submit', 'form#pickup_status_form', function(e){
        e.preventDefault();
        var url = $(this).attr('action');
        var method = $(this).attr('method');
        let pickup_status=$(document).find('select#pickup_status').val();
        let note=$(document).find('#status_note').val();
        var pickup = $('input.checkbox:checked').map(function(){
          return $(this).val();
        });
        var pickup_ids=pickup.get();
        if(pickup_ids.length ==0){
            toastr.error('Please Select An Pickup First !');
            return ;
        }
        $.ajax({
           type:'GET',
           url:url,
           data:{pickup_status,pickup_ids,note},
           success:function(res){
               if(res.status=='success'){
                toastr.success(res.message);
                window.location.reload();
            }else{
                toastr.error('Failed something wrong');
            }
           }
        });
    
    });
</script>
@endsection
