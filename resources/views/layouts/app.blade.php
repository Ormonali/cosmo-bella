<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>Cosmo-bella</title>

</head>
<body>

    @yield('content')

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript">
$(".burger-menu").click(function () {
                $(this).toggleClass("menu-on");
    });
</script>
<script>
    var owl = $('.carousel_1');
    var owl2 = $('.carousel_2');
    var owl3 = $('.carousel_3');
    owl.owlCarousel({
        nav: false,
        dots: false,
        mouseDrag:false,
        touchDrag:false,
        items:1,
        center:true,
        loop:true,
        margin:10,
        rtl:true,
        animateOut: 'slideOutUp',
        animateIn: 'slideInUp',
        responsiveClass:true,
        responsive:{
        0:{
            touchDrag:true,
            mouseDrag:true,
            nav:true
        },
        1190:{
            nav:true,
            touchDrag:true,
            mouseDrag:true,
        },
        1200:{
            items:1,
        }
        }
    });
    owl2.owlCarousel({
        nav: false,
        dots: false,
        mouseDrag:false,
        touchDrag:false,
        margin:10,
        items: 1,
        loop:true,
        margin:1,
        animateOut: 'fadeOut',
    });
    owl3.owlCarousel({
        nav: false,
        dots: false,
        mouseDrag:false,
        touchDrag:false,
        margin:10,
        items: 2,
        paginationSpeed:1200000,
        loop:true,
        margin:300,
        responsiveClass:true,
        responsive:{
        0:{
            items:1,
        },
        990:{
            items:1,
        },
        1000:{
            items:2,
        }
    }
    });
    $('.customNextBtn').click(function() {
        owl.trigger('next.owl.carousel');
        owl2.trigger('next.owl.carousel');
        owl3.trigger('next.owl.carousel');
        $(".owl-stage .active h1").removeClass('shadow-first');
        $(".owl-stage .active h1").first().addClass('shadow-first');
    });
    $('.customPrevBtn').click(function() {
        owl.trigger('prev.owl.carousel');
        owl2.trigger('prev.owl.carousel');
        owl3.trigger('prev.owl.carousel');
        $(".owl-stage .active h1").removeClass('shadow-first');
        $(".owl-stage .active h1").first().addClass('shadow-first');
    });
    $('.owl-prev').click(function() {
        owl.trigger('prev.owl.carousel');
        owl3.trigger('prev.owl.carousel');
        $(".owl-stage .active h1").removeClass('shadow-first');
    });
    $('.owl-next').click(function() {
        owl.trigger('next.owl.carousel');
        owl3.trigger('next.owl.carousel');
        $(".owl-stage .active h1").removeClass('shadow-first');
    });
</script>

</body>
</html>
