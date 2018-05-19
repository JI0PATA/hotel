{{ config(['app.name' => 'Главная страница']) }}

@extends('layouts.app')

@push('styles')
    <style>
        #header {
            background-image: url("{{ asset('/img/bg.jpg') }}");
        }
    </style>
@endpush

<?php
$header__center = "Сервис по подбору отелей<br>«HotelSearch»";
?>

@section('content')
    <section class="hotels__items">
        <div class="hotels__item" style="background-image: url('{{ asset('img/hotels/hotel1.jpg') }}')">
            <div class="hotels__info">
                <div class="hotels__name">Отель №1</div>
                <div class="hotels__stars">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <img src="{{ asset('img/star.png') }}" alt="">
                </div>
            </div>
            <a href="{{ route('hotel.view', ['id' => 1]) }}" class="hotels__read">Посмотреть</a>
        </div>
        <div class="hotels__item" style="background-image: url('{{ asset('img/hotels/hotel2.jpg') }}')">
            <div class="hotels__info">
                <div class="hotels__name">Отель №1</div>
                <div class="hotels__stars">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <img src="{{ asset('img/star.png') }}" alt="">
                </div>
            </div>
            <a href="" class="hotels__read">Посмотреть</a>
        </div>
        <div class="hotels__item" style="background-image: url('{{ asset('img/hotels/hotel1.jpg') }}')">
            <div class="hotels__info">
                <div class="hotels__name">Отель №1</div>
                <div class="hotels__stars">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <img src="{{ asset('img/star.png') }}" alt="">
                </div>
            </div>
            <a href="" class="hotels__read">Посмотреть</a>
        </div>
        <div class="hotels__item" style="background-image: url('{{ asset('img/hotels/hotel2.jpg') }}')">
            <div class="hotels__info">
                <div class="hotels__name">Отель №1</div>
                <div class="hotels__stars">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <img src="{{ asset('img/star.png') }}" alt="">
                </div>
            </div>
            <a href="" class="hotels__read">Посмотреть</a>
        </div>
        <div class="hotels__item" style="background-image: url('{{ asset('img/hotels/hotel1.jpg') }}')">
            <div class="hotels__info">
                <div class="hotels__name">Отель №1</div>
                <div class="hotels__stars">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <img src="{{ asset('img/star.png') }}" alt="">
                </div>
            </div>
            <a href="" class="hotels__read">Посмотреть</a>
        </div>
        <div class="hotels__item" style="background-image: url('{{ asset('img/hotels/hotel2.jpg') }}')">
            <div class="hotels__info">
                <div class="hotels__name">Отель №1</div>
                <div class="hotels__stars">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <img src="{{ asset('img/star.png') }}" alt="">
                </div>
            </div>
            <a href="" class="hotels__read">Посмотреть</a>
        </div>
        <div class="hotels__item" style="background-image: url('{{ asset('img/hotels/hotel1.jpg') }}')">
            <div class="hotels__info">
                <div class="hotels__name">Отель №1</div>
                <div class="hotels__stars">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <img src="{{ asset('img/star.png') }}" alt="">
                </div>
            </div>
            <a href="" class="hotels__read">Посмотреть</a>
        </div>
        <div class="hotels__item" style="background-image: url('{{ asset('img/hotels/hotel2.jpg') }}')">
            <div class="hotels__info">
                <div class="hotels__name">Отель №1</div>
                <div class="hotels__stars">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <img src="{{ asset('img/star.png') }}" alt="">
                </div>
            </div>
            <a href="" class="hotels__read">Посмотреть</a>
        </div>
        <div class="hotels__item" style="background-image: url('{{ asset('img/hotels/hotel1.jpg') }}')">
            <div class="hotels__info">
                <div class="hotels__name">Отель №1</div>
                <div class="hotels__stars">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <img src="{{ asset('img/star.png') }}" alt="">
                </div>
            </div>
            <a href="" class="hotels__read">Посмотреть</a>
        </div>
        <div class="hotels__item" style="background-image: url('{{ asset('img/hotels/hotel2.jpg') }}')">
            <div class="hotels__info">
                <div class="hotels__name">Отель №1</div>
                <div class="hotels__stars">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <img src="{{ asset('img/star.png') }}" alt="">
                </div>
            </div>
            <a href="" class="hotels__read">Посмотреть</a>
        </div>
    </section>
@endsection