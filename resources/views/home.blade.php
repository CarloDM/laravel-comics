
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
                    <img src="{{ Vite::asset('resources/img/laravel.png') }}" alt="">

                    <img src="img/laravel.png" alt="">

                    <h1 class="card-title">Home</h1>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection