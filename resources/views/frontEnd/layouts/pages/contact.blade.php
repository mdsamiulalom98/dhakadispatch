@extends('frontEnd.layouts.master')
@section('title','Contact Us')
@section('content')
<section class="page-section" style="background-image:url('public/frontEnd/images/page-banner.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title">
					<h5>Contact Us</h5>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contact-area section-padding">
 	<div class="container">
 		<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
            	<div class="contact-map-form">
            		<div class="row">
            			<div class="col-sm-6 col-md-6 col-lg-6">
            			    <div class="contact-inner">
    			 				<div class="contact-thumb">
    			 				    <i class="fa-solid fa-location-dot text-warning"></i>
    			 				    <h2>Address</h2>
    			 				    <p>{{$contact->address}}</p>
    			 				</div>
    			 				<div class="contact-thumb">
    			 				    <i class="fa-solid fa-headphones text-success"></i>
    			 				    <h2>Call Us</h2>
    			 				    <p>{{$contact->hotline}}</p>
    			 				</div>
    			 				<div class="contact-thumb">
    			 				    <i class="fa-solid fa-envelope text-danger"></i>
    			 				    <h2>Mail</h2>
    			 				    <p>{{$contact->email}}</p>
    			 				</div>
    			 				<div class="contact-thumb">
    			 				    <i class="fa-solid fa-phone-volume text-primary"></i>
    			 				    <h2>Merchant</h2>
    			 				    <p>{{$contact->phone}}</p>
    			 				</div>
            			    </div>
			 			</div>
			            <!-- contact item End -->
			            <div class="col-sm-6 col-md-6 col-lg-6">
			 				<div class="contact-item wow fadeInRight">
			 					<div class="contact-form">
			 						<h2>Get In Touch</h2>
			 						<form action="{{url('visitor/contact')}}" method="POST">
			 						@csrf
			 							<div class="form-group mb-3">
			 								<input type="text" id="" class="form-control" name="name" required="" placeholder="Your Name">
			 							</div>
			 							<div class="form-group mb-3">
			 								<input type="email" id="" class="form-control" name="email" required="" placeholder="Your Email">
			 							</div>
			 							<div class="form-group mb-3">
			 								<input type="text" id="" class="form-control" name="phone" required="" placeholder="Phone Number">
			 							</div>
			 							<div class="form-group mb-3">
			 							 <textarea name="message" id="" class="form-control" placeholder="Your Message"></textarea>
			                            </div>
			                             <div class="new">
			                             	<button type="submit" class="btn-submit d-block">Submit</button>
			                             </div>
			 						</form>
			 					</div>
			 				</div>
			 			</div>
            			<!-- contact item End -->
            		</div>
            	</div>
            </div>
 		</div>
 	</div>
 </section>
@endsection