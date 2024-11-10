@extends('backEnd.layouts.master')
@section('title',  'Parcel Reports')
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
                <h4 class="page-title">Parcel Reports</h4>
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
                                <label for="status" class="form-label">Status</label>
                                <select type="text" value="{{ request()->get('status') }}" class="form-control select2" name="status">
                                    <option value="">All</option>
                                    @foreach($parcelstatus as $status)
                                    <option value="{{$status->id}}" {{request()->get('status') == $status->id ? 'selected' : ''}}>{{$status->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
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
                            <div class="form-group mt-1">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <!-- col end -->
                    </form>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="mt-1 table table-responsive parcel-table">
                                <thead>
                                    <tr>
                                        <th>Parcel ID</th>
                                        <th>Merchant</th>
                                        <th>Recepient</th>
                                        <th>Delivery Status</th>
                                        <th>Amount</th>
                                        <th>Payment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($parcels as $key=>$value)
                                    <tr>
                                        <td><a href="{{route('admin.parcel.view',$value->parcel_id)}}">{{$value->parcel_id}}</a> <p>Invoice : {{$value->merchant_invoice??'N/A'}}</p></td>
                                        <td>
                                            <p>{{$value->merchant?$value->merchant->name:''}}</p>
                                            <p>{{$value->merchant?$value->merchant->phone:''}}</p>
                                            <p>{{$value->merchant?$value->merchant->address:''}}</p>
                                        </td><td>
                                            <p>{{$value->name}}</p>
                                            <p>{{$value->phone}}</p>
                                            <p>{{$value->address}}</p>
                                        </td>
                                        <td><span class="@if($value->status == 1) warning @else success @endif">{{$value->parcelstatus?$value->parcelstatus->name:''}}</span></td>
                                        <td>
                                            <p><strong>COD:</strong> ৳{{$value->cod}}</p>
                                            <p><strong>Charge:</strong> ৳{{$value->delivery_charge+$value->cod_charge}}</p>
                                        </td>
                                         <td>৳{{$value->payable_amount}}</td>
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
<!-- Assign User End -->
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
@endsection

