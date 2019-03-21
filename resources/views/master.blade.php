<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>
        @if( !empty($pageTitle) ) {{ $pageTitle}} @endif
    </title>
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('favicon.ico') }}" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="yinonsade">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    @include('inc.css_header')
    <script>
        var BASE_URL = "{{ url('') }}/";
    </script>

    <!-- Main costum Style css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>
    <!-- Preloader -->
    {{--
    <section id="preloader">
        <div class="loader" id="loader">
            <div class="loader-img"></div>
        </div>
    </section> --}}
    <!--  End Preloader -->
    <!-- Site Wraper -->
    <div class="wrapper">
        <!-- Header ("header--dark", "header-transparent", "header--sticky")-->
        <header id="header" class="header header-transparent header--sticky">
            <!-- Nav Bar -->
    @include('inc.topmenu')
        </header>
        <!-- End Header -->
        @yield('main_content')
    @include('inc.error_messages')
        <!-- FOOTER -->
        <footer class="fixed-bottom bg-dark text-center mt-5">
            <p class="">
                created by <b>YINON-SADE</b> {{date('Y')}} © <a> | E2.1.8</a>
            </p>
        </footer>
        <!-- END FOOTER -->
    </div>
    <!-- Site Wraper End -->
    <!-- JS -->
    @include('inc.js_footer')
</body>

</html>