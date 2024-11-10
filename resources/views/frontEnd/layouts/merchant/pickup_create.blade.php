@extends('frontEnd.layouts.merchant.master')
@section('title','Parcel Request')
@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6"><h6><strong>Pickup Request</strong></h6></div>
            <div class="col-sm-6">
                <div class="payment-btns text-end">
                    <ul>
                        <li><a href="{{route('merchant.pickup.index')}}" class="btn btn-primary">Pickup Manage</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	<div class="page-content">
		<div class="row justify-content-center">
			<div class="col-sm-7">
				<div class="parcel-create">
                   <div class="row my-3">
                       <div class="col-8">
                           <h6><strong>Address : {{$profile->address}}, {{ $profile->district ? $profile->district->name : '' }}, {{ $profile->area ? $profile->area->name : '' }}</strong></h6>
                       </div>
                       <div class="col-4 text-end">
                           <a href="{{route('merchant.settings')}}" class="btn btn-info btn-sm text-white"><i class="fa-solid fa-edit"></i> Edit</a>
                       </div>
                   </div>
					<form action="{{ route('merchant.pickup.store') }}" method="POST"
                        enctype="multipart/form-data" data-parsley-validate="" class="row">
                        @csrf
                        <div class="col-sm-12 mb-3">
                            <label class="form-label" for="type">Pickup Type<span>*</span></label>
                            <div class="form-group">
                                <select class="form-control select2 type" name="type" id="type">
                                    <option value="">Select..</option>
                                    @foreach ($types as $key => $value)
                                        <option value="{{ $value->id }}">
                                            {{ $value->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- form group -->
                        </div>
                        <!-- col end -->
                        <div class="col-sm-12 mb-3">
                            <label class="form-label" for="estimedparcel">Estimate Parcel *</label>
                            <div class="form-group">
                                <input type="number" class="form-control {{ $errors->has('estimedparcel') ? 'is-invalid' : '' }}" name="estimedparcel" id="estimedparcel" value="{{old('estimedparcel')}}" placeholder="Type Parcel Qty">
                                @if($errors->has('estimedparcel'))
                                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('estimedparcel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- col end -->
                        <div class="col-sm-12 mb-3">
                            <label class="form-label" for="note">Note (Optional)</label>
                            <div class="form-group">
                                <textarea  class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note" value="{{old('note')}}" placeholder="Your Note"></textarea>
                                @if($errors->has('note'))
                                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('note') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- col end -->
                        <div class="col-sm-12 mt-3">
                            <div class="form-group">
                                <button class="btn-submit d-block">Submit</button>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
@endsection