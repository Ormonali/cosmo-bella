@extends('layouts.app')
@section('content')
    <div class="row" style="transform: translateY(200px);">
        <div class="col-1"></div>
        <div class="owl-carousel owl-theme carousel_3 col-11">
            <div class="item" style="width: 600px;"><h1>Свадебные платья</h1></div>
            <div class="item" style="width: 600px;"><h1>Вечерние платья</h1></div>
            <div class="item" style="width: 600px;"><h1>Мужские костюмы</h1></div>
        </div>
    </div>
    <div class="row">
    <div class="col-1"></div>
        <div class="owl-carousel owl-theme carousel_2 col-3 d-flex align-items-center">
            <div class="item">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв</div>
            <div class="item">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.A также реальное распределение букв</div>
            <div class="item">Давно выяснено, что при оценке дизайна и композиции читаемый текст </div>
        </div>
        <div class="owl-carousel owl-theme carousel_1 col-3" style="width:30%;">
            <div class="item"><img  src="/images/Group 90.png"></div>
            <div class="item"><img  src="/images/Group 91.png"></div>
            <div class="item"><img  src="/images/Group 90.png"></div>
        </div>
        <img class="float-right rectangle position-absolute" style="width: 24%; top: 80px;left:36%; z-index: 1" src="/images/Rectangle 23.png">
    </div>
    <button class="customNextBtn"> < </button>
    <button class="customPrevBtn"> > </button>
@endsection
