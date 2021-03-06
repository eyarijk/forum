<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.css') }}" rel="stylesheet">
    <link href="{{ asset('favicon.icon') }}" rel="shortcut icon">

</head>
<body>
    <div id="app">

        @include('forum.includes.nav')

        <div class="container">
          @include('forum.includes.flash')
          @yield('content')
        </div>

    </div>
    @include('forum.includes.footer')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/select2.js') }}"></script>
    <script src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    @yield('script')
    <script type="text/javascript">
      $(document).ready(function() {
      $("#img_style img").attr("style","max-width:100%");
        });
    </script>

</body>
</html>
