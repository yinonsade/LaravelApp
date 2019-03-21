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

    <style>
        body {
            padding-right: 0px !important;
            overflow-y: hidden !important;
        }

        .fx:hover {
            background-color: black;
            color: white;
            opacity: 0.5;
        }

        img {

            max-width: 300px;
            margin-top: 15%;
        }
    </style>

</head>

<body>




    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <img class="rounded mx-auto d-block" src="{{asset('images/smallogo.jpg')}}" alt="">
            </div>
            <div class="col-12 mt-5">
                <a href="{{url('home')}}">
                    <h1 class="text-center font-weight-bold mt-5"><u class="fx">ENTER</u></h1>
                </a>
            </div>
        </div>


    </div>
    @include('inc.js_footer')

</body>