@extends('frontEnd.layouts.master')
@section('title','Coverate Area')
@section('content')
<section class="page-section" style="background-image:url('public/frontEnd/images/page-banner.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title">
					<h5>Coverage</h5>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="track_search">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-8">
				<div class="track-search">
					<form action="">
						<input type="text" placeholder="Search Parcel ID" value="{{request('keyword')}}">
						<button><i class="fa-solid fa-search"></i> Search</button>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
			    <div class="coverage_area">
			        <ul>
			            @foreach($coverages as $coverage)
    			            <li><a class="title">{{$coverage->name}}</a>
    			               @foreach($coverage->areas as $area)
        			             <a>{{$area->name}}</a>
        			            @endforeach
    			            </li>
    			            
			            @endforeach
			        </ul>
			    </div>
			</div>
		</div>
	</div>
</section>
@endsection
