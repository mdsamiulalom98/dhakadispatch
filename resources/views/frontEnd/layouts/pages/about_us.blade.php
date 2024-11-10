@extends('frontEnd.layouts.master')
@section('title','About Us')
@push('css')
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/owl.theme.default.min.css') }}" />
@endpush
@section('content')
<section class="page-section" style="background-image:url('public/frontEnd/images/page-banner.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title">
					<h5>About Us</h5>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="about-section section-padding">
 	<div class="container">
 		@foreach($about as $key=>$value)
 		<div class="row">
 			<div class="col-sm-6">
 				<div class="about-text">
 					<h5>About Us</h5>
 					<h2>{{$value->title}}</h2>
 					<p>{{$value->description}}</p>
 				</div>
 			</div>
 			<div class="col-sm-6">
 				<div class="about-image">
 					<img src="{{asset($value->image)}}" alt="">
 				</div>
 			</div>
 		</div>
 		@endforeach
 	</div>
 </section>
 <section class="mission-section">
 	<div class="container">
 		@foreach($mission as $key=>$value)
 		<div class="row">
 			<div class="col-sm-6">
 				<div class="about-image">
					<img src="{{asset($value->image)}}" alt="">
				</div>
 			</div>
 			<div class="col-sm-6">
 				<div class="about-text">
 					<h5 class="mb-4">Our Mission</h5>
 					<p>{{$value->description}}</p>
 				</div>
 			</div>
 		</div>
 		@endforeach
 	</div>
 </section>
 <section class="vision-section">
 	<div class="container">
 		@foreach($vission as $key=>$value)
 		<div class="row">
 			<div class="col-sm-6">
 				<div class="about-text">
 					<h5 class="mb-4">Our Vision</h5>
 					<p>{{$value->description}}</p>
 				</div>
 			</div>
 			<div class="col-sm-6">
 				<div class="about-image">
					<img src="{{asset($value->image)}}" alt="">
				</div>
 			</div>
 		</div>
 		@endforeach
 	</div>
 </section>
@endsection
@push('script')
<script src="{{ asset('public/frontEnd/js/owl.carousel.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $(".feedback_slider").owlCarousel({
            margin: 30,
            items: 4,
            loop: true,
            dots: false,
            nav: false,
            autoplay: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                },
                600: {
                    items: 2,
                    nav: false,
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false,
                },
            },
        });
    });
</script>
@endpush