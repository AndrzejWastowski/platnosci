<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'APP > Ogłoszenia - ') }} @yield('pageName') </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"  rel="stylesheet" type="text/css">
        
    <!-- Styles -->
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/addons-pro/stepper.css') }}" rel="stylesheet">    

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.0.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}" defer></script>    

    <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>    
    <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/addons-pro/stepper.min.js') }}" defer></script>

    <script type="text/javascript" src="{{ asset('js/function.js') }}" defer></script>
      
    @if(isset($map['js'])) <script type="text/javascript">var centreGot = false;</script>{{ <?php echo  $map['js'] ?> }}@endif
    
</head>
<body>
    <div class="container mt-5 pt-2">
        <div class="section mt-3 py-2">
            test vidok głowny:
               
        </div>
        
    </div>
    <div id="app">

        @include('layouts.menu_top')
        @yield('main')
        @include('layouts.footer')
        @yield('scripts')

{{  session('status') }}
        </div>
</body>
</html>
