@extends('layouts.app')
@section('content')
    <style>
        .item img{
            height: 100%;
        }
        body{
            pointer-events: none;
        }
        h1{
            font-family: Cormorant Garamond;
            font-style: normal;
            font-weight: bold;
            font-size: 5.2vw;
        }
        p{
           font-size: 1.2vw;
        }
        .moore-btn{
            top:-10em;
            left: 6.5%;
            z-index: 999;
        }
        .shadow-first{
            -webkit-text-shadow: 13px -17px 2px rgba(225,237,236,0.98);
            -moz-text-shadow: 13px -17px 2px rgba(225,237,236,0.98);
            text-shadow: 13px -17px 2px rgba(225,237,236,0.98);
        }
        .display-6{
            font-size: 30px;
        }
        .arrow,.btn{
            cursor: pointer;
        }
        .arrow img{
            width: 5vw;
        }
        .carousel_2,.tab-links{
            margin-top: 35vh;
            padding-left: 7vh;
        }
        .tab-links{
            padding-left: 7%;
        }
        .tab-links a:hover{
            color: #D7B56D!important;
            text-decoration: none;
        }
        .tab-links a:hover>span{
            display: inline-block!important;
        }
        body{
            background-image: url("{{asset('/images/Vector 26.png')}}");
            background-size: 30%;
            background-repeat: no-repeat;
            background-position-y:30em;
            background-position-x: 35%;
        }
        @media screen and (max-width: 1200px){
            .customNextBtn{
                right: 20vh!important;
            }
            body{
                background-image: none;
            }
            .display-6{
                font-size: 30px;
            }
        }
        @media screen and (max-width: 990px){
            .tab-links{
                margin-top: 1em;
            }
            .owl-prev, .owl-next{
                position:absolute!important;
                top: 50%;
                z-index: 999;
                width: 29px;
                height: 29px;
            }
            .owl-prev{
                margin-right: 23%!important;
                background-image: url("/images/Group 98.png")!important;
            }
            .owl-next {
                margin-right:-35%!important;
                background-image: url("/images/Group 97.png")!important;
            }
            .moore-btn{
                top:-20em;
            }
            .carousel_2{
                margin-top: 30vh;
            }
        }
        @media screen and (max-width: 640px){
            .moore-btn{
                top:-3em;
                left: 35%;
            }
            .carousel_2{
                margin-right: 10%!important;
                margin-left: 10%!important;
                margin-top: -6vh;
            }
        }
        .carousel_3 .owl-stage  .active{
            margin-right: 6%!important;
        }
        .btn-gold{
            background-color: #D7B56D;
            color:#fff;
        }
        .display-7{
            font-size: 1rem!important;
        }
        .display-8{
            font-size: 0.9rem!important;
        }

    </style>
    @include('_partials.header')
    <div class="main-tab">
        <div class="row" >
            <div class="col-1"></div>
            <div class="owl-carousel owl-theme carousel_3 col-12 pl-4 ml-2 position-absolute row overflow-hidden" style="top:120px;left:3%;pointer-events:visiblePainted; z-index: 999;width:94.5%;">
                <div class="item" style="width: 300%;"><p class="display-6 d-none d-lg-block">1/</p><pre><h1 class="cg-bold shadow-first text-dark"><span class="d-lg-none display-6">1/</span>Свадебные платья</h1></pre></div>
                <div class="item" style="width: 300%;"><p class="display-6 d-none d-lg-block">2/</p><pre><h1 class="cg-bold  text-dark"><span class="d-lg-none display-6">2/</span>Вечерние платья</h1></pre></div>
                <div class="item" style="width: 300%;"><p class="display-6 d-none d-lg-block">3/</p><pre><h1 class="cg-bold  text-dark"><span class="d-lg-none display-6">3/</span>Мужские костюмы</h1></pre></div>
            </div>
        </div>
        <div class="row position-absolute" style="top:135px; left: 15px; pointer-events:visiblePainted; z-index: 999;width:90%;">
            <div class="col-1"></div>
            <div class="col-5" style="margin-right: 32%;">
                <a class="customPrevBtn arrow d-none d-lg-block" > <img src="/images/Arrow 1.png"></a>
            </div>
            <div class="col-1">
                <a class="customNextBtn arrow d-none d-lg-block"><img src="/images/Arrow 2.png"></a>
            </div>
        </div>
        <div class="row mr-0" style="pointer-events:visiblePainted;">
        <div class="col-1">
            <div class="position-absolute d-none d-lg-block" style="bottom: 1em; width: 200px; left: 90%; z-index: 999;">
                <a href="https://twitter.com"><img src="images/Vector (1).png" class="pr-3" style="width:40px;"></a>
                <a href="https://youtube.com"><img src="images/Vector.png" class="pr-3" style="width:40px;"></a>
                <a href="https://facebook.com"><img src="images/Vector (2).png" class="pr-3" style="width:40px;"></a>
                <a href="https://instagram.com"><img src="images/Group.png" class="pr-3" style="width:40px;"></a>
            </div>
        </div>
        <div class="owl-carousel owl-theme carousel_2 col-lg-3 mr-4 col-sm-5 pl-0" style="margin-left:-1.5em; text-overflow: ellipsis;">
            <div class="item rw-medium d-none d-sm-block">
                <p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение буква</p>
            </div>
            <div class="item rw-medium d-none d-sm-block">
                <p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.A также реальное распределение букв</p>
            </div>
            <div class="item rw-medium d-none d-sm-block">
                <p>Давно выяснено, что при оценке дизайна и композиции читаемый текст</p>
            </div>
        </div>
        <div class="owl-carousel owl-theme carousel_1 col-lg-3 ml-5 col-sm-4 col-10 pr-4" style="margin-top: 20vh;">
            <div class="item"><img  src="/images/Group 91.png"></div>
            <div class="item"><img  src="/images/Group 90.png"></div>
            <div class="item"><img  src="/images/Group 92.png"></div>
        </div>

        <div class="tab-links col-lg-4 col-sm-12 pr-0 row" style="width:100%;pointer-events:visiblePainted;">
            <div class="col-lg-12 col-sm-6 d-none d-sm-block" style="height: 20%;">
                <h5><a href="#main" class="text-dark rw-medium display-7">Свадебные платья <span class="d-none pl-4"><img src="/images/Arrow 3.png"></span></a></h5>
                <p class="rw-light d-none d-sm-block  display-8">Новые поступления ждут Вас в нашем свадебном салоне</p>
            </div>
            <div class="col-lg-12 col-sm-6 d-none d-sm-block" style="height: 20%;">
                <h5><a href="#about-us" class="text-dark rw-medium display-7">Вечерние платья<span class="d-none pl-4"><img src="/images/Arrow 3.png"></span></a></h5>
                <p class="rw-light  display-8">Новые поступления ждут Вас в нашем свадебном салоне</p>
            </div>
            <div class="col-lg-12 col-sm-6 d-none d-sm-block" style="height: 20%;">
                <h5><a href="#clients" class="text-dark rw-medium display-7">Мужские костюмы<span class="d-none pl-4"><img src="/images/Arrow 3.png"></span></a></h5>
                <p class="rw-light  display-8">Новые поступления ждут Вас в нашем свадебном салоне</p>
            </div>
            <div class="col-lg-12 col-sm-6 d-none d-sm-block" style="height: 20%;">
                <h5><a href="#contacts" class="text-dark rw-medium display-7">Салон красоты<span class="d-none pl-4"><img src="/images/Arrow 3.png"></span></a></h5>
                <p class="rw-light display-8">Новые поступления ждут Вас в нашем свадебном салоне</p>
            </div>
        </div>
        <div class="moore-btn position-relative" style="pointer-events:visiblePainted;">
            <a href="#about-us" class="btn btn-gold rounded-0 border-0 mt-5 px-4 py-2 rw-medium">Подробнее</a>
        </div>
    </div>
    <img class="float-right rectangle position-absolute d-none d-lg-block" style="width: 24%; top: 24vh;left:37.5%; z-index: 1" src="/images/Rectangle 23.png">
        <img class="position-absolute d-none d-lg-block" style="top: 0px;left:5%;z-index: 999; height:100%;" src="{{asset('/images/Line 6.png')}}">
        <img class="position-absolute d-none d-lg-block" style="top: 0px;left:36.1%; z-index: 999; height:100%" src="{{asset('/images/Line 6.png')}}">
        <img class="position-absolute d-none d-lg-block" style="top: 0px;left: 67%; z-index: 9999; height:100%"src="{{asset('/images/Line 6.png')}}">
    </div>
@endsection
