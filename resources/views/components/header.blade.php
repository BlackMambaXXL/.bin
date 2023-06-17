@php use Illuminate\Support\Facades\Auth; @endphp
{{--Шапка сайта--}}
<header>
    <div class="header-content">
        <div class="header__nav">
            <a href="{{ route('home') }}">О нас</a>
            <a href="{{ route('catalog') }}">Каталог</a>
            <a href="{{ route('contacts') }}">Где нас найти?</a>

        </div>
        <div class="header__logo">
            <a href="{{ route('home') }}"><img src="{{ asset('images/logo/Logo.png') }}" alt="header_logo"></a>
        </div>
        <div class="header__auth-reg">
            @guest
                <a href="{{ route('signin') }}">Авторизация</a>
                <span>|</span>
                <a href="{{ route('signup') }}">Регистрация</a>
            @endguest

            @auth
                <a href="#">{{ Auth::user()->name }}</a>
                    <span>|</span>
                <a href="{{ route('auth.logout') }}">Выход</a>
            @endauth
        </div>
    </div>
</header>
