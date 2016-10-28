<div class="navbar">
    <div class="navbar-inner">
        <a class="brand" href="{{ url('/') }}">Сайтсофт</a>
        <ul class="nav">
            <li {{(Route::currentRouteName() == 'index') ? 'class=active' : ''}}><a href="{{ url('/') }}">Главная</a></li>
            @if (!Auth::check())
            <li {{(Route::currentRouteName() == 'login') ? 'class=active' : ''}}><a  href="{{ url('/login') }}">Авторизация</a></li>
            <li {{(Route::currentRouteName() == 'register') ? 'class=active' : ''}}><a href="{{ url('/register') }}">Регистрация</a></li>
            @endif
        </ul>

@if (Auth::check())
      @include('subviews.userbar')
@endif
    </div>
</div>