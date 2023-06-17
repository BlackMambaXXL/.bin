@extends('layout.layout')

@section('page_title', 'Home Page')

@section('content')
{{--    Страница каталог--}}
    <link rel="stylesheet" href="">
    <div class="about" id="about">
        <div class="about-content">
            <div class="about__title">
                Каталог
            </div>
        </div>
    </div>
    <div class="catalog">

        <div class="catalog-line stones">
            <div class="catalog-item">
                <img src="{{ asset('images/pictures/slider1.jpg') }}" alt="catalog-item">
                <div class="catalog-item__description">
                    Бриллиант "Изумруд"
                    <p>547 300 ₽</p>
                    <button class="catalog-item__buy-button">Купить</button>
                </div>
            </div>

            <div class="catalog-item">
                <img src="{{ asset('images/pictures/slider2.jpg') }}" alt="catalog-item">
                <div class="catalog-item__description">
                    Бриллиант "Круглый"
                    <p>2 220 200 ₽</p>
                    <button class="catalog-item__buy-button">Купить</button>
                </div>
            </div>

            <div class="catalog-item">
                <img src="{{ asset('images/pictures/slider3.jpg') }}" alt="catalog-item">
                <div class="catalog-item__description">
                    Бриллиант "Сердце"
                    <p>421 800 ₽</p>
                    <button class="catalog-item__buy-button">Купить</button>
                </div>
            </div>

        </div>

        <div class="catalog-line jewelry">
            <div class="catalog-item">
                <img src="{{ asset('images/pictures/jewelry1.jpg') }}" alt="catalog-item">
                <div class="catalog-item__description">
                    Колье из белого золота
                    <p>12 305 700 ₽</p>
                    <button class="catalog-item__buy-button">Купить</button>
                </div>
            </div>

            <div class="catalog-item">
                <img src="{{ asset('images/pictures/slider4.jpg') }}" alt="catalog-item">
                <div class="catalog-item__description">
                    Колье из белого золота
                    <p>115 900 ₽</p>
                    <button class="catalog-item__buy-button">Купить</button>
                </div>
            </div>

            <div class="catalog-item">
                <img src="{{ asset('images/pictures/slider5.jpg') }}" alt="catalog-item">
                <div class="catalog-item__description">
                    Колье из белого золота
                    <p>1 878 000 ₽</p>
                    <button class="catalog-item__buy-button">Купить</button>
                </div>
            </div>

        </div>

        <div class="catalog-line rings">
            <div class="catalog-item">
                <img src="{{ asset('images/pictures/ring1.jpg') }}" alt="catalog-item">
                <div class="catalog-item__description">
                    Кольцо из белого золота
                    <p>402 000 ₽</p>
                    <button class="catalog-item__buy-button">Купить</button>
                </div>
            </div>

            <div class="catalog-item">
                <img src="{{ asset('images/pictures/ring2.jpg') }}" alt="catalog-item">
                <div class="catalog-item__description">
                    Кольцо из белого золота
                    <p>14 896 200 ₽</p>
                    <button class="catalog-item__buy-button">Купить</button>
                </div>
            </div>

            <div class="catalog-item">
                <img src="{{ asset('images/pictures/ring3.jpg') }}" alt="catalog-item">
                <div class="catalog-item__description">
                    Кольцо из белого золота
                    <p>228 900 ₽</p>
                    <button class="catalog-item__buy-button">Купить</button>
                </div>
            </div>

        </div>

    </div>
@endsection
