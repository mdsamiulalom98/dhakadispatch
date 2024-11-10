@extends('backEnd.layouts.master')
@section('title', $type. ' Parcel Manage')
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
                <h4 class="page-title">{{$type}} Parcel Manage</h4>
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
                                <label for="parcel_id" class="form-label">Parcel Id</label>
                                <input type="text" value="{{ request()->get('parcel_id') }}" class="form-control" name="parcel_id">
                            </div>
                        </div>
                        <!--col-sm-3-->
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="recipient" class="form-label">Recipient Phone</label>
                                <input type="text" value="{{ request()->get('recipient') }}" class="form-control" name="recipient">
                            </div>
                        </div>
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
                                <li><a href="" class="btn rounded-pill btn-info multi_order_print"><i class="fe-printer"></i> Print</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="mt-1 table table-responsive parcel-table">
                                <thead>
                                    <tr>
                                        <th style="width:2%"><div class="form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input checkall" value=""></label></div></th>
                                        <th>Parcel ID</th>
                                        <th>Merchant</th>
                                        <th>Recepient</th>
                                        <th>Delivery Status</th>
                                        <th>Amount</th>
                                        <th>Payment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($parcels as $key=>$value)
                                    <tr>
                                        <td><input type="checkbox" class="checkbox" value="{{$value->id}}"></td>
                                        <td>{{$value->parcel_id}} <p>Invoice : {{$value->merchant_invoice??'N/A'}}</p></td>
                                        <td>
                                            <p>{{$value->merchant?$value->merchant->name:''}}</p>
                                            <p>{{$value->merchant?$value->merchant->phone:''}}</p>
                                            <p>{{$value->merchant?$value->merchant->address:''}}</p>
                                        </td><td>
                                            <p>{{$value->name}}</p>
                                            <p>{{$value->phone}}</p>
                                            <p>{{$value->address}}</p>
                                        </td>
                                        <td>
                                            @if($value->rider)
                                            <span class="@if($value->status == 1) warning @else success @endif">{{$value->rider?$value->rider->name:''}}</span><br><br>
                                            @endif
                                            <span class="@if($value->status == 1) warning @else success @endif">{{$value->parcelstatus?$value->parcelstatus->name:''}}</span></td>
                                        <td>
                                            <p><strong>COD:</strong> {{$value->cod}}</p>
                                            <p><strong>Charge:</strong> {{$value->delivery_charge+$value->cod_charge}}</p>
                                        </td>
                                        <td><span class="@if($value->payment_status == 'paid') success @else warning @endif">{{$value->payment_status}}</span></td>
                                        <td><a href="{{route('admin.parcel.view',$value->parcel_id)}}" class="btn btn-primary waves-effect waves-light rounded-pill btn-sm">View</a></td>
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
        <h5 class="modal-title">Parcel Status Change</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('admin.parcel.status')}}" id="parcel_status_form">
      <div class="modal-body">
        <div class="form-group">
            <label for="parcel_status" class="mb-2">Delivery Status</label>
            <select name="parcel_status" id="parcel_status" class="form-control">
                <option value="">Select..</option>
                @foreach($parcelstatus as $key=>$value)
                <option value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="note" class="mb-2">Delivery Note</label>
            <textarea name="status_note" class="form-control" id="status_note" required></textarea>
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
      <form action="{{route('admin.parcel.rider_assign')}}" id="parcel_assign">
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
    // parcel assign
    $(document).on('submit', 'form#parcel_assign', function(e){
        e.preventDefault();
        var url = $(this).attr('action');
        var method = $(this).attr('method');
        let rider_id=$(document).find('select#rider_id').val();
        var parcel = $('input.checkbox:checked').map(function(){
          return $(this).val();
        });
        var parcel_ids=parcel.get();
        if(parcel_ids.length ==0){
            toastr.error('Please Select An Order First !');
            return ;
        }
        $.ajax({
           type:'GET',
           url:url,
           data:{rider_id,parcel_ids},
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

    // parcel status change 
    $(document).on('submit', 'form#parcel_status_form', function(e){
        e.preventDefault();
        var url = $(this).attr('action');
        var method = $(this).attr('method');
        let parcel_status=$(document).find('select#parcel_status').val();
        let note=$(document).find('#status_note').val();
        var parcel = $('input.checkbox:checked').map(function(){
          return $(this).val();
        });
        var parcel_ids=parcel.get();
        if(parcel_ids.length ==0){
            toastr.error('Please Select An Order First !');
            return ;
        }
        $.ajax({
           type:'GET',
           url:url,
           data:{parcel_status,parcel_ids,note},
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
