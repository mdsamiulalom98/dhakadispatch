@extends('frontEnd.layouts.merchant.master')
@section('title','Parcel Create')
@section('content')
	<div class="page-header">
		<h5>Parcel Create</h5>
	</div>
	<div class="page-content">
		<div class="row">
			<div class="col-sm-12">
				<div class="parcel-create">
					<form action="{{ route('merchant.parcel.store') }}" method="POST"
                        enctype="multipart/form-data" data-parsley-validate="" class="row">
                        @csrf
                        <div class="col-sm-8">
                        	<div class="row">
                        		<div class="col-sm-6 mb-3">
		                            <label class="form-label" for="name">Name<span>*</span></label>
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
		                        <div class="col-sm-6 mb-3">
		                            <label class="form-label" for="phone">Phone<span>*</span></label>
		                            <div class="form-group">
		                                <input type="text" class="check_fraud form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone" id="phone" value="{{old('phone')}}" placeholder="Type Customer Number" required>
		                                @if($errors->has('phone'))
		                                     <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $errors->first('phone') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>
		                        <div class="col-sm-12">
		                            <div class="check_result"></div>
		                        </div>
		                        <!-- col end -->
		                        <div class="col-sm-12 mb-3">
		                            <label class="form-label" for="address">Address<span>*</span></label>
		                            <div class="form-group">
		                                <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address" value="{{old('address')}}" placeholder="Type Customer Address" required></textarea>
		                                @if($errors->has('address'))
		                                     <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $errors->first('address') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>
		                        <!-- col end -->
		                        <div class="col-sm-6 mb-3">
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
		                        <div class="col-sm-6 mb-3">
		                            <div class="form-group">
		                                <label class="form-label" for="zone_id">Delivery Zone<span>*</span></label>
		                                <select class="form-control select2 zone cost_calculate" name="zone_id" id="zone_id">
		                                    <option value="">Select..</option>
		                                </select>
		                            </div>
		                            <!-- form group -->
		                        </div>
		                        <!-- col end -->
		                        <div class="col-sm-6 mb-3">
		                            <label class="form-label" for="district">District</label>
		                            <div class="form-group">
		                                <select class="form-control select2 district" name="district" id="district">
		                                    <option value="">Select..</option>
		                                    @foreach ($districts as $key => $value)
		                                        <option value="{{ $value->id }}"
		                                            {{(Auth::guard('merchant')->user()->district_id == $value->id)? 'selected' : ''}}>
		                                            {{ $value->name }}
		                                        </option>
		                                    @endforeach
		                                </select>
		                            </div>
		                            <!-- form group -->
		                        </div>
		                        <!-- col end -->
		                        <div class="col-sm-6 mb-3">
		                            <div class="form-group">
		                                <label class="form-label" for="area">Thana/Area</label>
		                                <select class="form-control select2 area" name="area" id="area">
		                                    <option value="">Select..</option>
		                                    @foreach ($areas as $key => $area)
		                                        <option value="{{ $area->id }}">
		                                            {{ $area->name }}</option>
		                                    @endforeach
		                                </select>
		                            </div>
		                            <!-- form group -->
		                        </div>
		                        <!-- col end -->

		                        <div class="col-sm-6 mb-3">
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
		                        <div class="col-sm-6 mb-3">
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
		                        <div class="col-sm-6 mb-3">
		                            <label class="form-label" for="merchant_invoice">Invoice ID (Optional)</label>
		                            <div class="form-group">
		                                <input class="form-control {{ $errors->has('merchant_invoice') ? 'is-invalid' : '' }}" name="merchant_invoice" id="merchant_invoice" value="{{old('merchant_invoice')}}" placeholder="Type Invoice ID">
		                                @if($errors->has('merchant_invoice'))
		                                     <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $errors->first('merchant_invoice') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>
		                        <!-- col end -->
		                        <div class="col-sm-6 mb-3">
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
                        <div class="col-sm-4">
                        	<div class="parcel-estimate">
                        		<h6>Cost Of Delviery</h6>
                        		<table class="table">
								    <tbody>
								        <tr>
								            <td>Cash Collection</td>
								            <td class="text-end cash_collection">0 Tk</td>
								        </tr>
								        <tr>
								            <td>Delivery Charge(-)</td>
								            <td class="text-end delivery_charge">0 Tk</td>
								        </tr>
								        <tr>
								            <td>Cod Charge(-)</td>
								            <td class="text-end cod_charge">0 Tk</td>
								        </tr>
								    </tbody>
								    <tfoot>
								        <tr>
								            <td><strong>Total Payable Amount</strong></td>
								            <td class="text-end total_payable"><strong>0 Tk</strong></td>
								        </tr>
								    </tfoot>
								</table>

                        	</div>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
@endsection