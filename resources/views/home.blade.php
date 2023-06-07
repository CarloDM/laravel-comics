
@extends('layout.main')


@section('title')
home
@endsection

@section('content')
<div class="main">
    <div class="container">

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
    </div>
</div>

<div class="merch">
    <div class="container">
        @for ($i = 0; $i < 6; $i++)
            <div class="merch_item debug">
            <img src="../assets/vue-dc-comics-1/img/buy-comics-digital-comics.png" alt="">
            <span>DIGITAL COMICS</span>
            </div>
        @endfor

    </div>

  </div>
@endsection
