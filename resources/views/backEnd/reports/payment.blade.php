@extends('backEnd.layouts.master')
@section('title', 'Payment Reports')
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
                    <h4 class="page-title text-capitalize">Payment Reports</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row mb-3">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="status" class="form-label">Status</label>
                                    <select type="text" value="{{ request()->get('status') }}" class="form-control select2" name="status">
                                        <option value="">All</option>
                                        <option value="unpaid" {{ request()->get('status') == 'unpaid'? 'selected' : '' }}>Unpaid</option>
                                        <option value="paid" {{ request()->get('status') == 'paid'? 'selected' : '' }}>Paid</option>
                                        <option value="process" {{ request()->get('status') == 'process'? 'selected' : '' }}>Process</option>
                                    </select>
                                </div>
                            </div>
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
                        <div class="table-responsive ">
                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Invoice</th>
                                        <th>COD</th>
                                        <th>Delivery Charge</th>
                                        <th>Cod Charge</th>
                                        <th>Payable Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payments as $key => $value)
                                        <tr>
                                            <td>{{$value->created_at->format('d m, Y h:m A')}}</td>
                                            @if($value->user_type == 'merchant')
                                            <td><a href="{{route('merchants.invoice',$value->id)}}">{{$value->invoice_id}}</a></td>
                                            @else
                                            <td><a href="{{route('riders.invoice',$value->id)}}">{{$value->invoice_id}}</a></td>
                                            @endif
                                            <td>৳{{$value->cod}}</td>
                                            <td>৳{{$value->delivery_charge}}</td>
                                            <td>৳{{$value->cod_charge}}</td>
                                            <td>৳{{$value->payable_amount}}</td>
                                            <td><span class="@if($value->status == 'paid') success @else warning @endif">{{$value->status}}</span> <br> Trx: {{$value->trx_id}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="custom-paginate">
                            {{ $payments->links('pagination::bootstrap-4') }}
                        </div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>
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

