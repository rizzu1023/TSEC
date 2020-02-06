<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ShopAR</title>
    <link rel="icon" href="{{asset('Main/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/owl.carousel.min.css')}}">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/nice-select.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('Main/css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('Main/css/price_rangs.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/style.css')}}">
</head>

<body>
<!--::header part start::-->
@include('Main.layouts.header')
<!-- Header part end-->
<main>
    @yield('content')
</main>
<!--::footer_part start::-->
@include('Main.layouts.footer')
<!--::footer_part end::-->

<!-- jquery plugins here-->
<script src="{{asset('Main/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('Main/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('Main/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('Main/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('Main/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('Main/js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('Main/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('Main/js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{asset('Main/js/slick.min.js')}}"></script>
    <script src="{{asset('Main/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('Main/js/waypoints.min.js')}}"></script>
    <script src="{{asset('Main/js/contact.js')}}"></script>
    <script src="{{asset('Main/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('Main/js/jquery.form.js')}}"></script>
    <script src="{{asset('Main/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('Main/js/mail-script.js')}}"></script>
    <!-- custom js -->

{{--    <script src="{{asset('Main/https://kit.fontawesome.com/588cda5f94.js')}}" crossorigin="anonymous"></script>--}}
    <script src="{{asset('Main/js/custom.js')}}"></script>
    <script src="https://kit.fontawesome.com/588cda5f94.js" crossorigin="anonymous"></script>

</body>

</html>
