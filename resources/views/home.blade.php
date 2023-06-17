@extends('layout.layout')

@section('page_title', 'Home Page')

@section('content')
    <div class="about" id="about">
        <div class="about-content">
            <div class="about__title">
                АЛРОСА -  это большой выбор украшений с драгоценными камнями.
            </div>
        </div>
    </div>
{{--    Слайдер с товарами--}}
    <div class="slider-container">
        <p class="slider__title">Галерея</p>
        <div class="slider">
            <div class="slider-line">
                <div class="slide-block">
                    <div class="slide-block__description">
                        Бриллиант "Изумруд"
                    </div>
                    <img src="{{ asset('images/pictures/slider1.jpg') }}" alt="somethings wrong..">
                </div>
                <div class="slide-block">
                    <div class="slide-block__description">
                        Бриллиант "Круглый"
                    </div>
                    <img src="{{ asset('images/pictures/slider2.jpg') }}" alt="somethings wrong..">
                </div>
                <div class="slide-block">
                    <div class="slide-block__description">
                        Бриллиант "Cердце"
                    </div>
                    <img src="{{ asset('images/pictures/slider3.jpg') }}" alt="somethings wrong..">
                </div>
                <div class="slide-block">
                    <div class="slide-block__description">
                        Колье из белого золота
                    </div>
                    <img src="{{ asset('images/pictures/slider4.jpg') }}" alt="somethings wrong..">
                </div>
                <div class="slide-block">
                    <div class="slide-block__description">
                        Колье из белого золота
                    </div>
                    <img src="{{ asset('images/pictures/slider5.jpg') }}" alt="somethings wrong..">
                </div>
            </div>
        </div>
        <div class="slider-buttons">
            <div class="button slider-button__prev">
                <p>Назад</p>
            </div>
            <div class="button slider-button__next">
                <p>Далее</p>
            </div>
        </div>
    </div>
@endsection
