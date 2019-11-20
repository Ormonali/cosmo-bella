@extends('layouts.app')
@section('content')
    <style>
        .item img{
            height: 100%;
        }
        h1{
            font-family: Cormorant Garamond;
            font-style: normal;
            font-weight: bold;
            font-size: 70px;
        }
        .display-6{
            font-size: 30px;
        }
        .arrow{
            cursor: pointer;
        }
        .carousel_2,.tab-links{
            margin-top: 30vh;
        }
        @media screen and (max-width: 1400px){
            .customNextBtn{
                right: 20vh!important;
            }
        }
    </style>
    <nav class="navbar menuse navbar-expand-xl py-3 w-100 pr-0 d-xl-block d-none" style="z-index: 999; background: transparent; position: fixed;">
    <div class="container-fluid top-menu">
        <div class="row w-100 mx-5 pb-3">
            <div class="col-lg-5 collapse navbar-collapse">
                <nav class="mr-md-auto ml-0">
                    <ul class="navbar-nav" id="pick">
                        <li class="nav-item px-3">
                            <span><img src="/images/location 1.png"></span> г. Бишкек, ул. Раззакова, 56
                        </li>
                        <li class="nav-item px-3">
                            <span><img src="/images/access-time 1.png"></span> C 9.00 до 20.00 без выходных
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-2 col-8 collapse navbar-collapse"  id="navbarSupportedContent">
                <a href="/">
                    <img class="logo" src="{{ asset('images/logo.png') }}" alt="">
                </a>
            </div>
            <div class="col-lg-5 collapse navbar-collapse">
                <nav class="ml-md-auto ml-0">
                    <ul class="navbar-nav" id="pick">
                        <li class="nav-item px-3">
                            <a href="tel:+996 501 433 433" class="text-fut-book text-scale" style="font-size: 14px; line-height: 17px; text-align: center; text-transform: uppercase; color: #444444;"><span><img src="/images/phone 1.png"></span>+996 (550) 510 500</a>
                        </li>

                        <li class="nav-item px-3 position-relative">
                            <img class="icon-flip" style="height:28px; width: 28px; margin-top:-5px;" src="{{ asset('images/group 93.png') }}" alt="">
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</nav>
    <div class="row mr-0" style="transform: translateY(30vh);">
        <div class="col-1">  
        </div>
        <div class="owl-carousel owl-theme carousel_3 col-11 overflow-hidden pr-0">
            <div class="item overflow-hidden" style="width: 610px;"><p class="display-6">1/</p><h1>Свадебные платья</h1></div>
            <div class="item overflow-hidden" style="width: 610px;"><p class="display-6">2/</p><h1>Вечерние платья</h1></div>
            <div class="item overflow-hidden" style="width: 610px;"><p class="display-6">3/</p><h1>Мужские костюмы</h1></div>
        </div>
    </div>
    <a class="customPrevBtn arrow position-absolute d-none d-xl-block" style="top:31vh; left: 12%;"> <img src="/images/Arrow 1.png"></a>
    <a class="customNextBtn arrow position-absolute d-none d-xl-block" style="top:31vh; right: 21%"><img src="/images/Arrow 2.png"></a>
    <div class="row mr-0" style="pointer-events:none;">
        <div class="col-1 ">
            <img src="images/Vector (1).png">
            <img src="images/Vector.png">
            <img src="images/Vector (2).png">
            <img src="images/Group.png">
        </div>
        <div class="owl-carousel owl-theme carousel_2 col-3 mr-5">
            <div class="item">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв</div>
            <div class="item">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.A также реальное распределение букв</div>
            <div class="item">Давно выяснено, что при оценке дизайна и композиции читаемый текст </div>
        </div>
        <div class="owl-carousel owl-theme carousel_1 col-3" style="width:32%;">
            <div class="item"><img  src="/images/Group 90.png"></div>
            <div class="item"><img  src="/images/Group 91.png"></div>
            <div class="item"><img  src="/images/Group 92.png"></div>
        </div>
        <div class="tab-links col-4 ml-5" style="width:32%;">
            <div class="row">
                <a href="#" class="pr-5">Свадебные платья</a><br>
                <p>Новые поступления ждут Вас в нашем свадебном салоне</p>
            </div>
            <div class="row">
                <a href="#">Вечерние платья</a><br>
                <p>Новые поступления ждут Вас в нашем свадебном салоне</p>
            </div>
            <div class="row">
                <a href="#">Мужские костюмы</a><br>
                <p>Новые поступления ждут Вас в нашем свадебном салоне</p>
            </div>
            <div class="row">
                <a href="#">Салон красоты</a><br>
                <p>Новые поступления ждут Вас в нашем свадебном салоне</p>
            </div>
        </div>
    </div>
    <img class="float-right rectangle position-absolute d-none d-xl-block" style="width: 24%; top: 210px;left:38%; z-index: 1" src="/images/Rectangle 23.png">
@endsection
@push('scripts')
    <script>
        $('#dropdownMenuButtonGenre').hover(e => {
            let btn = $(e.currentTarget);
            let dropdown = btn.siblings('.dropdown-menu');
            dropdown.addClass('show');
            dropdown.hover(e => {
                $(e.currentTarget).addClass('show');
            }, e => {
                $(e.currentTarget).removeClass('show');
            });
        }, e => {
            let btn = $(e.currentTarget);
            let dropdown = btn.siblings('.dropdown-menu');
            dropdown.removeClass('show');
        });
    </script>

    <script>
        $('.hamburger').click(e => {
            let status = $('.hamburger').attr('aria-expanded');
            if (status != 'true') {
                $('.hamburger').addClass('is-active');
            }
            if (status != 'false') {
                $('.hamburger').removeClass('is-active');
            }
        });
    </script>
@endpush