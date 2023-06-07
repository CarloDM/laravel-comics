
@extends('layout.main')

@section('title')
    about
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col text-center">

            <div class="card">
                <div class="card-body">
                    <img src="{{ Vite::asset('resources/img/laravel.png') }}" alt="">

                    <img src="img/laravel.png" alt="">

                    <h1 class="card-title">about</h1>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection


