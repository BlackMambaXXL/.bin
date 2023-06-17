@extends('layout.layout')

@section('page_title', 'SignUp Page')

@section('content')

    <div class="auth">
        <div class="auth__content">

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="error__message">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <form action="{{ route('auth.signup') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label class="auth__titles" for="login">Логин</label>
                <input type="text" name="username"  id="username" placeholder="Введите логин..">

                <label class="auth__titles" for="email">Почта</label>
                <input type="email" name="email" id="email" placeholder="Введите e-mail..">

                <label class="auth__titles" for="name">Имя</label>
                <input type="text" name="name" id="name" placeholder="Введите имя..">

                <label class="auth__titles" for="surname">Фамилия</label>
                <input type="text" name="surname" id="surname" placeholder="Введите фамилию..">

                <label class="auth__titles" for="patronymic">Отчество (необязательно)</label>
                <input type="text" name="patronymic" id="patronymic" placeholder="Введите отчество..">

                <label class="auth__titles" for="surname">Пароль</label>
                <input type="password" name="password" id="password" placeholder="Введите пароль..">

                <label class="auth__titles" for="">Подтверждение пароля</label>
                <input type="password" name="re_password" id="password"placeholder="Повторите пароль..">

                <label class="auth__titles" for="">Соглашение с правилами регистрации</label>
                <input type="checkbox" name="checkbox" id="checkbox">

                <div class="auth__button">
                    <button type="submit">Зарегистрироваться</button>
                </div>
                <p>У вас есть аккаунт? - <a href="{{ route('signin') }}">Войдите!</a></p>
            </form>
        </div>
    </div>

@endsection
