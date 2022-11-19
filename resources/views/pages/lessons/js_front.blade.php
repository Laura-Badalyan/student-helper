@extends('layouts.main')


@push('_title', "Կուրսեր")

@push('_styles')
    <link rel="stylesheet" href="{{asset('css/pages/lessons/main.css')}}">
@endpush

@section('content')

    <section class="page_content_adv">

        <div class="left_side">

            <h1 class="global_margin">JavaScript Դասընթաց</h1>

            <h2 class="block_title">Ծանոթացում</h2>

            <p class="mb-20">JavaScript-ը աշխարհի ամենատարածված ծրագրավորման լեզուն է: Ես ձեզ կսովորեցնեմ basic-ից մինչև advanced</p>

            <p class="global_margin">Սկիզբը դժվար է, ուստի ես առաջարկում եմ կապնվել ինձ հետ։ Ես կնշանակեմ օր, կհանդիպենք, կպատասխանեմ Ձեր բոլոր հուզող հարցերին</p>

            <h2 class="block_title">Ինչ կսովորենք դասի ընթացքում</h2>
            <p class="mb-20 main">HTML, CSS, Bootstrap <b>(12 Դաս)</b></p>

            <ul class="list">
                <li>Ինչ է HTML-ը</li>
                <li>Տեգեր և ատրիբուտներ</li>
                <li>Ցանկեր և Աղյուսակներ</li>
                <li>Input դաշտեր</li>
                <li>Ինչ է CSS-ը</li>
                <li>color, background</li>
                <li>տառաչափ, տառատեսակ</li>
                <li>CSS-ի ժառանգություն, հատկությունների խմբագրում</li>
                <li>inline &amp; block</li>
                <li>flex box</li>
                <li>անիմացիա, CSS մեդիա</li>
                <li>Bootstrap-ի maximal ծանոթացում</li>
            </ul>

            <p class="mb-20 main">Javascript, Oop <b>(24 Դաս)</b></p>

            <ul class="list">
                <li>Ի՞նչ է բլոկ սխեման, ալգորիթմներ, փոփոխականներ, պայմաններ, օպերատորներ</li>
                <li>Ին՞չ է JavaScript - ը, փոփոխականներ, տվյալների տիպեր</li>
                <li>Օպերատորներ, ցիկլեր</li>
                <li>Ֆունկցիաներ, Ռեկուրսիվ ֆունկցիաներ</li>
                <li>Զանգվածներ, զանգվածների հետ աշխատող մեթոդներ</li>
                <li>Ին՞չ է ֆունկցիան, ֆունկցիաների օրինակեր</li>
                <li>Class-ներ, Object-ներ</li>
                <li>Static & Not Static Methods</li>
                <li>LocalStorage, SessionStorage</li>
            </ul>

            <p class="mb-20 main">jQuery <b>(4 Դաս)</b></p>

            <ul class="list">
                <li>Ինչպե՞ս պատրաստել հաշվիչ</li>
                <li>Ինչպե՞ս պատրաստել ավտոմատ ստուգող թեստ</li>
            </ul>

            <p class="mb-20 main">Խնդիրներ <b>(5 Դաս)</b></p>

            <ul class="list">
                <li>Խնդիրները իրենց մի քանի եղանակներով</li>
            </ul>

            <p class="mb-20 main">Interview <b>(3 Դաս)</b></p>

            <ul class="list">
                <li>Պատրաստվում ենք հարցազրույցի</li>
            </ul>

            <hr class="list">

            <ul class="list">
                <li>Դասընթացի վերջում տալիս եմ հավաստագիր։</li>
            </ul>




        </div>

        @include("globals.adv", ["img" => "/img/adv.png"])


    </section>

    <div class="page_content">
        <h2 class="block_title">Գնացուցակ</h2>

        <div class="prices part-3">

            <div>
                <div class="prices_header">
                    <div class="prices_name">Անհատական</div>
                    <div class="prices_price">8o.ooo Դ / ամիս</div>
                </div>
                <div class="prices_info">
                    <div>Քանակ</div>
                    <div>12 դաս</div>
                </div>
                <div class="prices_info">
                    <div>Տևողություն</div>
                    <div>1.5 - 2 ժամ</div>
                </div>
                <div class="prices_info">
                    <div>Շաբաթական</div>
                    <div>3 դաս</div>
                </div>
            </div>

            <div>
                <div class="prices_header">
                    <div class="prices_name">Խմբակային / 2 հոգի</div>
                    <div class="prices_price">6o.ooo Դ / ամիս</div>
                </div>
                <div class="prices_info">
                    <div>Քանակ</div>
                    <div>12 դաս</div>
                </div>
                <div class="prices_info">
                    <div>Տևողություն</div>
                    <div>1.5 - 2 ժամ</div>
                </div>
                <div class="prices_info">
                    <div>Շաբաթական</div>
                    <div>3 դաս</div>
                </div>
            </div>

            <div>
                <div class="prices_header">
                    <div class="prices_name">Խմբակային / 3 հոգի</div>
                    <div class="prices_price">5o.ooo Դ / ամիս</div>
                </div>
                <div class="prices_info">
                    <div>Քանակ</div>
                    <div>12 դաս</div>
                </div>
                <div class="prices_info">
                    <div>Տևողություն</div>
                    <div>1.5 - 2 ժամ</div>
                </div>
                <div class="prices_info">
                    <div>Շաբաթական</div>
                    <div>3 դաս</div>
                </div>
            </div>


        </div>
    </div>



@endsection
