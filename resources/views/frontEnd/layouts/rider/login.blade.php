@extends('frontEnd.layouts.master')
@section('title', 'Rider Login')
@section('content')
    <section class="section-padding page-margin">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-12">
                    <div class="auth-inner">
                        <h5 class="title">Rider Login</h5>
                        <form action="{{ route('rider.signin') }}" method="POST" data-parsley-validate="">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email_phone" class="form-label">Email or Phone Number <span>*</span></label>
                                <input type="text" class="form-control  {{ $errors->has('email_phone') ? 'is-invalid' : '' }}"
                                    placeholder="Enter email or phone number *" name="email_phone" value="{{ old('email_phone') }}" required>
                                @if ($errors->has('email_phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email_phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password <span>*</span></label>
                                <div class="input-group">
                                    <input type="password"
                                        class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }} password"
                                        placeholder="Enter Password" name="password" value="{{ old('password') }}" required>
                                    <span class="px-3 input-group-text toggle_password">
                                        <i class="fas fa-eye eye_icon"></i>
                                    </span>
                                </div>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <!-- form group -->
                            <div class="form-group mb-3 text-end">
                                <a href="{{ route('rider.forgot.password') }}">Forgot Password?</a>
                            </div>
                            <div class="form-group">
                                <button class="btn-submit d-block">Login</button>
                            </div>
                            <!-- form group -->
                            <p class="quick_link">
                                <strong>If you have no account?</strong>
                                <a href="{{ route('rider.register') }}"> Create Account</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script src="{{ asset('public/frontEnd/') }}/js/parsley.min.js"></script>
    <script>
        $(".toggle_password").on("click", function() {
            var password_field = $('.password');
            var icon = $('.eye_icon');
            if (password_field.attr('type') === 'password') {
                password_field.attr('type', 'text');
                icon.removeClass('fa-eye');
                icon.addClass('fa-eye-slash');
            } else {
                password_field.attr('type', 'password');
                icon.removeClass('fa-eye-slash');
                icon.addClass('fa-eye');
            }
        });
    </script>
@endpush
