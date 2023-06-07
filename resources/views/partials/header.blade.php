<h1>header {{Route::currentRouteName()}}</h1>
<ul>
    <li>
        <a class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('home')}}">home</a>
    </li>
    <li>
        <a class="{{ Route::currentRouteName() === 'about' ? 'active' : ''}}" href="{{ route('about')}}">about</a>
    </li>
</ul>
