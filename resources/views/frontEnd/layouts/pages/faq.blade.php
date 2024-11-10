@extends('frontEnd.layouts.master')
@section('title','Freequency Ask Questions')
@push('css')
 <link rel="stylesheet" href="{{ asset('public/frontEnd/') }}/css/select2.min.css">
 @endpush
@section('content')
<section class="page-section" style="background-image:url('public/frontEnd/images/page-banner.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title">
					<h5>Freequency Ask Questions</h5>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- faq section -->
<section class="faq-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h4>Freequency Ask <span>Question</span></h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="accordion" id="accordion_faq">
                    @foreach($faqs as $key=>$value)
                    <!-- Accordion Item 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{$key}}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$key}}" aria-expanded="false" aria-controls="collapse{{$key}}">
                                {{$value->title}}
                            </button>
                        </h2>
                        <div id="collapse{{$key}}" class="accordion-collapse collapse" aria-labelledby="heading{{$key}}" data-bs-parent="#accordion_faq">
                            <div class="accordion-body">
                                {!! $value->description !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq section -->
@endsection
