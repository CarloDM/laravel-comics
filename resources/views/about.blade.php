
@extends('layout.main')

@section('title')
    about
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col text-center">
            @forelse ($cards as $card )

            <div class="card">
                <h1 class="card-title">{{$card['series']}}</h1>
                <div class="card-body">
                </div>
            </div>

            @empty

            @endforelse


        </div>
    </div>
</div>
@endsection


