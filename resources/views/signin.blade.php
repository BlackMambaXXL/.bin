@extends('layout.layout')

@section('page_title', 'SignIn Page')

@section('content')
{{--    Страница авторизации--}}

    <div class="auth">
        <div class="auth__content">

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="error__message">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <form action="{{ route('auth.signin') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label class="auth__titles" for="username">Логин</label>
                <input type="text" name="username" id="username" placeholder="Введите логин..">
                <label class="auth__titles" for="password">Пароль</label>
                <input type="password" name="password" id="password" placeholder="Введите пароль..">
                <div class="auth__button">
                    <button type="submit">Войти</button>
                </div>
                <p>У вас нет аккаунта? - <a href="{{ route('signup') }}">Зарегистрируйтесь!</a></p>

            </form>
        </div>
    </div>

@endsection
