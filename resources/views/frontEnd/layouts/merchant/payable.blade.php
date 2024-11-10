@extends('frontEnd.layouts.merchant.master')
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
							<th class="desktop-show">Parcel ID</th>
							<th class="desktop-show">Invoice</th>
							<th>Recepient</th>
							<th>Status</th>
							<th>Amount</th>
							<th class="desktop-show">Payment</th>
						</tr>
					</thead>
					<tbody>
						@foreach($parcels as $key=>$value)
						<tr>
							<td class="desktop-show"><a href="{{route('merchant.parcel.view',$value->parcel_id)}}">{{$value->parcel_id}}</a></td>
							<td class="desktop-show">{{$value->merchant_invoice??'N/A'}}</td>
							<td>
								<p class="mobile-show">{{$value->parcel_id}}</p>
								<p>{{$value->name}}</p>
								<p>{{$value->phone}}</p>
								<p>{{$value->address}}</p>
							</td>
							<td><span class="@if($value->status == 1) warning @else success @endif"> {{$value->parcelstatus?$value->parcelstatus->name:''}}</span> <br><br><span class="mobile-show @if($value->payment_status == 'paid') success @else warning @endif ">{{$value->payment_status}}</span></td>
							<td>
								<p>COD: ৳{{$value->cod}}</p>
								<p>Charge: ৳{{$value->delivery_charge+$value->cod_charge}}</p>
								<p>Payable: ৳{{$value->cod - ($value->delivery_charge+$value->cod_charge)}}</p>
							</td>
							<td class="desktop-show"><span class="@if($value->payment_status == 'paid') success @else warning @endif">{{$value->payment_status}}</span></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
@endsection