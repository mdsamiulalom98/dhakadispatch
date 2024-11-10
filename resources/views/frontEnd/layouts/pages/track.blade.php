@extends('frontEnd.layouts.master')
@section('title','Parcel Track')
@section('content')
<section class="track_search">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-8">
				<div class="track-search">
					<form action="">
						<input type="text" placeholder="Search Parcel ID" value="{{request('parcel_id')}}">
						<button><i class="fa-solid fa-search"></i> Search</button>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			@if($parcel)
			<div class="col-sm-12">
				<div class="parcel-box">
					<div class="parcel-info d-flex justify-content-between">
						<div class="parcel-info-left">
							<p>{{$parcel->updated_at->format('F d, Y h:i A')}}</p>
							<p>Parcel ID: {{$parcel->parcel_id}}</p>
							<p>Invoice: {{$parcel->merchant_invoice??'N/A'}}</p>
							<p>Tracking Link: {{url('track/'.$parcel->parcel_id)}}</p>
						</div>
						<div class="parcel-info-right text-end">
							<p>Created: {{$parcel->created_at->format('F d, Y h:i A')}}</p>
							<p>Weight: <strong>{{$parcel->weight}} kg</strong></p>
							<h5><strong>Cod: {{$parcel->cod}} Tk</strong></h5>
							<p><span class="@if($parcel->status == 1) warning @else success @endif"> {{$parcel->parcelstatus?$parcel->parcelstatus->name:''}}</span></p>
							<p>Charge: <strong>{{$parcel->delivery_charge+$parcel->cod_charge}} Tk</strong></p>
							<p>Payable: <strong>{{$parcel->payable_amount}} Tk</strong></p>
							<p>Payment Status: <strong>{{$parcel->payment_status}}</strong></p>
						</div>
					</div>
					<div class="parcel-customer">
						<p><strong>Name : </strong> {{$parcel->name}}</p>
						<p><strong>Phone : </strong> <a href="tel:{{$parcel->phone}}">{{$parcel->phone}}  <span class="btn btn-primary btn-sm mx-1">Call</span></a></p>
						<p><strong>Address : </strong> {{$parcel->address}}</p>
						<p><strong>District : </strong> {{$parcel->district->name??''}}</p>
						<p><strong>Thana/Area : </strong> {{$parcel->area->name??''}}</p>
					</div>
					<div class="parcel-note">
						<h5 class="bg-light p-2 text-center"><strong>Note</strong></h5>
						<div>{{$parcel->note}}</div>
					</div>
				</div>
				<div class="my-4">
					<h5>Parcel Update</h5>
				</div>
				<div class="parcel-box py-2">
					<div class="parcel-tracking">
						@foreach($notes as $key=>$value)
						<div class="tracking-step">
							<div class="tracking-time">
								<p class="text-primary">{{$value->created_at->format('F d, Y ')}}</p>
								<p class="text-primary">{{$value->created_at->format('h:i A')}}</p>
							</div>
							<div class="tracking-icon @if($loop->first) bar-none @endif">
								<i class="fa-solid fa-circle-check"></i>
							</div>
							<div class="tracking-note">
								<p>{{$value->note}}</p>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			@endif
		</div>
	</div>
</section>
@endsection
