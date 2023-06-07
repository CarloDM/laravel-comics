@php
    $main_menu = config('menu.main-menu');
    // @dd($main_menu)
@endphp
<ul>

</ul>

<div class="header debug">
    <div class="container">

    <div class="logo debug">
        {{-- <img src="../assets/vue-dc-comics-1/img/dc-logo.png" alt=""> --}}
    </div>

    <ul class="options debug">
        {{-- <span v-for="(link, index) in links" :key="index" class="debug">{{ link.name }}</span> --}}
        @foreach ($main_menu as $item )
        <li>
            <a class="{{ Route::currentRouteName() === 'about' ? 'active' : ''}}" href="{{ route($item['name'])}}">{{$item['text'] }}we</a>
        </li>
        @endforeach

    </ul>

    </div>

  </div>















{{-- <h1>header {{Route::currentRouteName()}}</h1>
<ul>
    <li>
        <a class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('home')}}">home</a>
    </li>
    <li>
        <a class="{{ Route::currentRouteName() === 'about' ? 'active' : ''}}" href="{{ route('about')}}">about</a>
    </li> --}}
