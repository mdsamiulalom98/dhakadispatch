@extends('frontEnd.layouts.master')
@section('title','Parcel Create')
@section('content')
<section class="page-section" style="background-image:url('public/frontEnd/images/page-banner.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title">
					<h5>Parcel Create</h5>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="guest-parcel-section">
	<div class="container">
		<div class="row justify-content-center">
            <div class="col-sm-10">
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
@endsection
