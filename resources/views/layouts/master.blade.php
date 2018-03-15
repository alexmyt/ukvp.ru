<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{--<!-- CSRF Token -->--}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">
        <meta name="author" content="Кредитный потребительский кооператив 'Касса взаимопомощи', г.Урюпинск">
        <title>КПК "Касса взаимопомощи" - @yield('title')</title>


        <!-- Bootstrap Core CSS -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        @stack('header_css')
        
        <!-- Font Awesome -->
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        
        <!-- Custom CSS -->
        <link href="{{ mix('css/custom.css') }}" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="page-top" class="index">
    <div id="app">
    
        @include('layouts.partials._navigation')
    </div>
    
        @yield('content')
    
        @include('layouts.partials._footer')
        
        {{--<!-- JavaScripts -->--}}
        <script src="{{ mix('js/app.js') }}"></script>
        @stack('footer_scripts')
        <script type="text/javascript">
            jQuery(".countTo").appear(function ()
            {
              var e = jQuery(this),
                t = e.attr("data-from") || 0,
                n = e.attr("data-speed") || 1300,
                r = e.attr("data-refreshInterval") || 60;
              e.countTo(
              {
                from: parseInt(t),
                to: e.html(),
                speed: parseInt(n),
                refreshInterval: parseInt(r)
              })
            })
        </script>
    </body>
</html>