<!DOCTYPE html>
<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-semi-dark" data-assets-path="assets/" data-template="vertical-menu-template-semi-dark" data-style="light">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
      <title>EasyGroup | Login</title>
      <meta name="description" content="" />
      <meta name="keywords" content="">
      <!-- Canonical SEO -->
      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="assets/img/fev.png" />
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet">
      <!-- Icons -->
      <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css')}}" />
      <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css')}}"/>
      <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css')}}" />
      <!-- Core CSS -->
      <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
      <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-semi-dark.css')}}" class="template-customizer-theme-css" />
      <link rel="stylesheet" href="{{ asset('assets/css/demo.css')}}" />
      <!-- Vendors CSS -->
      <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css')}}" />
      <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
      <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
      <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
      <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css')}}">
      <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
      <!-- Page CSS -->
      <!-- Helpers -->
      <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
      <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
      <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
      <script src="{{ asset('assets/js/config.js')}}"></script>
   </head>
   <body>
      <!-- Content -->
      <div class="authentication-wrapper authentication-cover">
         <!-- Logo -->
         <a href="index.php" class="app-brand auth-cover-brand">
         <img src="{{ asset('assets/img/logo.png')}}" class="logo_reg" >
         </a>
         <!-- /Logo -->
         <div class="authentication-inner row m-0">
            <!-- /Left Text -->
            <div class="d-none d-lg-flex col-lg-7 p-0">
               <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
                  <img src="{{ asset('assets/img/illustrations/auth-register-illustration-light.png')}}" alt="auth-register-cover" class="my-5 auth-illustration" data-app-light-img="illustrations/auth-register-illustration-light.png" data-app-dark-img="illustrations/auth-register-illustration-dark.png">
                  <img src="{{ asset('assets/img/illustrations/bg-shape-image-light.png')}}" alt="auth-register-cover" class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png" data-app-dark-img="illustrations/bg-shape-image-dark.png">
               </div>
            </div>
            <!-- /Left Text -->
            <!-- Register -->
            <div class="d-flex col-12 col-lg-5 align-items-center authentication-bg p-sm-12 p-6">
               <div class="w-px-400 mx-auto mt-12 pt-5">
                  <h4 class="mb-1">Adventure starts here 🚀</h4>
                  <p class="mb-6">Event Agency Hotel Booking Management App</p>
                  <form method="POST" class="mb-6" action="{{ route('guest.login.submit') }}">
                  @csrf
                    <div class="mb-6 midl_lrg">
                        <label for="username" class="form-label">User Name</label>
                        <input type="text" class="form-control" name="email" :value="old('email')" required placeholder="Enter User Name" autofocus autocomplete="username">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="mb-6 midl_lrg">
                        <label for="password" class="form-label" >Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required autocomplete="current-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>                    
                     <div class="clear"></div>
                     <button class="btn btn-primary d-grid w-100 sign_up_btn">
                     Sign up
                     </button>
                  </form>
                   <!-- Register Button -->
                    <div class="text-center">
                        <p>Don't have an account?</p>
                        <a href="{{ route('guest.register') }}" class="btn btn-outline-primary w-100">Register</a>
                    </div>
               </div>
            </div>
            <!-- /Register -->
         </div>
      </div>
      <!-- / Content -->
      <!-- Core JS -->
      <!-- build:js assets/vendor/js/core.js -->
      <script src="{{ asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
      <script src="{{ asset('assets/vendor/libs/popper/popper.js')}}"></script>
      <script src="{{ asset('assets/vendor/js/bootstrap.js')}}"></script>
      <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js')}}"></script>
      <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
      <script src="{{ asset('assets/vendor/libs/hammer/hammer.js')}}"></script>
      <script src="{{ asset('assets/vendor/libs/i18n/i18n.js')}}"></script>
      <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
      <script src="{{ asset('assets/vendor/js/menu.js')}}"></script>
      <!-- endbuild -->
      <!-- Vendors JS -->
      <script src="{{ asset('assets/vendor/libs/@form-validation/popular.js')}}"></script>
      <script src="{{ asset('assets/vendor/libs/@form-validation/bootstrap5.js')}}"></script>
      <script src="{{ asset('assets/vendor/libs/@form-validation/auto-focus.js')}}"></script>
      <!-- Main JS -->
      <script src="{{ asset('assets/js/main.js')}}"></script>
      <!-- Page JS -->
      <script src="{{ asset('assets/js/pages-auth.js')}}"></script>
   </body>
</html>
<!-- beautify ignore:end -->
