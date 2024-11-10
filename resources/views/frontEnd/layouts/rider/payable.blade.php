@extends('frontEnd.layouts.rider.master')
@section('title','Payable Parcel')
@section('content')
	<div class="page-header">
		<h5>Payable Parcel</h5>
	</div>
	<div class="page-content">
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-responsive parcel-table">
					<thead>
						<tr>
							<th>Parcel ID</th>
							<th>Invoice</th>
							<th>Recepient</th>
							<th>Delivery Status</th>
							<th>Amount</th>
							<th>Charge</th>
							<th>Commission</th>
						</tr>
					</thead>
					<tbody>
						@foreach($parcels as $key=>$value)
						<tr>
							<td>{{$value->parcel_id}}</td>
							<td>{{$value->merchant_invoice??'N/A'}}</td>
							<td>{{$value->name}}</td>
							<td><span class="@if($value->status == 1) warning @else success @endif"> {{$value->parcelstatus?$value->parcelstatus->name:''}}</span></td>
							<td>৳ {{$value->cod}}</td>
							<td>৳ {{$value->delivery_charge+$value->cod_charge}}</td>
							<td>৳ {{$value->rider_commission}}</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<td colspan="5"></td>
							<td><strong>Total</strong></td>
							<td><strong>৳ {{$parcels->sum('rider_commission')}}</strong></td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
@endsection