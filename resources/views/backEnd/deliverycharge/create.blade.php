@extends('backEnd.layouts.master')
@section('title','Delivery Charge Create')
@section('css')
<link href="{{asset('public/backEnd')}}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('public/backEnd')}}/assets/css/switchery.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('public/backEnd')}}/assets/libs/summernote/summernote-lite.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="{{route('deliverycharge.index')}}" class="btn btn-primary rounded-pill">Manage</a>
                </div>
                <h4 class="page-title">Delivery Charge Create</h4>
            </div>
        </div>
    </div>       
    <!-- end page title --> 
   <div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <form action="{{route('deliverycharge.store')}}" method="POST" class=row data-parsley-validate=""  enctype="multipart/form-data">
                    @csrf                 

                    <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label for="service_id" class="form-label">Service Type *</label>
                             <select class="form-control select2  @error('service_id') is-invalid @enderror" id="service_id" name="service_id" value="{{ old('service_id') }}" data-toggle="select2"  data-placeholder="Choose ..." required>
                                <optgroup >
                                    <option value="">Choose..</option>
                                    @foreach($servicetypes as $servicetype)
                                    <option value="{{ $servicetype->id }}">{{ $servicetype->name }}</option>
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
                                    @foreach($zones as $zone)
                                    <option value="{{ $zone->id }}">{{ $zone->name }}</option>
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
                            <input type="text" id="amount" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" id="amount" required="">
                            @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col-end -->
              
                    <!-- col end -->
                    <div class="col mb-3">
                        <div class="form-group">
                            <label for="status" class="d-block">Status</label>
                            <label class="switch">
                              <input type="checkbox" value="1" name="status" checked>
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
<script src="{{asset('public/backEnd/')}}/assets/js/switchery.min.js"></script>
<script src="{{asset('public/backEnd/')}}/assets/libs//summernote/summernote-lite.min.js"></script>
<script>
    $(document).ready(function(){
        var elem = document.querySelector('.js-switch');
        var init = new Switchery(elem);
    });
</script>
<script>
    $(".summernote").summernote({
        placeholder: "Enter Your Text Here",    
    });
</script>



@endsection