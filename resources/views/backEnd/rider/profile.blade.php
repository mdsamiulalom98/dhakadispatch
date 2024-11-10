@extends('backEnd.layouts.master')
@section('title', 'Rider Overview')
@section('css')
    <link href="{{ asset('public/backEnd') }}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <a href="{{ route('riders.menual_payment',['id'=>$profile->id]) }}" class="btn btn-success rounded-pill">Manual Payment</a>
                        <a href="{{ route('riders.index') }}" class="btn btn-primary rounded-pill">Rider List</a>
                        <form method="post" action="{{ route('riders.adminlog') }}" class="d-inline" target="_blank">
                            @csrf
                            <input type="hidden" value="{{ $profile->id }}" name="hidden_id">
                            <button type="button" class="btn btn-info rounded-pill change-confirm"
                                title="Login as rider"><i class="fe-log-in"></i> Login</button>
                        </form>
                    </div>
                    <h4 class="page-title">Rider Overview</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-4 col-xl-4">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ asset($profile->image) }}" class="rounded-circle avatar-lg img-thumbnail"
                            alt="profile-image">

                        <h4 class="mb-2">{{ $profile->name }}</h4>

                        <a href="tel:{{ $profile->phone }}"
                            class="btn btn-success btn-xs waves-effect mb-2 waves-light">Call</a>
                        <a href="mailto:{{ $profile->email }}"
                            class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Email</a>

                        <div class="text-start mt-3">
                            <h4 class="font-13 text-uppercase">About Me :</h4>
                            <table class="table">
                                <tbody>
                                    <tr class="text-muted mb-2 font-13">
                                        <td>Full Name </td>
                                        <td class="ms-2">{{ $profile->name }}</td>
                                    </tr>

                                    <tr class="text-muted mb-2 font-13">
                                        <td>Mobile </td>
                                        <td class="ms-2">{{ $profile->phone }}</td>
                                    </tr>

                                    <tr class="text-muted mb-1 font-13">
                                        <td>Address </td>
                                        <td class="ms-2">{{ $profile->address }}</td>
                                    </tr>
                                    <tr class="text-muted mb-1 font-13">
                                        <td>District </td>
                                        <td class="ms-2">{{ $profile->district ? $profile->district->name : '' }}</td>
                                    </tr>
                                    <tr class="text-muted mb-1 font-13">
                                        <td>Thana </td>
                                        <td class="ms-2">{{ $profile->area ? $profile->area->name : '' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end card -->

            </div> <!-- end col-->

            <div class="col-lg-8 col-xl-8">
                <div class="row">
                    <div class="col-md-6 col-xl-4">
                       <div class="info-box" >
                                <span class="info-box-icon text-white box-bg-0"><i class="fa-solid fa-sack-dollar"></i></span>
                            <div class="info-box-content" >
                                <span class="info-box-text">COD</span>
                                <span class="info-box-number">৳ {{$total_cod}}</span>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-6 col-xl-4">
                       <div class="info-box" >
                                <span class="info-box-icon text-white box-bg-1"><i class="fa-solid fa-sack-dollar"></i></span>
                            <div class="info-box-content" >
                                <span class="info-box-text">Payments</span>
                                <span class="info-box-number">৳ {{$total_payment}}</span>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-6 col-xl-4">
                       <div class="info-box" >
                                <span class="info-box-icon text-white box-bg-2"><i class="fa-solid fa-sack-dollar"></i></span>
                            <div class="info-box-content" >
                                <span class="info-box-text">Paid</span>
                                <span class="info-box-number">৳ {{$total_paid}}</span>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-6 col-xl-4">
                       <div class="info-box" >
                                <span class="info-box-icon text-white box-bg-3"><i class="fa-solid fa-sack-dollar"></i></span>
                            <div class="info-box-content" >
                                <span class="info-box-text">Charge</span>
                                <span class="info-box-number">৳ {{$total_charge}}</span>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-6 col-xl-4">
                       <div class="info-box" >
                                <span class="info-box-icon text-white box-bg-4"><i class="fa-solid fa-sack-dollar"></i></span>
                            <div class="info-box-content" >
                                <span class="info-box-text">Hold</span>
                                <span class="info-box-number">৳ {{$total_hold}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                       <div class="info-box" >
                                <span class="info-box-icon text-white box-bg-5"><i class="fa-solid fa-file"></i></span>
                            <div class="info-box-content" >
                                <span class="info-box-text">Parcels</span>
                                <span class="info-box-number">{{$parcels->total()}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills nav-fill navtab-bg">
                            <li class="nav-item mt-2">
                                <a href="#parcel" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                    Parcels
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a href="#payments" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    Payments
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="parcel">
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Cod</th>
                                            <th>D. Charge</th>
                                            <th>C. Charge</th>
                                            <th>Payable</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($parcels as $key => $value)
                                            <tr>
                                                <td>{{$value->created_at->format('F d, Y h:i A')}}</td>
                                                <td>৳{{$value->cod}}</td>
                                                <td>৳{{$value->delivery_charge}}</td>
                                                <td>৳{{$value->cod_charge}}</td>
                                                <td>৳{{$value->payable_amount}}</td>
                                                <td>{{ $value->parcelstatus?$value->parcelstatus->name: '' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="custom-paginate">
                                     {{ $parcels->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                            <!-- end  item-->
                            <div class="tab-pane" id="payments">
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Invoice</th>
                                            <th>Amount</th>
                                            <th>Method</th>
                                            <th>TrxID</th>
                                            <th>Parcels</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($payments as $key => $value)
                                            <tr>
                                                <td>{{$value->created_at->format('F d, Y h:i A')}}</td>
                                                <td>{{$value->invoice_id}}</td>
                                                <td>৳{{$value->payable_amount}}</td>
                                                <td>{{$value->payment_method}}</td>
                                                <td>{{$value->trx_id}}</td>
                                                <td>{{$value->paymentdetails_count}}</td>
                                                <td>{{$value->status}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="custom-paginate">
                                     {{ $payments->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                            <!-- end  item-->
                        </div> <!-- end tab-content -->
                    </div>
                </div> <!-- end card-->

            </div> <!-- end col -->
        </div>
        <!-- end row-->

    </div> <!-- container -->

    </div> <!-- content -->
@endsection


@section('script')
    <script src="{{ asset('public/backEnd/') }}/assets/libs/parsleyjs/parsley.min.js"></script>
    <script src="{{ asset('public/backEnd/') }}/assets/js/pages/form-validation.init.js"></script>
    <script src="{{ asset('public/backEnd/') }}/assets/libs/select2/js/select2.min.js"></script>
    <script src="{{ asset('public/backEnd/') }}/assets/js/pages/form-advanced.init.js"></script>
@endsection
