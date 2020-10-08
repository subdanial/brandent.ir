<html lang="fa" dir="rtl" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{asset('node_modules/destyle.css/destyle.css')}}">
    <link rel="stylesheet" href="{{asset('node_modules/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/node_modules/bootstrap-extensions/dist/bootstrap-extensions.css')}}">
    <link rel="stylesheet" href="{{asset('node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.css')}}">
    <link href="{{asset('css/leaflet.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/datatables.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('node_modules/gsap/dist/gsap.min.js')}}"></script>
    <script src="{{asset('node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/leaflet.js')}}"></script>
    <script src="{{asset('tinymce/tinymce.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/datatables.min.js')}}" type="text/javascript"></script>
    @FilemanagerScript

</head>


<body class="bg-light text-right">