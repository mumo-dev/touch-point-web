<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'InTouch') }}</title>

    <!-- Scripts -->



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
     <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

     <style>
         
        .logo-bg {
            background-image:url('/images/logo.jpg');
            background-repeat:no-repeat;
            background-position:center
        }

    </style>

</head>
<body>
    <div id="app">


    <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color:#22305c" >
      <a class="navbar-brand col-sm-3 col-md-2 mr-0 pt-0 pb-0" href="#">
         <img src="/images/logo.jpg" height="50px" class="rounded-circle"> Touch
      </a>
         @yield('header-title')
      {{-- <h6 class="text-white text-uppercase">Admin Dashboard</h6> --}}
      <ul class="navbar-nav px-3">

        <li class="nav-item text-nowrap">
          <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}</a>
        </li>


          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
      </ul>
    </nav>


    <div class="container-fluid">
      <div class="row">

        @yield('sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-2">
           @yield('content')
        </main>
      </div>
    </div>


  </div>
   <script src="{{ asset('js/app.js') }}"></script>
  <!-- Icons -->
    <script src="{{ asset('js/feather.min.js') }}"></script>

    <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
      feather.replace()

      $(document).ready(function() {
        $('#datatable').DataTable();
    });
    </script>





</body>
</html>

