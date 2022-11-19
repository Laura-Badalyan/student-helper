@extends("layouts.admin")

@push('_styles')
    {{-- <link rel="stylesheet" href="{{asset('css/front/about/index.css')}}"> --}}
@endpush

@push('_js')

@endpush

@section("content")



    <div class="page-header my-10">
        <h1 class="page-title">Թոփ մասնակիցները</h1>

        <div class="btn-group">
            <a href="/dashboard/users/" class="btn btn-sm btn-outline-primary">Ընդհանուր</a>
            <a href="/dashboard/users/month" class="btn btn-sm btn-outline-primary">Ամիս</a>
            <span href="/dashboard/users/count" class="btn btn-sm btn-primary">Քանակ</span>
            <a href="/dashboard/users/percent" class="btn btn-sm btn-outline-primary">%</a>
        </div>
    </div>

    <div>
        @include("globals.users.count_points_big_table", ["showMe" => true, "showTH" => true])
    </div>

@endsection
