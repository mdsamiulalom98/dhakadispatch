<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title>@yield('title') - {{$generalsetting->name}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset($generalsetting->favicon)}}" />
    <!-- Bootstrap css -->
    <link href="{{asset('public/backEnd/')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{asset('public/backEnd/')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link rel="stylesheet" href="{{ asset('public/frontEnd/') }}/css/all.min.css">
    <link href="{{asset('public/backEnd/')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- toastr css -->
    <link rel="stylesheet" href="{{asset('public/backEnd/')}}/assets/css/toastr.min.css" />
    <!-- custom css -->
    <link href="{{asset('public/backEnd/')}}/assets/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- Head js -->
    @yield('css')
    <link href="{{ asset('public/backEnd') }}/assets/libs/summernote/summernote-lite.min.css" rel="stylesheet"/>
    <script src="{{asset('public/backEnd/')}}/assets/js/head.js"></script>
  </head>

  <!-- body start -->
  <body data-layout-mode="default" data-theme="light" data-layout-width="fluid" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size="default" data-sidebar-user="false">
    <!-- Begin page -->
    <div id="wrapper">
      <!-- Topbar Start -->
      <div class="navbar-custom">
        <div class="container-fluid">
          <ul class="list-unstyled topnav-menu float-end mb-0">
            <li class="dropdown d-inline-block d-lg-none">
              <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="fe-search noti-icon"></i>
              </a>
              <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                <form class="p-3">
                  <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username" />
                </form>
              </div>
            </li>

            <li class="dropdown d-none d-lg-inline-block">
              <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                <i class="fe-maximize noti-icon"></i>
              </a>
            </li>
            <li class="dropdown notification-list topbar-dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="fe-bell noti-icon"></i>
                <span class="badge bg-danger rounded-circle noti-icon-badge">{{$payments->count()}}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-lg">
                <!-- item-->
                <div class="dropdown-item noti-title">
                  <h5 class="m-0">
                    <span class="float-end">
                      <a href="{{route('merchants.payment','process')}}" class="text-dark">
                        <small>View All</small>
                      </a>
                    </span>
                    Orders
                  </h5>
                </div>
                <div class="noti-scroll" data-simplebar>
                  @foreach($payments as $value)
                  <a href="{{route('merchants.payment','process')}}" class="dropdown-item notify-item active">
                    <p class="notify-details">{{$value->invoice_id}}</p>
                    <p class="text-muted mb-0 user-msg">
                      <small>Amount : {{$value->payable_amount}}</small>
                    </p>
                  </a>
                  @endforeach
                </div>

                <!-- All-->
                <a href="https://ecom.websolutionit.com/admin/order/pending" class="dropdown-item text-center text-primary notify-item notify-all">
                  View all
                  <i class="fe-arrow-right"></i>
                </a>
              </div>
            </li>

            <li class="dropdown notification-list topbar-dropdown">
              <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{asset(Auth::user()->image)}}" alt="user-image" class="rounded-circle" />
                <span class="pro-user-name ms-1"> {{Auth::user()->name}} <i class="mdi mdi-chevron-down"></i> </span>
              </a>
              <div class="dropdown-menu dropdown-menu-end profile-dropdown">
                <!-- item-->
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome !</h6>
                </div>

                <!-- item-->
                <a href="{{route('dashboard')}}" class="dropdown-item notify-item">
                  <i class="fe-user"></i>
                  <span>Dashboard</span>
                </a>

                <!-- item-->
                <a href="{{route('change_password')}}" class="dropdown-item notify-item">
                  <i class="fe-settings"></i>
                  <span>Change Password</span>
                </a>

                <!-- item-->
                <a href="{{route('locked')}}" class="dropdown-item notify-item">
                  <i class="fe-lock"></i>
                  <span>Lock Screen</span>
                </a>

                <div class="dropdown-divider"></div>

                <!-- item-->
                <a
                  href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"
                  class="dropdown-item notify-item"
                >
                  <i class="fe-log-out me-1"></i>
                  <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
          </ul>

          <!-- LOGO -->
          <div class="logo-box">
            <a href="{{url('admin/dashboard')}}" class="logo logo-dark text-center">
              <span class="logo-sm">
                <img src="{{asset($generalsetting->white_logo)}}" alt="" height="50" />
                <!-- <span class="logo-lg-text-light">UBold</span> -->
              </span>
              <span class="logo-lg">
                <img src="{{asset($generalsetting->dark_logo)}}" alt="" height="50" />
                <!-- <span class="logo-lg-text-light">U</span> -->
              </span>
            </a>

            <a href="{{url('admin/dashboard')}}" class="logo logo-light text-center">
              <span class="logo-sm">
                <img src="{{asset($generalsetting->white_logo)}}" alt="" height="50" />
              </span>
              <span class="logo-lg">
                <img src="{{asset($generalsetting->white_logo)}}" alt="" height="50" />
              </span>
            </a>
          </div>

          <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
              <button class="button-menu-mobile waves-effect waves-light">
                <i class="fe-menu"></i>
              </button>
            </li>

            <li>
              <!-- Mobile menu toggle (Horizontal Layout)-->
              <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <div class="lines">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </a>
              <!-- End mobile menu toggle-->
            </li>

            <li class="dropdown d-none d-xl-block">
              <a class="nav-link dropdown-toggle waves-effect waves-light" href="{{route('home')}}" target="_blank"> <i data-feather="globe"></i> Visit Site </a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
      </div>
      <!-- end Topbar -->

      <!-- ========== Left Sidebar Start ========== -->
      <div class="left-side-menu">
        <div class="h-100" data-simplebar>
          <!-- User box -->
          <div class="user-box text-center">
            <img src="{{asset('public/backEnd/')}}/assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md" />
            <div class="dropdown">
              <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown">{{Auth::user()->name}}</a>
              <div class="dropdown-menu user-pro-dropdown">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                  <i class="fe-user me-1"></i>
                  <span>My Account</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                  <i class="fe-settings me-1"></i>
                  <span>Settings</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                  <i class="fe-lock me-1"></i>
                  <span>Lock Screen</span>
                </a>

                <!-- item-->
                <a
                  href="{{ route('logout') }}"
                  onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                  class="dropdown-item notify-item"
                >
                  <i class="fe-log-out me-1"></i>
                  <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </div>
            <p class="text-muted">Admin Head</p>
          </div>

          <!--- Sidemenu -->
          <div id="sidebar-menu">
            <ul id="side-menu">
              <li>
                <a href="{{url('admin/dashboard')}}" >
                  <i data-feather="airplay"></i>
                  <span> Dashboard </span>
                </a>
              </li>
              <li class="menu-title">Parcel & Admin</li>
              <li>
                <a href="#sidebar-parcel" data-bs-toggle="collapse">
                  <i data-feather="folder-plus"></i>
                  <span> Parcel Manage </span>
                  <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebar-parcel">
                  <ul class="nav-second-level">
                      @php
                        $total_parcels = DB::table('parcels')->count();
                      @endphp
                    <li>
                      <a href="{{route('admin.parcel.index','all')}}"><i data-feather="file-plus"></i> All Parcel <span>{{$total_parcels}}</span></a>
                    </li>
                    @foreach($parcelstatus as $pstatus)
                    <li>
                      <a href="{{route('admin.parcel.index',$pstatus->slug)}}"><i data-feather="file-plus"></i> {{$pstatus->name}} <span>{{$pstatus->parcels_count}}</span></a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </li>
              <li>
                <a href="#sidebar-pickup" data-bs-toggle="collapse">
                  <i data-feather="truck"></i>
                  <span> Pickup Manage </span>
                  <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebar-pickup">
                  <ul class="nav-second-level">
                    <li>
                      <a href="{{route('admin.pickup.index','pending')}}"><i data-feather="file-plus"></i> Pending</a>
                    </li>
                    <li>
                      <a href="{{route('admin.pickup.index','approved')}}"><i data-feather="file-plus"></i> Approved</a>
                    </li>
                    <li>
                      <a href="{{route('admin.pickup.index','assigned')}}"><i data-feather="file-plus"></i> Assigned</a>
                    </li>
                    <li>
                      <a href="{{route('admin.pickup.index','completed')}}"><i data-feather="file-plus"></i> Completed</a>
                    </li>
                    <li>
                      <a href="{{route('admin.parcel.index','cancelled')}}"><i data-feather="file-plus"></i> Cancelled</a>
                    </li>
                    
                  </ul>
                </div>
              </li>
              <!-- nav items -->
              <li>
                <a href="#sidebar-payment" data-bs-toggle="collapse">
                  <i data-feather="dollar-sign"></i>
                  <span> Merchant Payment </span>
                  <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebar-payment">
                  <ul class="nav-second-level">
                    <li>
                      <a href="{{route('merchants.payment','process')}}"><i data-feather="file-plus"></i> Process </a>
                    </li>
                    <li>
                      <a href="{{route('merchants.payment','paid')}}"><i data-feather="file-plus"></i> Paid </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- nav items -->
              <li>
                <a href="#sidebar-riderpay" data-bs-toggle="collapse">
                  <i data-feather="credit-card"></i>
                  <span> Rider Payment </span>
                  <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebar-riderpay">
                  <ul class="nav-second-level">
                    <li>
                      <a href="{{route('riders.payment','process')}}"><i data-feather="file-plus"></i> Process </a>
                    </li>
                    <li>
                      <a href="{{route('riders.payment','paid')}}"><i data-feather="file-plus"></i> Paid </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- nav items -->
              <li>
                <a href="#sidebar-users" data-bs-toggle="collapse">
                  <i data-feather="user"></i>
                  <span> Admin </span>
                  <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebar-users">
                  <ul class="nav-second-level">
                    <li>
                      <a href="{{route('users.index')}}"><i data-feather="file-plus"></i> User</a>
                    </li>
                    <li>
                      <a href="{{route('roles.index')}}"><i data-feather="file-plus"></i> Roles</a>
                    </li>
                    <li>
                      <a href="{{route('permissions.index')}}"><i data-feather="file-plus"></i> Permissions</a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- nav items -->
              <li>
                <a href="#sidebar-customer" data-bs-toggle="collapse">
                    <i data-feather="user-plus"></i>
                    <span> Merchants </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebar-customer">
                    <ul class="nav-second-level">
                        <li>
                            <a href="{{route('merchants.create')}}">Add Merchants</a>
                        </li>
                        <li>
                            <a href="{{route('merchants.index',['status'=>'pending'])}}">Pending Merchants</a>
                        </li>
                        <li>
                            <a href="{{route('merchants.index',['status'=>'active'])}}">All Merchants</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- nav items -->
              <li>
                <a href="#sidebar-rider" data-bs-toggle="collapse">
                    <i data-feather="user-plus"></i>
                    <span> Riders </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebar-rider">
                    <ul class="nav-second-level">
                        <li>
                            <a href="{{route('riders.create')}}">Add Riders</a>
                        </li>
                        <li>
                            <a href="{{route('riders.index',['status'=>'pending'])}}">Pending Riders</a>
                        </li>
                        <li>
                            <a href="{{route('riders.index',['status'=>'active'])}}">All Riders</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- nav items -->
            <li>
                <a href="#siebar-expense" data-bs-toggle="collapse">
                    <i data-feather="database"></i>
                    <span> Expense </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="siebar-expense">
                    <ul class="nav-second-level">
                        <li>
                            <a href="{{ route('expensecategories.index') }}"><i
                                    data-feather="file-plus"></i> Expense Categories</a>
                        </li>
                        <li>
                            <a href="{{ route('expense.index') }}"><i data-feather="file-plus"></i>
                                Expense</a>
                        </li>

                    </ul>
                </div>
            </li>
            <!-- expense-end -->
            <li>
                <a href="#siebar-report" data-bs-toggle="collapse">
                    <i data-feather="pie-chart"></i>
                    <span> Reports </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="siebar-report">
                    <ul class="nav-second-level">
                        <li>
                            <a href="{{ route('admin.reports.parcel') }}"><i
                                    data-feather="file-plus"></i> Parcel</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.reports.payment') }}"><i
                                    data-feather="file-plus"></i> Payment</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.reports.expense') }}"><i
                                    data-feather="file-plus"></i> Expense</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.reports.lossprofit') }}"><i
                                    data-feather="file-plus"></i> Loss or Profit</a>
                        </li>

                    </ul>
                </div>
            </li>
            <!-- expense-end -->
              <li class="menu-title">Website Manage</li>
              <li>
              <a href="#sidebar-notice" data-bs-toggle="collapse">
                  <i data-feather="bell"></i>
                  <span> Notice </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebar-notice">
                  <ul class="nav-second-level">
                      <li><a href="{{route('notice.index')}}">Create</a></li>
                      <li><a href="{{route('notice.index')}}">Manage</a></li>
                  </ul>
              </div>
          </li>
              <li>
              <a href="#sidebar-service" data-bs-toggle="collapse">
                  <i data-feather="edit"></i>
                  <span> Services </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebar-service">
                  <ul class="nav-second-level">
                      <li><a href="{{route('services.index')}}">Create</a></li>
                      <li><a href="{{route('services.index')}}">Manage</a></li>
                  </ul>
              </div>
          </li>
          <!-- nav items -->
              <li>
              <a href="#sidebar-pricing" data-bs-toggle="collapse">
                  <i data-feather="dollar-sign"></i>
                  <span> Pricing </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebar-pricing">
                  <ul class="nav-second-level">
                      <li><a href="{{route('pricing.index')}}">Create</a></li>
                      <li><a href="{{route('pricing.index')}}">Manage</a></li>
                  </ul>
              </div>
          </li>
          <!-- nav items -->
              <li>
              <a href="#sidebar-client" data-bs-toggle="collapse">
                  <i data-feather="users"></i>
                  <span> Clients </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebar-client">
                  <ul class="nav-second-level">
                      <li><a href="{{route('clients.index')}}">Create</a></li>
                      <li><a href="{{route('clients.index')}}">Manage</a></li>
                  </ul>
              </div>
          </li>
          <!-- nav items -->
              <li>
              <a href="#sidebar-faq" data-bs-toggle="collapse">
                  <i data-feather="help-circle"></i>
                  <span> Faq </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebar-faq">
                  <ul class="nav-second-level">
                      <li><a href="{{route('faq.index')}}">Create</a></li>
                      <li><a href="{{route('faq.index')}}">Manage</a></li>
                  </ul>
              </div>
          </li>
          <!-- nav items -->
            <li>
              <a href="#sidebar-about" data-bs-toggle="collapse">
                  <i data-feather="gitlab"></i>
                  <span> About Us </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebar-about">
                  <ul class="nav-second-level">
                      <li><a href="{{route('abouts.index')}}">About</a></li>
                      <li><a href="{{route('missionvission.index')}}">Mission & Vision</a></li>
                      <li><a href="{{route('counters.index')}}">Counter</a></li>
                      <li><a href="{{route('clientfeedback.index')}}">Client Feedback</a></li>
                  </ul>
              </div>
          </li>
          <!-- nav items -->
            <li>
              <a href="#sidebar-chooseus" data-bs-toggle="collapse">
                  <i data-feather="heart"></i>
                  <span>Why choose Us </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebar-chooseus">
                  <ul class="nav-second-level">
                      <li><a href="{{route('whychooseus.create')}}">Create</a></li>
                      <li><a href="{{route('whychooseus.index')}}">Manage</a></li>
                  </ul>
              </div>
          </li>
          <!-- nav items -->
              <li>
                <a href="#siebar-bank" data-bs-toggle="collapse">
                  <i data-feather="dollar-sign"></i>
                  <span> Banks </span>
                  <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="siebar-bank">
                  <ul class="nav-second-level">
                    <li>
                      <a href="{{route('banks.create')}}"><i data-feather="file-plus"></i> Create</a>
                    </li>
                    <li>
                      <a href="{{route('banks.index')}}"><i data-feather="file-plus"></i> Manage</a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- nav items end -->
              <li>
                <a href="#siebar-banner" data-bs-toggle="collapse">
                  <i data-feather="image"></i>
                  <span> Banner & Ads </span>
                  <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="siebar-banner">
                  <ul class="nav-second-level">
                    <li>
                      <a href="{{route('banner_category.index')}}"><i data-feather="file-plus"></i> Banner Category</a>
                    </li>
                    <li>
                      <a href="{{route('banners.index')}}"><i data-feather="file-plus"></i> Banner & Ads</a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- nav items end -->
              
              <li>
                <a href="#siebar-couriersetting" data-bs-toggle="collapse">
                  <i data-feather="settings"></i>
                  <span> Courier Setting </span>
                  <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="siebar-couriersetting">
                  <ul class="nav-second-level">
                    <li>
                      <a href="{{route('servicetype.index')}}"><i data-feather="file-plus"></i> Service Type</a>
                    </li>
                     <li>
                      <a href="{{route('deliveryzone.index')}}"><i data-feather="file-plus"></i> Delivery Zone</a>
                     </li>
                     <li>
                      <a href="{{route('deliverycharge.index')}}"><i data-feather="file-plus"></i> Delivery Charge</a>
                     </li>
                     <li>
                      <a href="{{route('districts.index')}}"><i data-feather="file-plus"></i> District</a>
                    </li>
                    <li>
                      <a href="{{route('cities.index')}}"><i data-feather="file-plus"></i> City</a>
                    </li>
                    <li>
                      <a href="{{route('parcelstatus.index')}}"><i data-feather="file-plus"></i> Parcel Status</a>
                    </li>
                    <li>
                      <a href="{{route('pickup_types.index')}}"><i data-feather="file-plus"></i> Pickup Type</a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- nav items end -->
              <li>
                <a href="#siebar-sitesetting" data-bs-toggle="collapse">
                  <i data-feather="settings"></i>
                  <span> Site Setting </span>
                  <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="siebar-sitesetting">
                  <ul class="nav-second-level">
                    <li>
                      <a href="{{route('settings.index')}}"><i data-feather="file-plus"></i> General Setting</a>
                    </li>
                    <li>
                      <a href="{{route('socialmedias.index')}}"><i data-feather="file-plus"></i> Social Media</a>
                    </li>
                    <li>
                      <a href="{{route('contact.index')}}"><i data-feather="file-plus"></i> Contact</a>
                    </li>
                    <li>
                      <a href="{{route('pages.index')}}"><i data-feather="file-plus"></i> Create Page</a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- nav items end -->

              <!-- nav items end -->
            </ul>
          </div>
          <!-- End Sidebar -->

          <div class="clearfix"></div>
        </div>
        <!-- Sidebar -left -->
      </div>
      <!-- Left Sidebar End -->

      <div class="content-page">
        <div class="content">
          @yield('content')
        </div>
        <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 text-end">&copy; Copyright © {{ date('Y') }} {{$generalsetting->name}}. Developed By<a href="https://websolutionit.com"> Websolution IT</a></div>
            </div>
          </div>
        </footer>
        <!-- end Footer -->
      </div>
    </div>
    <!-- END wrapper -->
  
    <!-- Right bar overlay-->
    <div id="page-overlay"></div>
    <!-- Vendor js -->
    <script src="{{asset('public/backEnd/')}}/assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="{{asset('public/backEnd/')}}/assets/js/app.min.js"></script>
    <script src="{{asset('public/backEnd/')}}/assets/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <script src="{{asset('public/backEnd/')}}/assets/js/sweetalert.min.js"></script>
    <script type="text/javascript">
      $(".delete-confirm").click(function (event) {
        var form = $(this).closest("form");
        event.preventDefault();
        swal({
          title: `Are you sure you want to delete this record?`,
          text: "If you delete this, it will be gone forever.",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        }).then((willDelete) => {
          if (willDelete) {
            form.submit();
          }
        });
      });
      $(".change-confirm").click(function (event) {
        var form = $(this).closest("form");
        event.preventDefault();
        swal({
          title: `Are you sure you want to change this record?`,
          icon: "warning",
          buttons: true,
          dangerMode: true,
        }).then((willDelete) => {
          if (willDelete) {
            form.submit();
          }
        });
      });
    </script>
    <script>
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
  </script>
    @yield('script')
    <!-- Plugins js -->
    <script src="{{ asset('public/backEnd/') }}/assets/libs//summernote/summernote-lite.min.js"></script>
    <script>
        $(".summernote").summernote({
            placeholder: "Enter Your Text Here",
        });
    </script>
  </body>
</html>
