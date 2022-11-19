@extends('layouts.main')


@push('_title', "Կուրսեր")

@push('_styles')
    <link rel="stylesheet" href="{{asset('css/pages/contact/create.css')}}">
@endpush

@section('content')

    <section class="page_content_adv">

        <div class="left_side">

            @include("errors.form")

            <h1 class="block_title fz4 global_margin">Հետադարձ Կապ</h1>
{{--            <div class="flex contact_info global_margin">--}}
{{--                <div>--}}
{{--                    @include("icons.mobile",["class" => "grey fz5 mb-5"])--}}
{{--                    <h3 class="mb-5">Զանգեք ինձ</h3>--}}
{{--                    <p>099 143 600</p>--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    @include("icons.email",["class" => "grey fz5 mb-5"])--}}
{{--                    <h3 class="mb-5">Գրեք ինձ</h3>--}}
{{--                    <p>martin.elizbaryan@gmail.com</p>--}}
{{--                </div>--}}
{{--            </div>--}}

            <form method="POST">
                @csrf
                <div class="flex-inputs">

                    <div class="input_block">
                        <label>@error("name") <span class="red">Անունը պարտադիր է</span> @else Անուն @enderror </label>
                        <input type="text" name="name" value="{{old("name")}}">

                    </div>

                    <div class="input_block">
                        <label>@error("surname") <span class="red">Ազգանունը պարտադիր է</span> @else Ազգանուն @enderror </label>
                        <input type="text" name="surname" value="{{old("surname")}}">
                    </div>

                    <div class="input_block">
                        <label>@error("email") <span class="red">Էլ․ հասցեն վավեր չէ</span> @else Էլ․ հասցե @enderror </label>
                        <input type="text" name="email" value="{{old("email")}}">
                    </div>

                    <div class="input_block">
                        <label>Հեռախոսահամար</label>
                        <input type="text" name="phone" value="{{old("phone")}}">
                    </div>

                    <div class="txt_block">
                        <label>@error("subject") <span class="red">Թեման պարտադիր է</span> @else Թեմա @enderror </label>
                        <textarea name="subject" id="" cols="30" rows="10">{{old("subject")}}</textarea>
                    </div>

                    <input type="submit" class="button button_main" value="Ուղարկել">

                </div>
            </form>
        </div>

        @include("globals.adv", ["img" => "/img/adv.png"])
    </section>





@endsection