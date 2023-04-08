<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>{{ Config::get('app.name') }} || @yield('title')</title>
    <link rel="shortcut icon" href="{{appSetting('asset')->asset.$data['setting']->favicon}}" type="image/x-icon">
    {{--  bootstrap css  --}}
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>

    {{--  font awesome  --}}
    <script src="https://kit.fontawesome.com/2e7d7272e8.js" crossorigin="anonymous"></script>

    {{--  simple line icon css  --}}
    <link rel="stylesheet" href="{{asset('assets/css/simple-line-icons.css')}}"/>

    {{--  slick css  --}}
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}"/>

    {{--  slick theme css  --}}
    <link rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}"/>

    {{--  owl carousel css  --}}
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}"/>

    {{--  magnific popup css  --}}
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}"/>

    {{--  normalize css  --}}
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}"/>

    {{--  set2 css  --}}
    <link rel="stylesheet" href="{{asset('assets/css/set2.css')}}"/>

    {{--  animated masonry gallery css  --}}
    <link rel="stylesheet" href="{{asset('assets/css/animated-masonry-gallery.css')}}"/>

    {{--  custom css  --}}
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet"/>

    {{--  header css  --}}
    <link href="{{asset('assets/css/header.css')}}" rel="stylesheet"/>
    @stack('pageCss')
</head>
<body>
@php
    $assetServer = appSetting('asset')->asset;
@endphp

{{-- header --}}
@include('partials.header')

{{-- contents --}}
@yield('content')

{{-- footer --}}
@include('partials.footer')


{{-- jQuery --}}
<script src="{{asset('assets/js/jquery.min.js')}}"></script>

{{-- tether js --}}
<script src="{{asset('assets/js/tether.min.js')}}"></script>

{{-- bootstrap js --}}
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

{{-- slick js --}}
<script src="{{asset('assets/js/slick.min.js')}}"></script>

{{-- waypoints js --}}
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>

{{-- counterup js --}}
<script src="{{asset('assets/js/counterup.min.js')}}"></script>

{{-- instafeed js --}}
<script src="{{asset('assets/js/instafeed.min.js')}}"></script>

{{-- owl carousel js --}}
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

{{-- validate js --}}
<script src="{{asset('assets/js/validate.js')}}"></script>

{{-- tweetie js --}}
<script src="{{asset('assets/js/tweetie.min.js')}}"></script>

{{-- subscribe js --}}
<script src="{{asset('assets/js/subscribe.js')}}"></script>

{{-- jquery ui js --}}
<script src="{{asset('assets/js/jquery-ui-1.10.4.min.js')}}"></script>

{{-- jquery isotope js --}}
<script src="{{asset('assets/js/jquery.isotope.min.js')}}"></script>

{{-- animated masonry gallery js --}}
<script src="{{asset('assets/js/animated-masonry-gallery.js')}}"></script>

{{-- jquery magnific popup js --}}
<script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>

{{-- script js --}}
<script src="{{asset('assets/js/script.js')}}"></script>

{{-- toaster --}}
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

{{-- custom js --}}
<script src="{{asset('assets/js/custom.js')}}"></script>

{!! Toastr::message() !!}
{{-- page js --}}
@stack('pageJs')
</body>
</html>
