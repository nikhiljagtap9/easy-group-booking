<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-semi-dark" data-assets-path="assets/" data-template="vertical-menu-template-semi-dark" data-style="light">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
      <title>@yield('title', 'EasyGroup')</title>
      <meta name="description" content="" />
      <meta name="keywords" content="">
      <!-- Canonical SEO -->
      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/fev.png')}}" />
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet">
      <!-- Icons -->
      <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}">
      <!-- Core CSS -->
      <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css">
      <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-semi-dark.css') }}" class="template-customizer-theme-css">
      <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
      <!-- Vendors CSS -->
      <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
      <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
      <!-- Page CSS -->
   

      <!-- Helpers -->
      <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
      <script src="{{ asset('assets/vendor/js/helpers.js')}}"></script>
      <script src="{{ asset('assets/js/config.js')}}"></script>
   
   </head>
   <body>
      <!-- Layout wrapper -->
      <div class="layout-wrapper layout-content-navbar  ">
      <div class="layout-container">
      <!-- Menu -->
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
         <div class="app-brand demo ">
            <a href="index.php" class="app-brand-link">
            
            <img src="{{ asset('assets/img/logo.png')}}" class="logo_main_img" >
            </a>
            <a href="'javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
            </a>
         </div>
         <div class="menu-inner-shadow"></div>
         <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item active_home">
               <a href="{{ url('/') }}" class="menu-link">
                  <i class="menu-icon tf-icons ti ti-smart-home"></i>
                  <div data-i18n="Dashboards">Dashboards</div>
               </a>
            </li>
            @hasrole('Admin')
            <li class="menu-item {{ request()->routeIs('client.*') ? 'open' : '' }}" >
               <a href="javascript:void(0);" class="menu-link menu-toggle {{ request()->routeIs('client.*') ? 'active_land' : '' }} ">
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-hexagon">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                     <path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6z" />
                     <path d="M6.201 18.744a4 4 0 0 1 3.799 -2.744h4a4 4 0 0 1 3.798 2.741" />
                     <path d="M19.875 6.27c.7 .398 1.13 1.143 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z" />
                  </svg>
                  <div >Client</div>
               </a>
               <ul class="menu-sub">
                  <li class="menu-item">
                     <a href="{{ route('client.add') }}" class="menu-link" >
                        <div >Add Client</div>
                     </a>
                  </li>
                  <li class="menu-item">
                     <a href="{{ route('client.list') }}" class="menu-link" >
                        <div >View Client</div>
                     </a>
                  </li>
               </ul>
            </li>
            @endhasrole
            @hasanyrole('Admin|Client')
            <li class="menu-item {{ request()->routeIs('event.*') ? 'open' : '' }}">
               <a href="javascript:void(0);" class="menu-link menu-toggle {{ request()->routeIs('event.*') ? 'active_land' : '' }} ">
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-ticket"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 5l0 2" /><path d="M15 11l0 2" /><path d="M15 17l0 2" /><path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" /></svg>
                  <div >Event</div>
               </a>
               <ul class="menu-sub">
                  <li class="menu-item">
                     <a href="{{ route('event.add') }}" class="menu-link" >
                        <div >Add Event</div>
                     </a>
                  </li>
                  <li class="menu-item">
                     <a href="{{ route('event.list') }}" class="menu-link" >
                        <div >View Event</div>
                     </a>
                  </li>
               </ul>
            </li>


            <li class="menu-item {{ request()->routeIs('group.*') ? 'open' : '' }}">
               <a href="javascript:void(0);" class="menu-link menu-toggle {{ request()->routeIs('group.*') ? 'active_land' : '' }}">
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users-group"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" /><path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M17 10h2a2 2 0 0 1 2 2v1" /><path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M3 13v-1a2 2 0 0 1 2 -2h2" /></svg>
                  <div >Groups </div>
               </a>
               <ul class="menu-sub">
                  <li class="menu-item">
                     <a href="{{ route('group.add') }}" class="menu-link" >
                        <div >Add Groups</div>
                     </a>
                  </li>
                  <li class="menu-item">
                     <a href="{{ route('group.list') }}" class="menu-link" >
                        <div >View Groups</div>
                     </a>
                  </li>
               </ul>
            </li>

             <li class="menu-item {{ request()->routeIs('hotel.*') ? 'open' : '' }}">
               <a href="javascript:void(0);" class="menu-link menu-toggle {{ request()->routeIs('hotel.*') ? 'active_land' : '' }}">
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-building-skyscraper"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l18 0" /><path d="M5 21v-14l8 -4v18" /><path d="M19 21v-10l-6 -4" /><path d="M9 9l0 .01" /><path d="M9 12l0 .01" /><path d="M9 15l0 .01" /><path d="M9 18l0 .01" /></svg>
                  <div >Hotel  </div>
               </a>
               <ul class="menu-sub">
                  <li class="menu-item">
                     <a href="{{ route('hotel.add') }}" class="menu-link" >
                        <div >Add Hotel </div>
                     </a>
                  </li>
                  <li class="menu-item">
                     <a href="{{ route('hotel.list') }}" class="menu-link" >
                        <div >View Hotel </div>
                     </a>
                  </li>
               </ul>
            </li>


            <li class="menu-item" style="display:none;" >
               <a href="view_user.php" class="menu-link active_user">
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                     <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                     <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                     <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                     <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                  </svg>
                  <div>Tenant Managment</div>
               </a>
            </li>
            <li class="menu-item">
               <a href="{{ route('booking.view') }}" class="menu-link {{ request()->routeIs('booking.*') ? 'active_land' : '' }}">
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-calendar-event"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 2a1 1 0 0 1 .993 .883l.007 .117v1h1a3 3 0 0 1 2.995 2.824l.005 .176v12a3 3 0 0 1 -2.824 2.995l-.176 .005h-12a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-12a3 3 0 0 1 2.824 -2.995l.176 -.005h1v-1a1 1 0 0 1 1.993 -.117l.007 .117v1h6v-1a1 1 0 0 1 1 -1m3 7h-14v9.625c0 .705 .386 1.286 .883 1.366l.117 .009h12c.513 0 .936 -.53 .993 -1.215l.007 -.16z" /><path d="M8 14h2v2h-2z" /></svg>
                  <div >Booking</div>
               </a>  
            </li>
            @endhasanyrole
            @hasrole('Guest')
            <li class="menu-item">
               <a href="incomplete_booking.php" class="menu-link active_loctn_2">
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-time"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" /><path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M15 3v4" /><path d="M7 3v4" /><path d="M3 11h16" /><path d="M18 16.496v1.504l1 1" /></svg>
                  <div >Incomplete Booking</div>
               </a>
                
            </li>
             
            <li class="menu-item">
               <a href="completed_booking.php" class="menu-link active_loctn">
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11.5 21h-5.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v6" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M15 19l2 2l4 -4" /></svg>
                  <div >Completed Booking</div>
               </a>
                
            </li>
            @endhasrole
          



         </ul>
      </aside>
      <!-- / Menu -->
      <!-- Layout container -->
      <div class="layout-page">
      <!-- Navbar -->
      <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
         <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="ti ti-menu-2 ti-md"></i>
            </a>
         </div>
         <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center" style="display:none;" >
               <div class="nav-item navbar-search-wrapper mb-0">
                  <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                  <i class="ti ti-search ti-md me-2 me-lg-4 ti-lg"></i>
                  <span class="d-none d-md-inline-block text-muted fw-normal">Search (Ctrl+/)</span>
                  </a>
               </div>
            </div>
            <!-- /Search -->
            <ul class="navbar-nav flex-row align-items-center ms-auto">
               <!-- Notification -->
               <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                  <a class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                  <span class="position-relative">
                  <i class="ti ti-bell ti-md"></i>
                  <span class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
                  </span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end p-0">
                     <li class="dropdown-menu-header border-bottom">
                        <div class="dropdown-header d-flex align-items-center py-3">
                           <h6 class="mb-0 me-auto">Notification</h6>
                           <div class="d-flex align-items-center h6 mb-0">
                              <span class="badge bg-label-primary me-2">8 New</span>
                              <a href="javascript:void(0)" class="btn btn-text-secondary rounded-pill btn-icon dropdown-notifications-all" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="ti ti-mail-opened text-heading"></i></a>
                           </div>
                        </div>
                     </li>
                     <li class="dropdown-notifications-list scrollable-container">
                        <ul class="list-group list-group-flush">
                           <li class="list-group-item list-group-item-action dropdown-notifications-item">
                              <div class="d-flex">
                                 <div class="flex-shrink-0 me-3">
                                    <div class="avatar">
                                       <img src="{{ asset('assets/img/avatars/1.png')}}" alt class="rounded-circle">
                                    </div>
                                 </div>
                                 <div class="flex-grow-1">
                                    <h6 class="small mb-1">Congratulation Lettie 🎉</h6>
                                    <small class="mb-1 d-block text-body">Won the monthly best seller gold badge</small>
                                    <small class="text-muted">1h ago</small>
                                 </div>
                                 <div class="flex-shrink-0 dropdown-notifications-actions">
                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </li>
                     <li class="border-top">
                        <div class="d-grid p-4">
                           <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                           <small class="align-middle">View all notifications</small>
                           </a>
                        </div>
                     </li>
                  </ul>
               </li>
               <!--/ Notification -->
               <!-- User -->
               <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                     <div class="avatar avatar-online">
                        <img src="{{ asset('assets/img/avatars/1.png')}}" alt class="rounded-circle">
                     </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                     <li>
                        <a class="dropdown-item mt-0" href="#">
                           <div class="d-flex align-items-center">
                              <div class="flex-shrink-0 me-2">
                                 <div class="avatar avatar-online">
                                    <img src="{{ asset('assets/img/avatars/1.png')}}" alt class="rounded-circle">
                                 </div>
                              </div>
                              <div class="flex-grow-1">
                                 <h6 class="mb-0">John Doe</h6>
                                 <small class="text-muted">Admin</small>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li>
                        <div class="dropdown-divider my-1 mx-n2"></div>
                     </li>
                     <li>
                        <a class="dropdown-item" href="#">
                        <i class="ti ti-user me-3 ti-md"></i><span class="align-middle">My Profile</span>
                        </a>
                     </li>
                     <li>
                        <a class="dropdown-item" href="#">
                        <i class="ti ti-settings me-3 ti-md"></i><span class="align-middle">Settings</span>
                        </a>
                     </li>
                     <li>
                        <div class="dropdown-divider my-1 mx-n2"></div>
                     </li>
                     <li>
                        <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                        <i class="flex-shrink-0 ti ti-file-dollar me-3 ti-md"></i><span class="flex-grow-1 align-middle">Billing</span>
                        <span class="flex-shrink-0 badge bg-danger d-flex align-items-center justify-content-center">4</span>
                        </span>
                        </a>
                     </li>
                     
                     <li>
                        <div class="d-grid px-2 pt-2 pb-1">
                           @if(auth()->check() && (auth()->user()->hasRole('Admin') || auth()->user()->hasRole('Client')))
                                 <a class="btn btn-sm btn-danger d-flex" href="{{ url('/logout') }}">
                                    <small class="align-middle">Logout</small>
                                    <i class="ti ti-logout ms-2 ti-14px"></i>
                                 </a>
                           @elseif(auth()->check() && auth()->user()->hasRole('Guest'))
                                 <a class="btn btn-sm btn-danger d-flex" href="{{ url('/guest/logout') }}">
                                    <small class="align-middle">Logout</small>
                                    <i class="ti ti-logout ms-2 ti-14px"></i>
                                 </a>
                           @endif

                           {{-- 
                                 Or you can use Blade's @hasrole directive:
                                 @hasrole('Admin')
                                    <a class="btn btn-sm btn-danger d-flex" href="{{ url('/logout') }}">
                                       <small class="align-middle">Logout</small>
                                       <i class="ti ti-logout ms-2 ti-14px"></i>
                                    </a>
                                 @elsehasrole('Guest')
                                    <a class="btn btn-sm btn-danger d-flex" href="{{ url('/guest/logout') }}">
                                       <small class="align-middle">Logout</small>
                                       <i class="ti ti-logout ms-2 ti-14px"></i>
                                    </a>
                                 @endhasrole
                           --}}
                        </div>
                     </li>

                  </ul>
               </li>
               <!--/ User -->
            </ul>
         </div>
         <!-- Search Small Screens -->
         <div class="navbar-search-wrapper search-input-wrapper  d-none">
            <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
            <i class="ti ti-x search-toggler cursor-pointer"></i>
         </div>
      </nav>