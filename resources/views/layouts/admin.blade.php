<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fabric8') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Styles -->
 
    <link href="{{ asset('Admin/css/material-dashboard.css') }}" rel="stylesheet">
</head>
<body>


  <div class="wrapper ">

    @include('layouts.inc.side-bar')
        <div class="main-panel">

                @include('layouts.inc.navbar')
                @include('layouts.inc.body')
        

           <div class="content">
               @yield('content')
               
           </div>
           
  <footer>
 @include('layouts.inc.admin-footer')

  </footer>
  </div>
     
  </div>  

  
        <script src="{{ asset('Admin/js/jquery.min.js') }}" ></script>
          <script src="{{ asset('Admin/js/popper.min.js') }}" ></script>
          <script src="{{ asset('Admin/js/custom.js') }}" ></script>
          <script src="{{ asset('Admin/js/bootstrap-material-design.min.js') }}" ></script>
         <script src="{{ asset('Admin/js/perfect-scrollbar.jquery.min.js') }}" ></script>
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     


          @if (session('status'))
          <script>
            // swal('{{ session('status') }}');
            // swal('{{ session('status') }}', "success");
            swal("fabric8",'{{ session('status') }}', "success");
          </script>
              
          @endif
          @yield('scripts')
     
</body>
</html>