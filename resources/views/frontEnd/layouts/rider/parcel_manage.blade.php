@extends('frontEnd.layouts.rider.master')
@section('title',$type.' Parcel')
@section('content')
	<div class="page-header">
		<div class="parcle-header">	
			<h5>{{$type}} Parcel</h5>
			<form class="mobile-show">
				<select onchange="window.location.href=this.value" class="form-select">
				    <option value="{{route('rider.parcel.index','all')}}">All</option>
				    @foreach($parcelstatus as $status)
				    <option value="{{route('rider.parcel.index',$status->slug)}}" {{$type == $status->name ? 'selected' : ''}}>{{$status->name}}</option>
				    @endforeach
				</select>
			</form>
		</div>	
		<div class="manage-btns">
			<ul>
				<li><a href="{{route('rider.parcel.index','all')}}"class="bg-info {{$type == 'All' ? 'active' :''}}">All</a></li>
				@foreach($parcelstatus as $status)
				<li><a href="{{route('rider.parcel.index',$status->slug)}}" class="bg-info {{$type == $status->name ? 'active' :''}}">{{$status->name}}</a></li>
				@endforeach
			</ul>
		</div>
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
							<th class="desktop-show">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($parcels as $key=>$value)
						<tr>
							<td class="desktop-show"><a href="{{route('rider.parcel.view',$value->parcel_id)}}">{{$value->parcel_id}}</a></td>
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
							<td class="desktop-show"><a href="{{route('rider.parcel.view',$value->parcel_id)}}" class="btn-view">View</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection