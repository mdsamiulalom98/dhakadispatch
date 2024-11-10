@extends('backEnd.layouts.master')
@section('title','Loss Profit')
@section('css')
    <link href="{{ asset('public/backEnd/') }}/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
        <div class="col-12 text-end mt-3">
             <form class="no-print">
                <div class="row justify-content-end">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="date" value="{{ request()->get('start_date') }}"
                                class="form-control flatdate" placeholder="Start Date" name="start_date">
                        </div>
                    </div>
                    <!--col-sm-3-->
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="date" value="{{ request()->get('end_date') }}"
                                class="form-control flatdate" placeholder="End Date" name="end_date">
                        </div>
                    </div>
                    <!--col-sm-3-->
                    <div class="col-sm-1">
                        <div class="form-group">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    <!-- col end -->
                </div>
            </form>
        </div>
    </div>     
    <!-- end row --> 
	<div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right"></div>
                <h4 class="page-title">Payment Summary</h4>
            </div>
        </div>
    </div>     
    <!-- end row --> 
    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="widget-rounded-circle card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                <i class="fe-check-circle font-22 avatar-title text-primary"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="text-dark mt-1">৳<span data-plugin="counterup">{{$total_delivered}}</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Delivered</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div>
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->
        <div class="col-md-6 col-xl-4">
            <div class="widget-rounded-circle card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                <i class="fe-gift font-22 avatar-title text-success"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="text-dark mt-1">৳<span data-plugin="counterup">{{$total_paid}}</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Paid</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div>
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->
        <div class="col-md-6 col-xl-4">
            <div class="widget-rounded-circle card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-danger border-danger border">
                                <i class="fe-box font-22 avatar-title text-danger"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="text-dark mt-1">৳<span data-plugin="counterup">{{$total_hold+$rider_hold}}</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Hold</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div>
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->
    </div> <!-- end row-->

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right"></div>
                <h4 class="page-title">Account Summary</h4>
            </div>
        </div>
    </div>     
    <!-- end row --> 
     <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="widget-rounded-circle card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                <i class="fe-dollar-sign font-22 avatar-title text-info"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="text-dark mt-1">৳<span data-plugin="counterup">{{$total_income}}</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Income</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div>
            </div> <!-- end widget-rounded-circle-->
	    </div> <!-- end col-->
	     <div class="col-md-6 col-xl-4">
	        <div class="widget-rounded-circle card">
	            <div class="card-body">
	                <div class="row">
	                    <div class="col-6">
	                        <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
	                            <i class="fe-database font-22 avatar-title text-warning"></i>
	                        </div>
	                    </div>
	                    <div class="col-6">
	                        <div class="text-end">
	                            <h3 class="text-dark mt-1">৳<span data-plugin="counterup">{{$total_expence}}</span></h3>
	                            <p class="text-muted mb-1 text-truncate">Total Expence</p>
	                        </div>
	                    </div>
	                </div> <!-- end row-->
	            </div>
	        </div> <!-- end widget-rounded-circle-->
	    </div> <!-- end col-->
	     <div class="col-md-6 col-xl-4">
	        <div class="widget-rounded-circle card">
	            <div class="card-body">
	                <div class="row">
	                    <div class="col-6">
	                        <div class="avatar-lg rounded-circle bg-soft-success border-success border">
	                            <i class="fe-airplay font-22 avatar-title text-success"></i>
	                        </div>
	                    </div>
	                    <div class="col-6">
	                        <div class="text-end">
	                            <h3 class="text-dark mt-1">৳<span data-plugin="counterup">{{$total_income - $total_expence}}</span></h3>
	                            <p class="text-muted mb-1 text-truncate">Profit</p>
	                        </div>
	                    </div>
	                </div> <!-- end row-->
	            </div>
	        </div> <!-- end widget-rounded-circle-->
	    </div> <!-- end col-->
    </div> <!-- end row-->
</div>
@endsection

@section('script')
<script src="{{ asset('public/backEnd/') }}/assets/libs/flatpickr/flatpickr.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        flatpickr(".flatdate", {});
    });
</script>
@endsection
