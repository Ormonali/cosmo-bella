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

    <title>Cosmo-bella</title>
    
</head>
<body>

    @yield('content')

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script>
    var owl = $('.carousel_1');
    var owl2 = $('.carousel_2');
    var owl3 = $('.carousel_3');
    owl.owlCarousel({
        nav: false,
        dots: false,
        mouseDrag:false,
        touchDrag:false,
        margin:10,
        items:1,
        center:true,
        loop:true,
        margin:1,
        rtl:true,
        animateOut: 'slideOutUp',
        animateIn: 'slideInUp',
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
        loop:true,
        margin:500,
    });
    $('.customNextBtn').click(function() {
        owl.trigger('next.owl.carousel');
        owl2.trigger('next.owl.carousel');
        owl3.trigger('next.owl.carousel');
    });
    $('.customPrevBtn').click(function() {
        owl.trigger('prev.owl.carousel');
        owl2.trigger('prev.owl.carousel');
        owl3.trigger('prev.owl.carousel');
    });
</script>

</body>
</html>
