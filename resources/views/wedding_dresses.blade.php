@extends('layouts.app')

@section('content')
    <style>
        body
        {
            overflow-x: hidden;
        }
    </style>
<div class="container-fluid content" style="margin-bottom: 500px;">
    <div class="container position-relative">
        <img class="position-absolute" style="width:640px; left:-20%;" src="{{ asset('images/Rectangle2.png') }}" alt="">
        <div class="row" style="padding-top:15%;">
            <div class="col-lg-4 col-12 position-relative pt-lg-0 pt-5 mt-lg-0 mt-5">
                <img class="position-absolute" style="top:5%; left:10%; width:90%;" src="{{ asset('images/gold.png') }}" alt="">
                <img class="img-fluid" src="{{ asset('images/dresses_main.png') }}" alt="">
            </div>
            <div class="col-lg-8 col-12 pl-lg-5 pl-0 mt-lg-0 mt-5">
                <img class="img-fluid d-lg-inline d-none" src="{{ asset('images/line18.png') }}" alt=""><span class="dress-sand rw-light ml-lg-4 ml-0">Добро пожаловать в свадебный салон</span>
                <h1 class="dress-title cg-bold pt-lg-0 pt-4">Свадебные <span class="dress-title-gold">платья</span></h1>
                <p class="dress-desc rw-medium pr-5 pt-lg-0 pt-4">
                    Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв
                </p>
                <button class="second-button mt-4">
                    Перейти в каталог
                </button>
            </div>
        </div>

        <div class="row mt-5" style="transform: translateY(-150px)">
            <div class="col-lg-4 col-12 py-5 pl-lg-5 pl-2 pr-2" style="margin-top:200px;">
                <div class="dress-adv-block position-relative">
                    <div class="dress-adv-shadow"></div>
                <img class="img-fluid" src="{{ asset('images/line8.png') }}" alt=""><span class="dress-adv-num cg-bold ml-3">01</span>
                    <h3 class="dress-adv-title cg-bold">
                        Идеальная невеста
                    </h3>
                    <p class="dress-desc rw-medium">
                        Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-12 py-5 pl-lg-5 pl-2 pr-2 dress-adv" style="margin-top:100px;">
                <div class="dress-adv-block position-relative">
                    <div class="dress-adv-shadow"></div>
                    <img class="img-fluid" src="{{ asset('images/line8.png') }}" alt=""><span class="dress-adv-num cg-bold ml-3">02</span>
                    <h3 class="dress-adv-title cg-bold">
                        Совершенный образ
                    </h3>
                    <p class="dress-desc rw-medium">
                        Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-12 py-5 pl-lg-5 pl-2 pr-2 dress-adv">
                <div class="dress-adv-block position-relative">
                    <div class="dress-adv-shadow"></div>
                    <img class="img-fluid" src="{{ asset('images/line8.png') }}" alt=""><span class="dress-adv-num cg-bold ml-3">03</span>
                    <h3 class="dress-adv-title cg-bold">
                        Безупречная пара
                    </h3>
                    <p class="dress-desc rw-medium">
                        Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв
                    </p>
                </div>
            </div>
        </div>

        <div class="row position-relative">
            <img class="img-fluid position-absolute w-75" style="top:-20%; right:0%;" src="{{ asset('images/second_cosmo.png') }}" alt="">
            <div class="col-lg-6 col-12">
                <h2 class="dress-second-title cg-bold">
                    Красота
                    сейчас в
                    <span class="dress-second-title-gold">
                        моде
                    </span>
                </h2>

                <div class="some-about p-lg-5 p-0 mt-5 position-relative" style="background-image: url({{ asset('images/Rectangle33.png') }}); background-size: 100% 100%;">
                    <p class="dress-desc-title cg-bold pt-4">
                        Немного о нас
                    </p>
                    <p class="dress-desc rw-medium pb-4">
                        Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-12 text-right position-relative">
                <img class="position-absolute" style="top:5%; width:85%; z-index: -1;" src="{{asset('images/Rectangle34.png')}}" alt="">
                <img class="img-fluid w-75" src="{{ asset('images/dresses_second.png') }}" alt="">
                <img class="w-50 position-absolute" style="top:34%; left:8%;" src="{{ asset('images/second_c.png') }}" alt="">
            </div>
        </div>
        <div class="row mt-5 pt-5 mb-5" style="background-image: url({{ asset('images/Vector8.png') }}); background-size: 100%; background-repeat: no-repeat">
            <div class="col-lg-6 col-12 px-lg-5 px-0">
                <div class="position-relative px-2">
                    <img class="position-absolute d-lg-block d-none" style="top: 40%; left:-20%;" src="{{ asset('images/point1.png') }}" alt="">
                <p class="dress-desc-title cg-bold pt-4">
                    <span style="text-decoration: underline;">Сервис</span> на первом месте
                </p>
                <p class="dress-desc">
                    Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.
                </p>
                </div>
                <div class="dress-subs mr-2 ml-4 position-relative align-items-center p-5 d-lg-flex d-none" style="margin-top: 15%; background-image: url({{ asset('images/subs_block.png') }}); background-size: 100% 100%">
                    <img class="position-absolute" style="top:-10%; left:-10%; height:580px; width:100%; z-index: -1;" src="{{asset('images/Rectangle29.png')}}" alt="">
                    <div class="w-100">
                    <p class="dress-subs-title cg-bold">
                        Запишитесь на примерку
                    </p>

                    <button class="third-button mt-4" data-toggle="modal" data-target="#ReserveModal">
                        Записаться на примерку
                    </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 px-lg-5 px-0 position-relative" style="margin-top: 10%">
                <div class="position-relative px-2">
                    <img class="position-absolute d-lg-block d-none" style="top: 40%; left:-15%;" src="{{ asset('images/point2.png') }}" alt="">
                    <p class="dress-desc-title cg-bold pt-4">
                    Покупка или <span style="text-decoration: underline;">продажа?</span>
                </p>
                <p class="dress-desc">
                    Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.
                </p>
                </div>
                <div class="dress-subs mr-2 ml-lg-4 ml-2 position-relative align-items-center p-5 d-lg-none d-block" style="margin-top: 15%; background-image: url({{ asset('images/subs_block.png') }}); background-size: 100% 100%">
                    <img class="position-absolute d-none" style="top:-10%; left:-10%; height:580px; width:100%;" src="{{asset('images/Rectangle29.png')}}" alt="">
                    <div class="w-100">
                        <p class="dress-subs-title cg-bold">
                            Запишитесь на примерку
                        </p>

                        <button class="third-button mt-4" data-toggle="modal" data-target="#ReserveModal"   >
                            Записаться на примерку
                        </button>
                    </div>
                </div>
                <img class="w-50 b" style="position:absolute ; bottom:-10%; left:10%;" src="{{ asset('images/second_b.png') }}" alt="">
            </div>

        </div>
        <div class="row justify-content-center" style="margin-top:17%;">
            <div class="col-lg-6 col-12">
                <h2 class="dress-sill-title cg-bold text-center">
                    Мы поможем выбрать наилучшее платье для <span class="dress-second-title-gold"> Вас</span>
                </h2>
                <p class="dress-sill-postitle text-center">
                    Какое платье Вы хотите?
                </p>
            </div>
            <div class="col-12 pb-5"></div>
            <div class="silhouette-collona position-relative text-center">
                <img class="position-absolute line-left" style="left:0%; top:0%; max-height: 250px;" src="{{asset('images/Vector38.png')}}" alt="">
                @include('svg.svg1')
                <img class="position-absolute line-right" style="left:0%; top:0%; width:100%; height:100%;" src="{{asset('images/Vector35.png')}}" alt="">
                <img class="position-absolute line-center" style="right:0%; top:0%; max-height: 250px;" src="{{asset('images/Vector39.png')}}" alt="">
                <div class="pt-4 text-center">
                        <div class="silhouette-pointer mx-auto"></div>
                    <p class="silhouette-name rw-medium pt-4">
                        Прямое
                    </p>
                </div>
            </div>
            <div class="silhouette-collona position-relative text-center">
                <img class="position-absolute line-left" style="left:0%; top:0%; max-height: 250px;" src="{{asset('images/Vector38.png')}}" alt="">
                @include('svg.svg2')
                <img class="position-absolute line-right" style="left:0%; top:0%; width:100%; height:100%;" src="{{asset('images/Vector35.png')}}" alt="">
                <img class="position-absolute line-center" style="right:0%; top:0%; max-height: 250px;" src="{{asset('images/Vector39.png')}}" alt="">
                <div class="pt-4 text-center">
                    <div class="silhouette-pointer mx-auto"></div>
                    <p class="silhouette-name rw-medium pt-4">
                        Пышное
                    </p>
                </div>
            </div>
            <div class="silhouette-collona position-relative text-center">
                <img class="position-absolute line-left" style="left:0%; top:0%; max-height: 250px;" src="{{asset('images/Vector38.png')}}" alt="">
                @include('svg.svg3')
                <img class="position-absolute line-right" style="left:0%; top:0%; width:100%; height:100%;" src="{{asset('images/Vector35.png')}}" alt="">
                <img class="position-absolute line-center" style="right:0%; top:0%; max-height: 250px;" src="{{asset('images/Vector39.png')}}" alt="">
                <div class="pt-4 text-center">
                    <div class="silhouette-pointer mx-auto"></div>
                    <p class="silhouette-name rw-medium pt-4">
                        Русалка
                    </p>
                </div>
            </div>
            <div class="silhouette-collona position-relative text-center">
                <img class="position-absolute line-left" style="left:0%; top:0%; max-height: 250px;" src="{{asset('images/Vector38.png')}}" alt="">
                @include('svg.svg4')
                <img class="position-absolute line-right" style="left:0%; top:0%; width:100%; height:100%;" src="{{asset('images/Vector35.png')}}" alt="">
                <img class="position-absolute line-center" style="right:0%; top:0%; max-height: 250px;" src="{{asset('images/Vector39.png')}}" alt="">
                <div class="pt-4 text-center">
                    <div class="silhouette-pointer mx-auto"></div>
                    <p class="silhouette-name rw-medium pt-4">
                        Ампир
                    </p>
                </div>
            </div>
            <div class="silhouette-collona position-relative text-center">
                <img class="position-absolute line-left" style="left:0%; top:0%; max-height: 250px;" src="{{asset('images/Vector38.png')}}" alt="">
                @include('svg.svg5')
                <img class="position-absolute line-right" style="left:0%; top:0%; width:100%; height:100%;" src="{{asset('images/Vector35.png')}}" alt="">
                <img class="position-absolute line-center" style="right:0%; top:0%; max-height: 250px;" src="{{asset('images/Vector39.png')}}" alt="">
                <div class="pt-4 text-center">
                    <div class="silhouette-pointer mx-auto"></div>
                    <p class="silhouette-name rw-medium pt-4">
                        А-силуэт
                    </p>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top:15%;">
            <div class="col-lg-4 col-12 position-relative">
                <img class="position-absolute" style="top:-5%; left:10%; width:80%;" src="{{ asset('images/gold2.png') }}" alt="">
                <img class="img-fluid" src="{{ asset('images/dresses_last.png') }}" alt="">
            </div>
            <div class="col-lg-8 col-12 pl-lg-5 pl-0 mt-lg-0 mt-5">
                <img class="img-fluid d-lg-inline d-none" src="{{ asset('images/line18.png') }}" alt=""><span class="dress-sand rw-light ml-lg-4 ml-0">Платья на любой вкус всегда в наличии</span>
                <p class="dresses_last_title cg-bold mt-lg-0 mt-4">Широкий ассортимент платьев</p>
                <p class="dress-desc rw-medium pr-5">
                    Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв
                </p>
                <button class="second-button mt-4">
                    Перейти в каталог
                </button>
            </div>
        </div>

        <div class="row justify-content-center" style="margin-top: 8%;">
            <div class="col-lg-3 col-12 text-center mt-lg-0 mt-5">
                <img class="w-75" src="{{ asset('images/partner1.png') }}" alt="">
            </div>
            <div class="col-lg-3 col-12 text-center mt-lg-0 mt-5">
                <img class="w-75" src="{{ asset('images/partner2.png') }}" alt="">
            </div>
            <div class="col-lg-3 col-12 text-center mt-lg-0 mt-5">
                <img class="w-75" src="{{ asset('images/partner3.png') }}" alt="">
            </div>
            <div class="col-lg-3 col-12 text-center mt-lg-0 mt-5">
                <img class="w-75" src="{{ asset('images/partner4.png') }}" alt="">
            </div>
        </div>


        <div class="row position-relative" style="margin-top: 10%;">
            <img class="position-absolute sarah d-lg-block d-none"  src="{{'images/sarah.png'}}" alt="">
            <div class="col-lg-6 col-12" style="padding-top:25%;">
                <h2 class="sarah-title cg-bold">
                    Чувства и эмоции невест
                </h2>
                <p class="sarah-desc cg-medium pt-5">
                    Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.
                </p>
                <p class="pt-4 sarah-desc cg-medium text-white font-weight-bold">
                    Анара Абдукалилова
                </p>
            </div>
        </div>


    </div>
</div>

@endsection