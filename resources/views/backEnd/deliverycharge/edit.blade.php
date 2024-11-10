@extends('backEnd.layouts.master')
@section('title','Thana Edit')
@section('css')
<link href="{{asset('public/backEnd')}}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('public/backEnd')}}/assets/libs/summernote/summernote-lite.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="{{route('cities.index')}}" class="btn btn-primary rounded-pill">Manage</a>
                </div>
                <h4 class="page-title">Thana Edit</h4>
            </div>
        </div>
    </div>       
    <!-- end page title --> 
   <div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <form action="{{route('deliverycharge.update')}}" method="POST" class="row" data-parsley-validate="" name="editForm"  enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$edit_data->id}}" name="id">
                    
                      <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label for="service_id" class="form-label">Service Type *</label>
                             <select class="form-control select2  @error('service_id') is-invalid @enderror" id="service_id" name="service_id" value="{{ old('service_id') }}" data-toggle="select2"  data-placeholder="Choose ..." required>
                                <optgroup >
                                    <option value="">Choose..</option>
                                    @foreach($servicetypes as $key=>$value)
                                    <option value="{{ $value->id }}" {{$edit_data->service_id == $value->id ? 'selected' : ''}}>{{ $value->name }}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                            @error('service_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col end -->
                    <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label for="zone_id" class="form-label">Delivery Zone *</label>
                             <select class="form-control select2  @error('zone_id') is-invalid @enderror" id="zone_id" name="zone_id" value="{{ old('zone_id') }}" data-toggle="select2"  data-placeholder="Choose ..." required>
                                <optgroup >
                                    <option value="">Choose..</option>
                                    @foreach($zones as $key=>$value)
                                    <option value="{{ $value->id }}" {{$edit_data->zone_id == $value->id ? 'selected' : ''}}>{{ $value->name }}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                            @error('zone_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col end -->

                    <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label for="amount" class="form-label">Delivery Charge*</label>
                            <input type="text" id="amount" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ $edit_data->amount }}" id="amount" required="">
                            @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col-end -->
                   
                    <div class="col mb-3">
                        <div class="form-group">
                            <label for="status" class="d-block">Status</label>
                            <label class="switch">
                              <input type="checkbox" value="1" name="status" @if($edit_data->status==1)checked @endif>
                              <span class="slider round"></span>
                            </label>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col end -->
                    
                    
                    
                    <div>
                        <input type="submit" class="btn btn-success" value="Submit">
                    </div>

                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
   </div>
</div>
@endsection



@section('script')
<script src="{{asset('public/backEnd/')}}/assets/libs/parsleyjs/parsley.min.js"></script>
<script src="{{asset('public/backEnd/')}}/assets/js/pages/form-validation.init.js"></script>
<script src="{{asset('public/backEnd/')}}/assets/libs/select2/js/select2.min.js"></script>
<script src="{{asset('public/backEnd/')}}/assets/js/pages/form-advanced.init.js"></script>

<script src="{{asset('public/backEnd/')}}/assets/libs//summernote/summernote-lite.min.js"></script>
<script>
    $(".summernote").summernote({
        placeholder: "Enter Your Text Here",    
    });
</script>
@endsection