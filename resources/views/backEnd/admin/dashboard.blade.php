@extends('backEnd.layouts.master')
@section('title','Dashboard')
@section('css')
<!-- Plugins css -->
<link href="{{asset('public/backEnd/')}}/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('public/backEnd/')}}/assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<!-- Start Content-->
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right"></div>
                <h4 class="page-title">Parcel Information</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 
       <div class="row">
        <div class="col-md-6 col-xl-3">
            <a href="{{route('admin.parcel.index','all')}}">
               <div class="info-box" >
                        <span class="info-box-icon text-white box-bg-10"><i class="fa-solid fa-file"></i></span>
                    <div class="info-box-content" >
                        <span class="info-box-text">All Parcel</span>
                        <span class="info-box-number">{{DB::table('parcels')->count()}}</span>
                    </div>
                </div>
            </a>
        </div> <!-- end col-->
        @foreach($parcelstatus as $key=>$status)
        <div class="col-md-6 col-xl-3">
            <a href="{{route('admin.parcel.index',$status->slug)}}">
               <div class="info-box" >
                        <span class="info-box-icon text-white box-bg-{{$key+1}}"><i class="{{$status->icon}}"></i></span>
                    <div class="info-box-content" >
                        <span class="info-box-text">{{$status->name}}</span>
                        <span class="info-box-number">{{$status->parcels_count}}</span>
                    </div>
                </div>
            </a>
        </div> <!-- end col-->
        @endforeach
         <div class="col-md-6 col-xl-3">
            <a href="{{route('admin.parcel.index','all')}}">
               <div class="info-box" >
                        <span class="info-box-icon text-white box-bg-12"><i class="fa-solid fa-eye"></i></span>
                    <div class="info-box-content" >
                        <span class="info-box-text">Parcels</span>
                        <span class="info-box-number">View All</span>
                    </div>
                </div>
            </a>
        </div> <!-- end col-->
    </div>
    <!-- end row-->
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
        <div class="col-md-6 col-xl-3">
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
        <div class="col-md-6 col-xl-3">
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
        <div class="col-md-6 col-xl-3">
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
                                <h3 class="text-dark mt-1">৳<span data-plugin="counterup">{{$total_hold}}</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Hold</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div>
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->
        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                                <i class="fe-box font-22 avatar-title text-warning"></i>
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
    </div> <!-- end row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body pb-2">
                    <div class="float-end d-none d-md-inline-block">
                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-xs btn-secondary">Monthly</button>
                        </div>
                    </div>

                    <h4 class="header-title mb-3">Parcel Analytics</h4>

                    <div dir="ltr">
                        <div id="sales-analytics" class="mt-4" data-colors="#1abc9c,#4a81d4"></div>
                    </div>
                </div>
            </div> <!-- end card -->
        </div> <!-- end col-->
    </div>

</div> <!-- container -->
@endsection
@section('script')
 <!-- Plugins js-->
    <script src="{{asset('public/backEnd/')}}/assets/libs/flatpickr/flatpickr.min.js"></script>
    <script src="{{asset('public/backEnd/')}}/assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="{{asset('public/backEnd/')}}/assets/libs/selectize/js/standalone/selectize.min.js"></script>

    <script>
    var colors = ["#f1556c"],
    dataColors = $("#total-revenue").data("colors");
    dataColors && (colors = dataColors.split(","));
    var options = {
          series: [@if($total_delivered && $total_paid){{round(($total_delivered*100)/$total_paid)}} @endif],
          chart: {
             height: 242,
             type: "radialBar"
          },
          plotOptions: {
             radialBar: {
                hollow: {
                   size: "65%"
                }
             }
          },
          colors: colors,
          labels: ["Delivery"]
       },
        chart = new ApexCharts(document.querySelector("#total-revenue"), options);
        chart.render();
        colors = ["#1abc9c", "#4a81d4"];
        (dataColors = $("#sales-analytics").data("colors")) && (colors = dataColors.split(","));
        options = {
           series: [{
              name: "Parcel",
              type: "column",
              data: [@foreach($monthly_sale as $sale) {{$sale->cod}}, @endforeach]
           }, {
              name: "Delivered",
              type: "line",
              data: [@foreach($monthly_sale as $sale) {{$sale->cod}}, @endforeach]
           }],
           chart: {
              height: 378,
              type: "line",
           },
           stroke: {
              width: [2, 3]
           },
           plotOptions: {
              bar: {
                 columnWidth: "50%"
              }
           },
           colors: colors,
           dataLabels: {
              enabled: !0,
              enabledOnSeries: [1]
           },
           labels: [@foreach($monthly_sale as $sale) {{date('d', strtotime($sale->date))}} + '-' + {{date('m', strtotime($sale->date))}}+ '-' + {{date('Y', strtotime($sale->date))}}, @endforeach],
           legend: {
              offsetY: 7
           },
           grid: {
              padding: {
                 bottom: 20
              }
           },
           fill: {
              type: "gradient",
              gradient: {
                 shade: "light",
                 type: "horizontal",
                 shadeIntensity: .25,
                 gradientToColors: void 0,
                 inverseColors: !0,
                 opacityFrom: .75,
                 opacityTo: .75,
                 stops: [0, 0, 0]
              }
           },
           yaxis: [{
              title: {
                 text: "Parcel Amount"
              }
           }]
        };
        (chart = new ApexCharts(document.querySelector("#sales-analytics"), options)).render(), $("#dash-daterange").flatpickr({
           altInput: !0,
           mode: "range",
        });
    </script>
@endsection