<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', '') - {{ $generalsetting->name }} </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset($generalsetting->image) }}">
    @stack('seo')
    @stack('css')
    <link rel="stylesheet" href="{{ asset('public/frontEnd/') }}/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('public/frontEnd/') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('public/frontEnd/') }}/css/toastr.min.css">
    <!-- toastr -->
    <link rel="stylesheet" href="{{ asset('public/frontEnd/') }}/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('public/frontEnd/') }}/css/style.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('public/frontEnd/') }}/css/responsive.css">
    <!-- responsive css -->
</head>
<body>
    <div class="user-panel">
        <div class="user-sidebar">
            <div class="website-logo">
                <a href="{{route('rider.dashboard')}}">
                    <img src="{{asset($generalsetting->dark_logo)}}" alt="">
                </a>
            </div>
            <div class="user-info">
                <div class="user-img">
                    <a href="{{route('rider.dashboard')}}">
                        <img src="{{asset(Auth::guard('rider')->user()->image)}}" alt="">
                    </a>
                </div>
                <h5>{{Str::limit(Auth::guard('rider')->user()->name,15)}}</h5>
                <p>ID: {{Auth::guard('rider')->user()->rider_id}}</p>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li><a href="{{ route('rider.dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}"><i
                                class="fa-solid fa-gauge"></i>  Dashboard</a></li>
                     <li><a href="{{ route('rider.parcel.index','all') }}" class="{{ request()->is('parcel/manage') ? 'active' : '' }}">
                        <i class="fa-solid fa-box"></i> Parcel Manage</a>
                    </li>
                    <li><a href="{{ route('rider.parcel.payment') }}" class="{{ request()->is('parcel/payment') ? 'active' : '' }}">
                        <i class="fa-solid fa-sack-dollar"></i> Payment</a>
                    </li>
                    <li><a href="{{ route('rider.parcel.fraud_checker') }}" class="{{ request()->is('parcel/payment') ? 'active' : '' }}">
                        <i class="fa-solid fa-user-check"></i> Fraud Checker</a>
                    </li>
                    <li><a href="{{ route('rider.parcel.pricing') }}" class="{{ request()->is('parcel/pricing') ? 'active' : '' }}">
                        <i class="fa-solid fa-user-check"></i> Pricing</a>
                    </li>
                    <li><a href="{{ route('rider.settings') }}"
                            class="{{ request()->is('settings') ? 'active' : '' }}"><i class="fa-solid fa-cog"></i> Settings</a></li>
                    <li><a href="{{ route('rider.change_pass') }}"
                            class="{{ request()->is('change-password') ? 'active' : '' }}"><i class="fa-solid fa-key"></i> Change
                            Password</a></li>
                    <li><a href="{{ route('rider.logout') }}"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i
                                class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                    <form id="logout-form" action="{{ route('rider.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </div>
        </div>
        <!-- sidebar end -->
        <div class="user-container">
            <div class="user-header">
                <div class="user-toggole">
                    <button><i class="fa-solid fa-bars"></i></button>
                </div>
                <div class="user-search">
                    <form>
                        <input type="text" placeholder="Search Parcel" class="search_click keyword">
                        <button><i class="fa-solid fa-search"></i></button>
                    </form>
                    <div class="search_result"></div>
                </div>
                @php
                     $read_notices = Auth::guard('rider')->user()->read_notices ? json_decode(Auth::guard('rider')->user()->read_notices) : [];
                     $unread_notice = DB::table('notices')->whereNotIn('id', $read_notices)->count();

                      $notifications = DB::table('notifications')->where(['user_id'=>Auth::guard('rider')->user()->id,'user_type'=>'rider'])->get();
                      $unread_notify = $notifications->where('status',0)->count();

                @endphp
                <div class="user-header-right d-flex">
                    <ul class="user-header-menu">
                        <li><a href="{{route('rider.notice')}}" class="notify-icon"><i class="fa-solid fa-file-invoice"></i> <span>{{$unread_notice}}</span></a></li>
                        <li class="dropdown"><a class="notify-icon" role="button" data-bs-toggle="dropdown"><i class="fa-solid fa-bell"></i><span>{{$unread_notify}}</span></a>
                             <ul class="dropdown-menu nofity-dropdown dropdown-menu-end">
                                @foreach($notifications as $key=>$value)
                                <li><a href="{{url($value->link)}}" class="{{$value->status == 0 ? 'fw-bold' : ''}}"><i class="fa-solid fa-bell"></i><p>{{$value->title}} <span>{{\Carbon\Carbon::parse($value->created_at)->diffForHumans()}}</span></p></a></li>
                                @endforeach
                             </ul>
                        </li>
                    </ul>
                    <div class="user-login-info d-flex dropdown">
                        <div class="dropdown">
                          <div class="user-quick d-flex" href="#" role="button" data-bs-toggle="dropdown">
                            <img src="{{asset(Auth::guard('rider')->user()->image)}}" alt="">
                            <p>{{Str::limit(Auth::guard('rider')->user()->shop_name,15)}} <i class="fa-solid fa-caret-down"></i></p>
                          </div>
                          <ul class="dropdown-menu">
                           <li><a href="{{route('rider.profile')}}"><i class="fa-solid fa-home"></i> My Account</a></li>
                            <li><a href="{{route('rider.settings')}}"><i class="fa-solid fa-cog"></i> Setting</a></li>
                            <li><a href="{{route('rider.change_pass')}}"><i class="fa-solid fa-key"></i> Change Password</a></li>
                            <li><a  href="{{ route('rider.logout') }}"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form2').submit();"><i class="fa-solid fa-sign-out"></i> Logout <form id="logout-form2" action="{{ route('rider.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form></a></li>

                    
                          </ul>
                       </div>
                </div>
            </div>
        </div>
         <!-- header end -->
         <div class="user-mheader">
            <div class="user-toggle">
                <button><i class="fa-solid fa-bars"></i></button>
            </div>
            <div class="user-logo">
                 <a href="{{route('rider.dashboard')}}">
                     <img src="{{asset($generalsetting->white_logo)}}" alt="">
                 </a>
            </div>
            <div class="mobile-search">
                <button class="search_toggle"><i class="fa-solid fa-search"></i></button>
            </div>
        </div>
        <div class="consignment_msearch">
            <div class="user-search">
                <i class="fa-solid fa-times"></i>
                <form>

                    <input type="text" placeholder="Search Parcel" class="msearch_click mkeyword">
                    <button><i class="fa-solid fa-search"></i></button>
                </form>
                <div class="search_result"></div>
            </div>
        </div>
        <div class="user-content">
            @yield('content')
        </div>
        </div>
    </div>
    <div class="user-footer">
        <ul>
            <li>
                <a href="" class="{{ request()->is('support') ? 'active' : '' }}">
                    <i class="fa-solid fa-message"></i>
                    <p>Support</p>
                </a>
            </li>
            <li  class="{{ request()->is('notification') ? 'active' : '' }}">
                <a href="{{route('rider.notification')}}">
                    <i class="fa-solid fa-bell"></i>
                    <p>Notification</p>
                </a>
            </li>
            <li  class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="{{route('rider.dashboard')}}">
                    <i class="fa-solid fa-home"></i>
                    <p>Home</p>
                </a>
            </li>
            <li  class="{{ request()->is('notice') ? 'active' : '' }}">
                <a href="{{route('rider.notice')}}">
                    <i class="fa-solid fa-file-invoice"></i>
                    <p>Notice</p>
                </a>
            </li>
            <li  class="{{ request()->is('profile') ? 'active' : '' }}">
                <a href="{{route('rider.profile')}}">
                    <i class="fa-solid fa-user"></i>
                    <p>Profile</p>
                </a>
            </li>
        </ul>
    </div>
    <div id="page-overlay"></div>

    <script src="{{asset('public/frontEnd/')}}/js/jquery-3.7.1.min.js"></script>
    <script src="{{asset('public/frontEnd/')}}/js/popper.min.js"></script>
    <script src="{{asset('public/frontEnd/')}}/js/select2.min.js"></script>
    <script src="{{ asset('public/frontEnd/') }}/js/bootstrap.min.js"></script>
    <!-- custom script -->
    <script src="{{ asset('public/frontEnd/') }}/js/toastr.min.js"></script>
    <!-- Toastr -->
    {!! Toastr::message() !!}
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
        $(document).ready(function() {
            $('.user-toggle').on('click',function(){
                $('.user-sidebar').addClass('active');
                $('#page-overlay').show();
            });
            $('.search_toggle').on('click',function(){
                $('.consignment_msearch').addClass('active');
                $('#page-overlay').show();
            });
            $("#page-overlay,.fa-times").on("click", function() {
                $("#page-overlay").hide();
                $(".user-sidebar").removeClass("active");
                $(".consignment_msearch").removeClass("active");
            });
        });
    </script>
    
   
     <script>
        // district to area
        $('.district').on('change',function(){
            var id = $(this).find('option:selected').val();
            $.ajax({
               type:"GET",
               data:{'id':id},
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
            var area = $('.area').val();
            var cod = $('.cod').val()??0;
            var weight = $('.weight').val()??0;
            $.ajax({
               type:"GET",
               data:{'area':area,'cod':cod,'weight':weight},
               url:"{{route('rider.parcel.cost_calculate')}}",
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
        })
        $(".search_click").on("input", function () {
            var keyword = $(".keyword").val();
            $.ajax({
                type: "GET",
                data: { keyword: keyword },
                url: "{{route('rider.consignment.search')}}",
                success: function (res) {
                    if (res) {
                        $(".search_result").html(res);
                    } else {
                        $(".search_result").empty();
                    }
                },
            });
        });
        $(".msearch_click").on("input", function () {
            var keyword = $(".mkeyword").val();
            $.ajax({
                type: "GET",
                data: { keyword: keyword },
                url: "{{route('rider.consignment.search')}}",
                success: function (res) {
                    if (res) {
                        $(".search_result").html(res);
                    } else {
                        $(".search_result").empty();
                    }
                },
            });
        });
    </script>
    @stack('script')

</body>

</html>
