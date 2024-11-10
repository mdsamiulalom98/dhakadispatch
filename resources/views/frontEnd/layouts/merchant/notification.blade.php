@extends('frontEnd.layouts.merchant.master')
@section('title', 'Notification')
@section('content')
	<div class="page-header">
		<h5>Notification</h5>
	</div>
	<div class="page-content">
	    <div class="row justify-content-center">
	       <div class="col-sm-8">
	    		@foreach($notifies as $key=>$value)
		       	<div class="notice-item">
		       	    <a href="{{url($value->link)}}">
		       	        <h6  class="{{$value->status == 0 ? 'fw-bold' : ''}}">{{$value->title}}</h6>
		       		    <p><small>{{$value->created_at->diffForHumans()}}</small></p>
		       	    </a>
		       		
		       	</div>
	       		@endforeach
	       </div>
	    </div>
	    <!--end-row-->
	</div>
@endsection
