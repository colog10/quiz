<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html>
<!--<![endif]-->

<head>
    <!-- BASICS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Printful Quiz</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/isotope.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('js/fancybox/jquery.fancybox.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- skin -->
    <link rel="stylesheet" href="{{ asset('skin/default.css') }}">
    <script src="{{ asset('js/jquery-1-10-2.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    {{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">--}}


    @yield('extended_css', '')
</head>

<body >

<!--[if lte IE 8]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a>.</p>
<![endif]-->

<!-- End Preload -->

{{--<div class="layer"></div>--}}
<!-- Mobile menu overlay mask -->

@include('header.header')



@yield('content')

@include('footer.footer')


<!-- START: EXTENDED SCRIPTS -->
@yield('extended_js', '')
        <!-- END: EXTENDED SCRIPTS -->

<script src="{{ asset('js/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
{{--<script src="{{ asset('js/jquery.js') }}"></script>--}}
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('js/fancybox/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('js/skrollr.min.js') }}"></script>
<script src="{{ asset('js/jquery.scrollTo-1.4.3.1-min.js') }}"></script>
<script src="{{ asset('js/jquery.localscroll-1.2.7-min.js') }}"></script>
<script src="{{ asset('js/stellar.js') }}"></script>
<script src="{{ asset('js/jquery.appear.js') }}"></script>
<script src="{{ asset('js/validate.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
