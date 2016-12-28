<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Restart @yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    </head>
    <body>
      <div id="hero-page">
        @yield('hero')
      </div>

      <div id="content">
        @yield('content')
      </div>

      <div id="footer">
        @include('layouts.partials.footer')
      </div>
    </body>
    <script src="{{asset('js/jquery-3.1.1.min.js')}}" charset="utf-8"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" charset="utf-8"></script>
    @yield('script')
</html>
