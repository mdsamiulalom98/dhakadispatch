@extends('backEnd.layouts.master')
@section('title','Rider Edit')
@section('css')
<link href="{{asset('public/backEnd')}}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="{{route('riders.index')}}" class="btn btn-primary rounded-pill">Manage</a>
                </div>
                <h4 class="page-title">Rider Edit</h4>
            </div>
        </div>
    </div>       
    <!-- end page title --> 
   <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('riders.update')}}" method="POST" class=row data-parsley-validate=""  enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$edit_data->id}}" name="hidden_id">
                    <div class="col-sm-6">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Name *</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $edit_data->name}}" id="name" required="">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col-end -->
                    <div class="col-sm-6">
                        <div class="form-group mb-3">
                            <label for="phone" class="form-label">Phone *</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $edit_data->phone}}"  id="phone" required="">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col-end -->
                    <div class="col-sm-6">
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email *</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $edit_data->email}}"  id="email" required="">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col-end -->
                    <div class="col-sm-6">
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password *</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  id="password" >
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col end -->
                    <div class="col-sm-6 mb-3">
                        <div class="form-group">
                            <label class="form-label" for="commission">Commission<span>*</span></label>
                            <input class="form-control commission" name="commission" id="commission" value="{{$edit_data->commission}}">
                        </div>
                        <!-- form group -->
                    </div>
                    <!-- col end -->
                    <div class="col-sm-6 mb-3">
                        <div class="form-group">
                            <label class="form-label" for="commission_type">Commission Type<span>*</span></label>
                            <select class="form-control select2 commission_type" name="commission_type" id="commission_type">
                                <option value="">Select..</option>
                                    <option value="1" @if($edit_data->commission_type == 1 ? 'selected' : '') @endif>Flat Rate</option>
                                    <option value="2" @if($edit_data->commission_type == 2 ? 'selected' : '') @endif>Persentage</option>
                            </select>
                        </div>
                        <!-- form group -->
                    </div>
                    <!-- col end -->
                    <div class="col-sm-6 mb-3">
                        <div class="form-group">
                            <label class="form-label" for="district_id">District<span>*</span></label>
                            <select class="form-control select2 district" name="district_id" id="district_id">
                                <option value="">Select..</option>
                                @foreach ($districts as $key => $value)
                                    <option value="{{ $value->id }}"
                                        @if ($edit_data->district_id == $value->id) selected @endif>
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
                            <label class="form-label" for="area_id">Area<span>*</span></label>
                            <select class="form-control select2 area" name="area_id" id="area_id">
                                <option value="">Select..</option>
                                @foreach ($areas as $key => $area)
                                    <option value="{{ $area->id }}"
                                        @if ($edit_data->area_id == $area->id) selected @endif>
                                        {{ $area->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- form group -->
                    </div>
                    <!-- col end -->
                    <div class="col-sm-6 mb-3">
                        <div class="form-group">
                            <label for="image" class="form-label">Image *</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ $edit_data->image }}"  id="image" >
                            <img src="{{asset($edit_data->image)}}" alt="" class="backend-image">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col end -->
                    <div class="col-sm-6">
                        <div class="form-group mb-3">
                            <label for="address" class="form-label">Address *</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $edit_data->address}}"  id="address" required="">
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col-end -->
                    <div class="col-sm-6 mb-3">
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
@endsection