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
        <meta name="google-site-verification" content="-OeC-oUnlnF8vGl5yHuNLimT_p4r9KdASd45j9jx8ZI" />
        <title>КПК "Касса взаимопомощи" - @yield('title')</title>


        <!-- Bootstrap Core CSS -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        @stack('header_css')
        
        <!-- Font Awesome -->
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        
        <!-- Custom CSS -->
        <link href="{{ mix('css/custom.css') }}" rel="stylesheet">
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-28771902-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-28771902-1');
        </script>

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter48515816 = new Ya.Metrika({
                            id:48515816,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true
                        });
                    } catch(e) { }
                });
        
                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/watch.js";
        
                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/48515816" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <!-- favicons -->
        <link rel="apple-touch-icon" sizes="152x152" href="/images/icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/icons/favicon-16x16.png">
        <link rel="manifest" href="/images/icons/site.webmanifest">
        <link rel="mask-icon" href="/images/icons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/images/icons/favicon.ico">
        <meta name="msapplication-TileColor" content="#2d89ef">
        <meta name="msapplication-config" content="/images/icons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        
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
@include('cookieConsent::index')