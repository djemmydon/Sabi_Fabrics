<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->

    <!-- Fonts -->
 {{-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> --}}


    <link rel="shortcut icon" href="{{ asset('Front_End/img/photo_2021-10-29_03-17-28.jpg') }}" rel="stylesheet">

    <!-- Styles -->
 
    <link href="{{ asset('Front_End/css/bootstrap5.css') }}" rel="stylesheet">
    <link href="{{ asset('Front_End/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('Front_End/css/checkout.css') }}" rel="stylesheet">
    <link href="{{ asset('Front_End/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Front_End/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Front_End/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Front_End/css/semantic.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Front_End/css/dropdown.min.css') }}" rel="stylesheet">
     
      
</head>
<body>


                @include('layouts.inc.front-nav')
                
           <div class="content">
               @yield('content')
           </div>
                @include('layouts.inc.front-footer')
 
    <script src="{{ asset('Front_End/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('Front_End/js/bootstrap.bundle.min.js.js') }}"></script>
        <script src="{{ asset('Front_End/js/all.min.js') }}"></script>
        <script src="{{ asset('Front_End/js/semantic.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('Front_End/js/custom.js') }}"></script>
        <script src="{{ asset('Front_End/js/owl.carousel.min.js') }}"></script>
        
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        

   

          @if (session('status'))
          <script>
            swal('{{ session('status') }}');
            swal('{{ session('status') }}', "success");
            swal("fabric8",'{{ session('status') }}', "success");
          </script>
              
          @endif
          @yield('scripts')
     
</body>
</html>