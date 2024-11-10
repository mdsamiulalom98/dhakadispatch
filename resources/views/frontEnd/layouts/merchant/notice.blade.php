@extends('frontEnd.layouts.merchant.master')
@section('title', 'Notice')
@section('content')
	<div class="page-header">
		<h5>Notice</h5>
	</div>
	<div class="page-content">
	    <div class="row justify-content-center">
	       <div class="col-sm-8">
	    		@foreach($notices as $key=>$value)
		       	<div class="notice-item">
		       		<h6><strong>{{$value->title}}</strong></h6>
		       		<p><small>{{$value->created_at->diffForHumans()}}</small></p>
		       		<div class="mt-2">{!! $value->description !!}</div>
		       	</div>
	       		@endforeach
	       </div>
	    </div>
	    <!--end-row-->
	</div>
@endsection
