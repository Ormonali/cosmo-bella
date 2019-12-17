<style type="text/css">
    .burger-menu {
        position: relative;
        width: 30px;
        height: 30px;
        cursor: pointer;
    }
    .burger {
        position: absolute;
        background: rgba(111,111,111,1);
        width: 70%;
        height: 2px;
        top: 50%;
        right: 0px;
        margin-top: -5px;
        opacity: 1;
    }
    .burger::before {
        position: absolute;
        background: rgba(111,111,111,1);
        width: 30px;
        height: 2px;
        top: 10px;
        content: "";
        display: block;
    }
    .burger::after {
        position: absolute;
        background: rgba(111,111,111,1);
        width: 30px;
        height: 2px;
        bottom: 10px;
        content: "";
        display: block;
    }
    .burger::after, .burger::before, .burger {
        transition: all .3s ease-in-out;
        -webkit-transition: all .3s ease-in-out;
    }
    .burger-menu.menu-on .burger::after{
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
        bottom: 0px;
    }
    .burger-menu.menu-on .burger::before{
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        top: 0px;
    }
    .burger-menu.menu-on .burger{
        background: rgba(111,111,111,.0);
    }
    /* useless css */
    .burger-menu {
        margin-left:auto;
        margin-right: auto;
    }
    .big {
        letter-spacing: 0px;
        font-size: 51px;
        display: block;
        text-transform: uppercase;
    }
</style>
<nav class="navbar menuse navbar-expand-lg py-3 w-100 d-lg-block d-none" style="z-index: 999; background: transparent; position: fixed;">
    <div class="container-fluid top-menu">
        <div class="row w-100 mx-5 pb-3">
            <div class="col-lg-5 collapse navbar-collapse pr-0">
                <nav class="mr-md-auto ml-0">
                    <ul class="navbar-nav" id="pick">
                        <li class="nav-item pr-1">
                            <span><img src="/images/location 1.png"></span> г. Бишкек, ул. Орозбекова, 17
                        </li>
                        <li class="nav-item px-3">
                            <span><img src="/images/access-time 1.png"></span> C 9.00 до 20.00 без выходных
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-2 col-8 collapse navbar-collapse p-0"  id="navbarSupportedContent">
                <a href="/">
                    <img class="logo" src="{{ asset('images/logo.png') }}" alt="" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-5 collapse navbar-collapse">
                <nav class="ml-md-auto ml-0">
                    <ul class="navbar-nav" id="pick">
                        <li class="nav-item px-3">
                            <a href="tel:+996 501 433 433" class="text-fut-book text-scale" style="font-size: 14px; line-height: 17px; text-align: center; text-transform: uppercase; color: #444444;"><span><img src="/images/phone 1.png"></span>+996 (550) 510 500</a>
                        </li>

                        <li class="nav-item px-3 position-relative" style="pointer-events:visiblePainted;">
                            <div class="burger-menu">
                                <div class="burger"></div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</nav>
{{--<nav class="navbar bg-white navbar-expand-md  navbar-expand w-100 d-lg-none d-block" style="z-index: 999; background: transparent; position: fixed;">--}}
    {{--<div class="container-fluid top-menu">--}}
        {{--<div class="row w-100 pb-0">--}}
            {{--<div class="col-8 mr-auto">--}}
            {{--<a href="/">--}}
                {{--<img class="logo w-75" src="{{ asset('images/logo.png') }}" alt="" style="width: 90%;">--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col-auto collapse navbar-collapse p-0"  id="navbarSupportedContent">--}}

            {{--</div>--}}
            {{--<nav class="col-auto ml-auto ml-0 mt-3 row" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" style="pointer-events:visiblePainted;" >--}}
                {{--<div class="float-right col-6">Menu</div>--}}
                {{--<div class="burger-menu col-6">--}}
                    {{--<div class="burger" style="width: 50%!important;"></div>--}}
                {{--</div>--}}
            {{--</nav>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}
<nav class="navbar bg-white navbar-expand-lg navbar-light fixed-top d-lg-none d-block">
    <div class="container">
        <div class="row">
            <a class="navbar-brand col-6" href="/">
                <img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="">
            </a>
            <nav class="col-auto mx-auto ml-0 mt-3 row" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" style="pointer-events:visiblePainted;" >
            <div class="float-right col-6">Menu</div>
            <div class="burger-menu col-6">
            <div class="burger" style="width: 50%!important;"></div>
            </div>
            </nav>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto pt-4">
                    <li class="nav-item active font-weight-normal mx-2">
                        <a class="nav-link menu-point" href="#">О нас</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>

