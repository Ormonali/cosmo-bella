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
            top:-20em;
            left: 6%;
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
            margin-top: 31em;
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
        .carousel_3 .owl-stage  .active{
            margin-right: 8%!important;
        }
        .btn-gold{
            background-color: #D7B56D;
            color:#fff;
        }
    </style>
    @include('_partials.header')
    <div class="main-tab">
        <div class="row" >
            <div class="col-1"></div>
            <div class="owl-carousel owl-theme carousel_3 col-12 pl-4 ml-2 position-absolute row overflow-hidden" style="top:170px;left:3%;pointer-events:none; z-index: 999;width:94.5%;">
                <div class="item" style="width: 300%;"><p class="display-6 d-none d-lg-block">1/</p><pre><span class="d-lg-none d-sm-block display-6">1/</span><h1 class="cg-bold shadow-first">Свадебные платья</h1></pre></div>
                <div class="item" style="width: 300%;"><p class="display-6 d-none d-lg-block">2/</p><pre><p class="d-lg-none d-sm-block display-6">2/</p><h1 class="cg-bold">Вечерние платья</h1></pre></div>
                <div class="item" style="width: 300%;"><p class="display-6 d-none d-lg-block">3/</p><pre><p class="d-lg-none d-sm-block display-6">3/</p><h1 class="cg-bold">Мужские костюмы</h1></pre></div>
            </div>
        </div>
        <div class="row position-absolute" style="top:180px; left: 15px; pointer-events:visiblePainted; z-index: 999;width:90%;">
            <div class="col-1"></div>
            <div class="col-5" style="margin-right: 30%;">
                <a class="customPrevBtn arrow d-none d-lg-block" > <img src="/images/Arrow 1.png"></a>
            </div>
            <div class="col-1">
                <a class="customNextBtn arrow d-none d-lg-block"><img src="/images/Arrow 2.png"></a>
            </div>
        </div>
        <div class="row mr-0" style="pointer-events:visiblePainted;">
        <div class="col-1">
            <div class="position-realtive d-none d-lg-block" style="top: -35em; width: 200px; left:72%; z-index: 999;">
                <a href="https://twitter.com"><img src="images/Vector (1).png" class="pr-3" style="width:40px;"></a>
                <a href="https://youtube.com"><img src="images/Vector.png" class="pr-3" style="width:40px;"></a>
                <a href="https://facebook.com"><img src="images/Vector (2).png" class="pr-3" style="width:40px;"></a>
                <a href="https://instagram.com"><img src="images/Group.png" class="pr-3" style="width:40px;"></a>
            </div>
        </div>
        <div class="owl-carousel owl-theme carousel_2 col-3 mr-4 pl-0 d-none d-lg-block" style="margin-left:-1.5em; text-overflow: ellipsis;">
            <div class="item rw-medium">
                <p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение буква</p>
            </div>
            <div class="item rw-medium">
                <p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.A также реальное распределение букв</p>
            </div>
            <div class="item rw-medium">
                <p>Давно выяснено, что при оценке дизайна и композиции читаемый текст</p>
            </div>
        </div>
        <div class="owl-carousel owl-theme carousel_1 col-3 ml-5" style="margin-top: 20vh;">
            <div class="item"><img  src="/images/Group 90.png"></div>
            <div class="item"><img  src="/images/Group 91.png"></div>
            <div class="item"><img  src="/images/Group 92.png"></div>
        </div>

        <div class="tab-links col-4 d-none d-lg-block" style="width:32%;pointer-events:visiblePainted;">
            <div class="pb-4">
                <h5><a href="#main" class="text-dark rw-medium">Свадебные платья <span class="d-none pl-4"><img src="/images/Arrow 3.png"></span></a></h5>
                <p class="rw-light">Новые поступления ждут Вас в нашем свадебном салоне</p>
            </div>
            <div class="pb-4">
                <h5><a href="#about-us" class="text-dark rw-medium">Вечерние платья<span class="d-none pl-4"><img src="/images/Arrow 3.png"></span></a></h5>
                <p class="rw-light">Новые поступления ждут Вас в нашем свадебном салоне</p>
            </div>
            <div class="pb-4">
                <h5><a href="#clients" class="text-dark rw-medium">Мужские костюмы<span class="d-none pl-4"><img src="/images/Arrow 3.png"></span></a></h5>
                <p class="rw-light">Новые поступления ждут Вас в нашем свадебном салоне</p>
            </div>
            <div class="pb-4">
                <h5><a href="#contacts" class="text-dark rw-medium">Салон красоты<span class="d-none pl-4"><img src="/images/Arrow 3.png"></span></a></h5>
                <p class="rw-light">Новые поступления ждут Вас в нашем свадебном салоне</p>
            </div>
        </div>
        <div class="moore-btn position-relative d-none d-lg-block" style="pointer-events:visiblePainted;">
            <a href="#about-us" class="btn btn-gold rounded-0 border-0 mt-5 px-4 py-2 rw-medium">Подробнее</a>
        </div>
    </div>
    <img class="float-right rectangle position-absolute d-none d-lg-block" style="width: 24%; top: 24vh;left:37%; z-index: 1" src="/images/Rectangle 23.png">
        <img class="position-absolute d-none d-lg-block" style="top: 0px;left:5%;z-index: 999; height:100%;" src="{{asset('/images/Line 6.png')}}">
        <img class="position-absolute d-none d-lg-block" style="top: 0px;left:35.3%; z-index: 999; height:100%" src="{{asset('/images/Line 6.png')}}">
        <img class="position-absolute d-none d-lg-block" style="top: 0px;left: 67%; z-index: 9999; height:100%"src="{{asset('/images/Line 6.png')}}">
    </div>
@endsection
