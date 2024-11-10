@extends('frontEnd.layouts.merchant.master')
@section('title','Pickup Manage')
@section('content')
	<div class="page-header">
		<div class="parcle-header">	
			<h5>Pickup Request</h5>
		</div>	
	</div>
	<div class="page-content">
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-responsive parcel-table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Date</th>
							<th>E.Parcel</th>
							<th>Rider</th>
							<th>Status</th>
							<th>Note</th>
						</tr>
					</thead>
					<tbody>
						@foreach($pickups as $key=>$value)
						<tr>
							<td>{{$value->pickup_id}}</td>
							<td>{{$value->created_at}}</td>
							<td>{{$value->estimedparcel}}</td>
							<td>{{$value->rider?$value->rider->name:'Not Assign'}}</td>
							<td><span class="@if($value->status == 'pending') warning @else success @endif"> {{$value->status}}</span></td>
							<td>{{$value->note}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection