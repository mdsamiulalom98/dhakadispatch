@extends('frontEnd.layouts.master')
@section('title', 'Home')
@push('css')
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/owl.theme.default.min.css') }}" />
@endpush
@section('content')
<section class="slider-section">
    <div class="main-slider">
        @foreach($sliders as $key=>$value)
        <div class="slider-item">
            <img src="{{asset($value->image)}}" alt="">
            <div class="slider-text">
                <h2>{{$value->title}}</h2>
                <p>{!! $value->description !!}</p>
                <a href="{{route('merchant.register')}}" class="slider_btn">Become a merchant</a>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- our service section -->
<section class="service-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-7">
                <div class="track-form">
                    <form action="{{route('parcel.track')}}">
                        <div class="form-group">
                            <label for="track_id">Tracking ID</label>
                            <input type="text" class="form-control" name="parcel_id" value="" required>
                        </div>
                        <div class="form-group">
                            <button>Track Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h4>Our <span>Services</span></h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
           @foreach($regular_services as $key=>$value)
            <div class="col-sm-4">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset($value->image)}}" alt="">
                    </div>
                    <div class="service-text">
                        <h5>{{$value->title}}</h5>
                        <p>{!! $value->description !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
      </div>
      <div class="row">
            <div class="col-sm-12">
                <div class="section-title pt-0 pb-4">
                    <h4>Advance <span>Services</span></h4>
                </div>
            </div>
        </div>
      <div class="row justify-content-center">
           @foreach($advance_services as $key=>$value)
            <div class="col-sm-4">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset($value->image)}}" alt="">
                    </div>
                    <div class="service-text">
                        <h5>{{$value->title}}</h5>
                        <p>{!! $value->description !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
      </div>
    </div>
</section>
<!-- our service section -->

<!-- our pricing section -->
<section class="pricing-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h4>Our <span>Pricing</span></h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-9">
                <div class="pricing-title">
                    <h4>Within Dhaka City</h4>
                </div>
            </div>
            <div class="col-sm-9">
                <table class="table table-bordered">
                    <thead>
                        <tr class="dark_tr">
                        @foreach($within_dhaka as $key=>$value)
                            <td>{{$value->title}}</td>
                        @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach($within_dhaka as $key=>$value)
                            <td><strong>{{$value->charge}}</strong></td>
                        @endforeach
                        </tr>
                        <tr>
                        @foreach($within_dhaka as $key=>$value)
                            <td>{{$value->description}}</td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-9">
                <div class="pricing-title">
                    <h4> Advanced Delivery Features</h4>
                </div>
            </div>
            <div class="col-sm-9">
                <table class="table table-bordered">
                    <thead>
                        <tr class="dark_tr">
                        @foreach($advance_delivery as $key=>$value)
                            <td>{{$value->title}}</td>
                        @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach($advance_delivery as $key=>$value)
                            <td><strong>{{$value->charge}}</strong></td>
                        @endforeach
                        </tr>
                        <tr>
                        @foreach($advance_delivery as $key=>$value)
                            <td>{{$value->description}}</td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-9">
                <div class="pricing-title">
                    <h4> Suburban & Outside Dhaka Delivery</h4>
                </div>
            </div>
            <div class="col-sm-9">
                <table class="table table-bordered">
                    <thead>
                        <tr class="dark_tr">
                        @foreach($suburb_delivery as $key=>$value)
                            <td>{{$value->title}}</td>
                        @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach($suburb_delivery as $key=>$value)
                            <td><strong>{{$value->charge}}</strong></td>
                        @endforeach
                        </tr>
                        <tr>
                        @foreach($suburb_delivery as $key=>$value)
                            <td>{{$value->description}}</td>
                        @endforeach
                        </tr>
                    </tbody>

                </table>
                <h6 class="mb-4"><strong>No Weight Charges are Applied inside the Dhaka City.</strong></h6>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-9">
                <div class="pricing-title">
                    <h4>Weight Charges</h4>
                </div>
            </div>
            <div class="col-sm-9">
                <table class="table table-bordered">
                    <thead>
                        <tr class="dark_tr">
                        @foreach($weight_charge as $key=>$value)
                            <td>{{$value->title}}</td>
                        @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach($weight_charge as $key=>$value)
                            <td><strong>{{$value->charge}}</strong></td>
                        @endforeach
                        </tr>
                        <tr>
                        @foreach($weight_charge as $key=>$value)
                            <td>{{$value->description}}</td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- our pricing section -->

<!-- our why-choose section -->
<section class="why-choose-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h4>Why Choose <span>Us</span></h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-9">
                @foreach($whychooseus as $key=>$value)
                <div class="whychoose-us">
                    {!! $value->description !!}
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- our why-choose section -->
<section class="guest-parcel-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h4>Create Your <span>Parcel</span></h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <form action="{{ route('guest.parcel.store') }}" method="POST"
                        enctype="multipart/form-data" data-parsley-validate="" class="row">
                        @csrf
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-4 mb-3">
                                    <label class="form-label" for="name">Customer Name<span>*</span></label>
                                    <div class="form-group">
                                        <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" value="{{old('name')}}" placeholder="Type Customer Name" required>
                                        @if($errors->has('name'))
                                             <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- col end -->
                                <div class="col-sm-4 mb-3">
                                    <label class="form-label" for="phone">Customer Phone<span>*</span></label>
                                    <div class="form-group">
                                        <input type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone" id="phone" value="{{old('phone')}}" placeholder="Type Customer Number" required>
                                        @if($errors->has('phone'))
                                             <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- col end -->
                                <div class="col-sm-4 mb-3">
                                    <label class="form-label" for="address">Address<span>*</span></label>
                                    <div class="form-group">
                                        <input type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address" value="{{old('address')}}" placeholder="Type Customer Number" required>
                                        @if($errors->has('address'))
                                             <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- col end -->
                                <div class="col-sm-4 mb-3">
                                    <label class="form-label" for="service_id">Service Type<span>*</span></label>
                                    <div class="form-group">
                                        <select class="form-control select2 service_id" name="service_id" id="service_id">
                                            <option value="">Select..</option>
                                            @foreach ($servicetypes as $key => $value)
                                                <option value="{{ $value->id }}">
                                                    {{ $value->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- form group -->
                                </div>
                                <!-- col end -->
                                <div class="col-sm-4 mb-3">
                                    <div class="form-group">
                                        <label class="form-label" for="zone_id">Delivery Zone<span>*</span></label>
                                        <select class="form-control select2 zone cost_calculate" name="zone_id" id="zone_id">
                                            <option value="">Select..</option>
                                        </select>
                                    </div>
                                    <!-- form group -->
                                </div>
                                <!-- col end -->
                                <div class="col-sm-4 mb-3">
                                    <label class="form-label" for="district">District<span>*</span></label>
                                    <div class="form-group">
                                        <select class="form-control select2 district" name="district" id="district">
                                            <option value="">Select..</option>
                                            @foreach ($districts as $key => $value)
                                                <option value="{{ $value->id }}">
                                                    {{ $value->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- form group -->
                                </div>
                                <!-- col end -->
                                <div class="col-sm-4 mb-3">
                                    <div class="form-group">
                                        <label class="form-label" for="area">Thana/Area<span>*</span></label>
                                        <select class="form-control select2 area cost_calculate" name="area" id="area">
                                            <option value="">Select..</option>
                                        </select>
                                    </div>
                                    <!-- form group -->
                                </div>
                                <!-- col end -->
                                <div class="col-sm-4 mb-3">
                                    <label class="form-label" for="merchant_id">Merchant ID <span>*</span></label>
                                    <div class="form-group">
                                        <input class="merchant_id form-control {{ $errors->has('merchant_id') ? 'is-invalid' : '' }}" name="merchant_id" id="merchant_id" value="{{old('merchant_id')}}" placeholder="Type Your Merchant ID">
                                        @if($errors->has('merchant_id'))
                                             <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('merchant_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- col end -->
                                <div class="col-sm-4 mb-3">
                                    <label class="form-label" for="cod">Cash Collection Amount<span>*</span></label>
                                    <div class="form-group">
                                        <input type="number" class="cod cost_calculate form-control {{ $errors->has('cod') ? 'is-invalid' : '' }}" name="cod" id="cod" value="{{old('cod')}}" placeholder="Type COD Amount" required>
                                        @if($errors->has('cod'))
                                             <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('cod') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- col end -->
                                <div class="col-sm-4 mb-3">
                                    <label class="form-label" for="weight">Parcel Weight<span>*</span></label>
                                    <div class="form-group">
                                        <input type="number" class="weight cost_calculate form-control {{ $errors->has('weight') ? 'is-invalid' : '' }}" name="weight" id="weight" value="{{old('weight')}}" placeholder="Type Parcel Weight" required>
                                        @if($errors->has('weight'))
                                             <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('weight') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- col end -->
                                <div class="col-sm-8 mb-3">
                                    <label class="form-label" for="note">Note (Optional)</label>
                                    <div class="form-group">
                                        <input class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note" value="{{old('note')}}" placeholder="Type Invoice ID">
                                        @if($errors->has('note'))
                                             <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('note') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- col end -->
                                <div class="col-sm-3 mt-3">
                                    <div class="form-group">
                                        <button class="btn-submit d-block">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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

@push('script')
<script src="{{ asset('public/frontEnd/js/owl.carousel.min.js') }}"></script>
<!-- <script>
    $(document).ready(function() {
        $(".main-slider").owlCarousel({
            margin: 0,
            items: 1,
            loop: true,
            dots: false,
            nav: false,
            autoplay: true,
        });
    });
</script> -->
@endpush
