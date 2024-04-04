<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        @php
            include_once public_path() . '/images/site_sprite.svg';
        @endphp

        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic" rel="stylesheet">
        
        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/web/block-library/style.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/web/normalize.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/web/bootstrap-grid.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/web/owl.carousel.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/web/owl.theme.default.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/web/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/web/color-scheme.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/web/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/web/jivo/widget.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/web/jivo/omnichannelMenu.widget.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/web/jivo/chatcontainer.widget.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/web/app_mastera.css') }}">
    </head>
    
    <body>
        <div class="ms-body">
            {{-- Навигация --}}
            @include('web.layouts.components.navbar')

            @yield('content')
                
            {{-- Footer --}}
            @include('web.layouts.components.footer')
            
            {{-- Modal --}}
            @include('web.components.modal.order')
            @include('web.components.modal.comment')
        </div>

        <script>
            var token = '{{ csrf_token() }}';
        </script>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" id="jquery-js"></script>
        <script type="text/javascript" src="https://mastera-ryadom.ru/wp-content/themes/handyman/js/jquery.easing.js?ver=1.0.0" id="easing-js"></script>
        <script type="text/javascript" src="https://mastera-ryadom.ru/wp-content/themes/handyman/js/jquery.scrollup.min.js?ver=1.0.0" id="scrollup-js"></script>
        <script type="text/javascript" src="https://mastera-ryadom.ru/wp-content/themes/handyman/js/owl.carousel.min.js?ver=1.0.0" id="owlcarousel-js"></script>
        <script type="text/javascript" src="https://mastera-ryadom.ru/wp-content/themes/handyman/js/muuri.min.js?ver=1.0.0" id="muuri-js"></script>
        <script type="text/javascript" src="https://mastera-ryadom.ru/wp-content/themes/handyman/js/mask.min.js?ver=1.0.0" id="mask-js"></script>
        <script type="text/javascript" src="{{ asset('js/web/custom.min.js?v=' . time()) }}"></script>
        <script type="text/javascript" src="https://mastera-ryadom.ru/wp-content/themes/handyman/js/jquery.gray.min.js?ver=1.0.0" id="gray-js"></script>
        <script type="text/javascript" src="https://mastera-ryadom.ru/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=7.4.4" id="wp-polyfill-js"></script>
        <script type="text/javascript" src="https://mastera-ryadom.ru/wp-includes/js/dist/hooks.min.js?ver=d0188aa6c336f8bb426fe5318b7f5b72" id="wp-hooks-js"></script>
        <script type="text/javascript" src="https://mastera-ryadom.ru/wp-includes/js/dist/i18n.min.js?ver=6ae7d829c963a7d8856558f3f9b32b43" id="wp-i18n-js"></script>
        <script type="text/javascript" src="https://mastera-ryadom.ru/wp-includes/js/dist/vendor/lodash.min.js?ver=4.17.21" id="lodash-js"></script>
        <script type="text/javascript" id="lodash-js-after">window.lodash = _.noConflict();</script>
        <script type="text/javascript" src="https://mastera-ryadom.ru/wp-includes/js/dist/url.min.js?ver=7c99a9585caad6f2f16c19ecd17a86cd" id="wp-url-js"></script>
        <script type="text/javascript" src="https://mastera-ryadom.ru/wp-includes/js/dist/api-fetch.min.js?ver=25cbf3644d200bdc5cab50e7966b5b03" id="wp-api-fetch-js"></script>
        <script type="text/javascript" src="{{ asset('js/web/index.js?v=' . time()) }}"></script>
        <script type="text/javascript" src="https://mastera-ryadom.ru/wp-content/plugins/easy-fancybox/js/jquery.fancybox.min.js?ver=1.3.24" id="jquery-fancybox-js"></script>
        <script type="text/javascript" src="https://mastera-ryadom.ru/wp-content/plugins/easy-fancybox/js/jquery.easing.min.js?ver=1.4.1" id="jquery-easing-js"></script>
        <script type="text/javascript" src="{{ asset('js/web/custom-main-page.min.js?v=' . time()) }}"></script>
        <script type="text/javascript" src="https://mastera-ryadom.ru/wp-includes/js/wp-embed.min.js?ver=5.7.11" id="wp-embed-js"></script>
        <script type="text/javascript" src="{{ asset('/js/jwplayer-7.4.2/jwplayerwithkey_v2.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/web/app_mastera.js?v=' . time()) }}"></script>
        
        <script type="text/javascript" src="{{ asset('js/web/sticky.js?v=' . time()) }}"></script>
    </body>
</html>
