@extends('backEnd.layouts.master')
@section('title', 'Clent Feedback Create')
@section('css')
    <link href="{{ asset('public/backEnd') }}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/backEnd') }}/assets/summernote-lite/summernote-lite.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <a href="{{ route('clientfeedback.index') }}"
                            class="btn btn-primary waves-effect waves-light btn-sm rounded-pill">Manage</a>

                    </div>
                    <h4 class="page-title">Clent Feedback Create</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('clientfeedback.store') }}" method="POST" class=row data-parsley-validate=""
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12 mb-3">
                                <div class="form-group">
                                    <label for="name" class="form-label">Name *</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" id="name" required="">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- col-end -->
                            <div class="col-sm-12 mb-3">
                                <div class="form-group">
                                    <label for="designation" class="form-label">designation *</label>
                                    <input type="text" class="form-control @error('designation') is-invalid @enderror"
                                        name="designation" value="{{ old('designation') }}" id="designation" required="">
                                    @error('designation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- col-end -->
                            <div class="col-sm-12 mb-3">
                                <div class="form-group">
                                    <label for="image" class="form-label">Client Image *</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        name="image" value="{{ old('image') }}" id="image" required="">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <div class="form-group">
                                    <label for="company" class="form-label">Company  Image *</label>
                                    <input type="file" class="form-control @error('company') is-invalid @enderror"
                                        name="company" value="{{ old('company') }}" id="company" required="">
                                    @error('company')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <div class="form-group">
                                    <label for="ratting" class="form-label">Ratting *</label>
                                    <select class="form-control @error('ratting') is-invalid @enderror"
                                        name="ratting" value="{{ old('ratting') }}" id="ratting" required="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    @error('ratting')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- col-end -->

                            <div class="col-sm-12 mb-3">
                                <div class="form-group">
                                    <label for="message" class="form-label">Message *</label>
                                    <textarea name="message" class="summernote form-control @error('message') is-invalid @enderror" id="message"
                                        rows="5"></textarea>
                                    @error('message')
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
    <script src="{{ asset('public/backEnd') }}/assets/libs/parsleyjs/parsley.min.js"></script>
    <script src="{{ asset('public/backEnd') }}/assets/js/pages/form-validation.init.js"></script>
    <script src="{{ asset('public/backEnd') }}/assets/libs/select2/js/select2.min.js"></script>
    <script src="{{ asset('public/backEnd') }}/assets/summernote-lite/summernote-lite.js"></script>
    <script src="{{ asset('public/backEnd') }}/assets/js/pages/form-advanced.init.js"></script>
    <script>
        $('.summernote').summernote({
            height: 250,
            callbacks: {
                // Clear all formatting of the pasted text
                onPaste: function(e) {
                    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData(
                        'Text');
                    e.preventDefault();
                    setTimeout(function() {
                        document.execCommand('insertText', false, bufferText);
                    }, 300);

                }
            }
        });
    </script>
@endsection
