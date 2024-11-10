<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', '') - {{ $generalsetting->name }} </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset($generalsetting->favicon)}}" />
    @stack('seo')
    @stack('css')
    <link rel="stylesheet" href="{{ asset('public/frontEnd/') }}/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('public/frontEnd/') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('public/frontEnd/') }}/css/toastr.min.css">
    <!-- toastr -->
    <link rel="stylesheet" href="{{ asset('public/frontEnd/') }}/css/style.css?v=1.0.6">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('public/frontEnd/') }}/css/responsive.css?v=1.0.5">
    <!-- responsive css -->
    <script src="{{asset('public/frontEnd/')}}/js/jquery-3.7.1.min.js"></script>
</head>

<body>
    <div class='gotop'></div>
    <header>
        <div class="header-top sm-none">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="header-left">
                            <div class="main-logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset($generalsetting->dark_logo) }}" class="desktop-logo"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->
                    <div class="col-sm-6">
                        <div class="main-menu">
                            <ul>
                                <li><a href="{{ route('pricing') }}" >Pricing</a></li>
                                <li><a href="{{ route('coverage') }}" >Coverage</a></li>
                                <li><a href="{{ route('about_us') }}" >About Us</a></li>
                                <li><a href="{{ route('faq') }}" >FAQ</a></li>
                                <li><a href="{{ route('contact') }}" >Contact</a></li>
                                <li><a href="{{ url('parcel-create') }}" >Create Parcel</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <ul class="header-right">
                             <li class="top_track"><a href="{{ route('parcel.track') }}"><i class="fa-solid fa-truck"></i> Track Parcel</a></li>
                            @if (Auth::guard('merchant')->user())
                                <li><a href="{{ route('merchant.dashboard') }}"><i class="fa fa-user"></i>
                                        {{ Auth::guard('merchant')->user()->name }}</a></li>
                            @else
                               
                                <li><a href="{{ route('merchant.login') }}"><i class="fa fa-user"></i> Login</a></li>
                                <li>
                                    <a href="{{ route('merchant.register') }}" class="active"><i
                                            class="fa fa-plus"></i> Sign Up</a>
                                </li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--header top end-->
        <div class="mobile-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mheader-inner">
                            <div class="nav-icon">
                                <a class="toggle">
                                    <i class="fa-solid fa-bars"></i>
                                </a>
                            </div>
                            <div class="mobile-logo">
                                <a href="{{ route('home') }}"><img src="{{ asset($generalsetting->dark_logo) }}"
                                        alt=""></a>
                            </div>
                            <div class="mobile-user">
                                @if (Auth::guard('merchant')->user())
                                    <a href="{{ route('merchant.dashboard') }}"><i class="fa fa-user"></i>
                                        {{ Str::limit(Auth::guard('merchant')->user()->name, 4) }}</a>
                                @else
                                    <a href="{{ route('merchant.login') }}"><i class="fa fa-user"></i> Login</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-nav">
                <div class="nav-logo-icon">
                    <div class="mobile-logo">
                        <img src="{{asset($generalsetting->white_logo)}}" alt="">
                    </div>
                    <div class="close-icon">
                        <i class="fa-solid fa-times nav-close"></i>
                    </div>
                </div>
                <ul>
                    <li><a href="{{ route('home') }}" >Home</a></li>
                    <li><a href="{{ route('pricing') }}">Our Pricing</a></li>
                    <li><a href="{{ route('about_us') }}" >About Us</a></li>
                    <li><a href="{{ route('faq') }}" >FAQ</a></li>
                    <li><a href="{{ route('contact') }}" >Contact</a></li>
                    <li><a href="{{ route('rider.login') }}" class="active">Rider Login</a></li>
                </ul>
            </div>
        </div>
    </header>
    <!--header end-->
    <div class="content-gap"></div>
    @yield('content')
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="footer-item">
                            <h5>About Us</h5>
                            <p>{{$generalsetting->about}}</p>
                            <ul class="social-icon">
                                @foreach ($socialicons as $key => $value)
                                    <li><a href="{{ $value->link }}" target="_blank"
                                            style="background: {{ $value->color }};"><i class="{{$value->icon}}"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer-item">
                            <h5>Important Link</h5>
                            <ul>
                               @foreach ($pages as $key => $value)
                                <li>
                                    <a href="{{ route('page', $value->slug) }}">
                                    <i class="fa-solid fa-angle-right"></i> {{ $value->title }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer-item">
                            <h5>Contact Information</h5>
                            <ul class="contact-info">
                                <li>
                                    <a href="tel:{{ $contact->hotline }}">
                                    <i class="fa-solid fa-map-marker"></i> {{ $contact->address }}</a>
                                </li>
                                <li>
                                    <a href="tel:{{ $contact->hotline }}">
                                    <i class="fa-solid fa-phone"></i> {{ $contact->hotline }}</a>
                                </li>
                                <li>
                                    <a href="mailto:{{ $contact->email }}">
                                    <i class="fa-solid fa-envelope"></i> {{ $contact->email }}</a>
                                </li>
                            </ul>
                            <a href="{{route('rider.login')}}" class="rider_login">Rider Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-top end -->
        <div class="footer-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="copyright">
                            <p>@php date('Y') @endphp &copy copyright all right reserved {{$generalsetting->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom end -->
    </footer>
    <div class="footer-nav">
        <ul>
            <li>
                <a href="">
                    <i class="fa-solid fa-motorcycle"></i>
                    <span>Rider</span>
                </a>
            </li>
            <li>
                <a href="{{route('parcel.track')}}">
                    <i class="fa-solid fa-truck"></i>
                    <span>Track</span>
                </a>
            </li>
            <li>
                <a href="{{route('merchant.login')}}">
                    <i class="fa-solid fa-user"></i>
                    <span>Merchant</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- all jquery script -->
    <div id="page-overlay"></div>
    <script src="{{ asset('public/frontEnd/') }}/js/bootstrap.min.js"></script>
    <!-- custom script -->
    <script src="{{ asset('public/frontEnd/') }}/js/toastr.min.js"></script>
    <!-- Toastr -->
    {!! Toastr::message() !!}
    <script>
        $(".toggle").on("click", function() {
            $(".mobile-nav").addClass("active");
        });
        $(".nav-close").on("click", function() {
            $(".mobile-nav").removeClass("active");
        });
    </script>
    <script>
        $('.service_id').on('change',function(){
            var id = $(this).find('option:selected').val();
            $.ajax({
               type:"GET",
               data:{'id':id},
               url:"{{route('ajax.zones')}}",
               success:function(res){               
                if(res){
                    $(".zone").empty();
                    $(".zone").append('<option value="">Select..</option>');
                    $.each(res,function(key,value){
                        $(".zone").append('<option value="'+value.id+'" >'+value.name+'</option>');
                    });
               
                }else{
                   $(".zone").empty();
                }
               }
            });  
       });
        $('#zone_id').on('change',function(){
            var id = $(this).find('option:selected').val();
            $.ajax({
               type:"GET",
               data:{'id':id},
               url:"{{route('ajax.districts')}}",
               success:function(res){               
                if(res){
                    $(".district").empty();
                     $(".area").empty();
                    $(".district").append('<option value="">Select..</option>');
                    $.each(res,function(key,value){
                        $(".district").append('<option value="'+key+'" >'+value+'</option>');
                    });
               
                }else{
                   $(".district").empty();
                    $(".area").empty();
                }
               }
            });  
       });
        $('.district').on('change',function(){
            var id = $(this).find('option:selected').val();
            var zone_id = $('#zone_id').find('option:selected').val();
            console.log('zone',zone_id);
            $.ajax({
               type:"GET",
               data:{id,zone_id},
               url:"{{route('ajax.areas')}}",
               success:function(res){               
                if(res){
                    $(".area").empty();
                    $(".area").append('<option value="">Select..</option>');
                    $.each(res,function(key,value){
                        $(".area").append('<option value="'+key+'" >'+value+'</option>');
                    });
               
                }else{
                   $(".area").empty();
                }
               }
            });  
       });
        // cost calculate
        $('.cost_calculate').on('change', function(){
            var service_id = $('#service_id').val();
            var zone_id    = $('#zone_id').val();
            var cod        = $('.cod').val()??0;
            var weight     = $('.weight').val()??0;
            if(service_id,zone_id,cod,weight){
            $.ajax({
               type:"GET",
               data:{service_id,zone_id,cod,weight},
               url:"{{route('cost_calculate')}}",
               success:function(res){               
                if (res.status === 'success') {
                    $('td.cash_collection').text(res.cod_amount + ' Tk');
                    $('td.delivery_charge').text(res.delivery_charge + ' Tk');
                    $('td.cod_charge').text(res.cod_charge + ' Tk');
                    var totalPayable = res.cod_amount - (res.delivery_charge + res.cod_charge);
                    $('td.total_payable').text(totalPayable + ' Tk');
                }
               }
            }); 
         }
        })
    </script>
    @stack('script')

</body>

</html>
