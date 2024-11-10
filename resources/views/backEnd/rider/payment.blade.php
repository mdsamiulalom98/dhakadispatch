@extends('backEnd.layouts.master')
@section('title', request('status'))
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title text-capitalize">{{request('status')}} Payment History</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive ">
                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Date & Inv</th>
                                        <th>Rider</th>
                                        <th>Cod</th>
                                        <th>Delivery Charge</th>
                                        <th>Cod Charge</th>
                                        <th>Payable Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payments as $key => $value)
                                        <tr>
                                            <td>{{$value->created_at->format('d m, Y h:m A')}} <br> {{$value->invoice_id}}</td>
                                            <td>{{$value->rider?$value->rider->name:''}} <br> {{$value->rider?$value->rider->phone:''}}<br>{{$value->rider?$value->rider->address:''}}</td>
                                            <td>৳ {{$value->cod}}</td>
                                            <td>৳ {{$value->delivery_charge}}</td>
                                            <td>৳ {{$value->cod_charge}}</td>
                                            <td>৳ {{$value->payable_amount}}</td>
                                            <td><span class="@if($value->status == 'paid') success @else warning @endif">{{$value->status}}</span> <br> Trx: {{$value->trx_id}}</td>
                                            <td><a href="{{route('riders.invoice',$value->id)}}" class="btn btn-xs btn-primary waves-effect waves-light"><i class="fe-eye"></i></a></td>
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
