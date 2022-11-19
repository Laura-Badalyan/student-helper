@extends('layouts.main')


@push('_title', "Կուրսեր")

@push('_styles')
    <link rel="stylesheet" href="{{asset('css/pages/lessons/main.css')}}">
@endpush

@section('content')

    <section class="page_content_adv">

        <div class="left_side">

            <h1 class="global_margin">Scratch</h1>

            <h2 class="block_title">Ինչ կսովորենք դասի ընթացքում</h2>
            <p class="mb-20 main">Scratch <b>(24 Դաս)</b></p>

            <ul class="list">
                <li>Ինպես տեղաշարժել հերոսներին</li>
                <li>Ինպես ստեղծել անիմացիաներ</li>
                <li>Ինպես ստեղծել ինտերակտիվ պատմություններ</li>
                <li>Ինպես ստեղծել խաղեր</li>
            </ul>

            <h2 class="block_title">Ինչ կստեղծենք ծրագրի շրջանակներում</h2>

            <ul class="list">
                <li>Երաժշտություն</li>
                <li>Լաբիրինթ</li>
                <li>Քաղաք</li>
                <li>Ավտոարշավ</li>
                <li>Նկարող վրձին</li>
            </ul>

            <h2 class="block_title">Նկարներ երեխաների աշխատանքներից</h2>

            <div class="global_margin">
                <img src="/img/lessons/scratch/scr1.png" width="270" alt="">
                <img src="/img/lessons/scratch/scr2.png" width="270" alt="">
                <img src="/img/lessons/scratch/scr3.png" width="270" alt="">
                <img src="/img/lessons/scratch/scr4.png" width="270" alt="">
                <img src="/img/lessons/scratch/scr5.png" width="270" alt="">
                <img src="/img/lessons/scratch/scr6.png" width="270" alt="">
            </div>

            <hr class="list">

            <ul class="list">
                <li>Վերջին դասին ներկա են գտնվում նաև մայրերը և դիտում են երեխաների կողմից պատրաստած խաղերը</li>
                <li>Դասընթացի վերջում տալիս եմ պատվոգիր։</li>
            </ul>




        </div>

        @include("globals.adv", ["img" => "/img/adv.png"])


    </section>






@endsection
