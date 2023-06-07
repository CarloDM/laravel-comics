
@extends('layout.main')

@section('content')

@section('title')
    home
@endsection

<div class="container">
    <div class="row">
        <div class="col text-center">

            <div class="card">
                <div class="card-body">
                    {{-- <img src="{{ Vite::asset('resources/img/laravel.png') }}" alt=""> --}}

                    <img src="img/laravel.png" alt="" style="width: 10px">

                    <h1 class="card-title">{{Route::currentRouteName()}}</h1>

                    <a href="{{route('about')}}">about</a>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
