<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="x-ua-compatible" content="ie=edge">
@yield('seo')

<title>{{ config('app.name', 'Laravel') }}</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.html')}}">
<link rel="shortcut icon" type="image/ico" href="{{asset('images/favicon.html')}}" />

<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

<link href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

<link href="{{asset('css/matrialize.css')}}" rel="stylesheet">

<link href="{{asset('owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

<link rel="stylesheet" href="{{asset('css/style.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.min.css')}}">
<style>
.hamburger{
            display: none;
        }
@media only screen and (max-width: 1024px)  {
    .hamburger{
            display: inherit;
        }
}
</style>
</head>
<body>
@include('layouts.header')
<main class="py-4">
            @yield('content')
</main>



@include('layouts.footer')

<div class="modal" id="myModal">
<div class="container">
<div class="vertical-space-85"></div>
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-body">
<button class="button button-rounded  close" data-dismiss="modal">&times;</button>
<video class="" controls>
<source src="{{asset('video/Pexels_Videos_2706.mp4')}}" type="video/mp4">
</video>
</div>
</div>
</div>
</div>
</div>

<script data-cfasync="false" src="{{asset('js/email-decode.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>

<script src="{{asset('js/custom.js')}}"></script>
<script>
        $(".search-icone").click(function(){
     // $(".menu").animate({height: "100vh"});
});

    </script>
</body>

</html>