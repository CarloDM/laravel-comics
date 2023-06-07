@extends('layout.main')


@section('title')
merchandise
@endsection

@section('merchandise')
<div class="merch">
    <div class="container">

      <div v-for="item in 5" :key="item"
      class="merch_item debug">
        <img src="../assets/vue-dc-comics-1/img/buy-comics-digital-comics.png" alt="">
        <span>DIGITAL COMICS</span>
      </div>

    </div>

  </div>
  @endsection
