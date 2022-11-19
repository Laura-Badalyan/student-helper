@extends('layouts.main')


@push('_title', "Գլխավոր")

@push('_styles')
    <link rel="stylesheet" href="{{asset('css/pages/home/index.css')}}">
@endpush

@section('content')

    @include("pages.home._partials.welcome")
    @include("pages.home._partials.what_i_do")
    @include("pages.home._partials.opinions")
    @include("pages.home._partials.future")
    @include("pages.home._partials.task")
{{--    @include("pages.home._partials.courses")--}}





@endsection
