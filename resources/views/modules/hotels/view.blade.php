{{ config(['app.name' => $hotel->name]) }}

@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/hotel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media/tablet/hotel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media/mobile/hotel.css') }}">

    <link rel="stylesheet" href="{{ asset('components/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('components/slick/slick-theme.css') }}">

    <style>
        #header {
            background-image: url("{{ asset('img/hotels/'.$hotel->img) }}");
        }
    </style>
@endpush

@push('scripts')
    <script src="{{ asset('components/slick/slick.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                dots: true,
                centerMode: true,
                focusOnSelect: true,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 3,
                        }
                    },
                ]
            });
        });
    </script>
@endpush

<?php
$stars = '';

for ($i = 1; $i < $hotel->star_count; $i++)
    $stars .= '<img src="' . asset('img/star.png') . '" alt="">';

$min_price = $hotel->price->min('price');

$header__center = '
<div class="header__title">' . $hotel->name . '</div>
<div class="header__stars">
' . $stars . '
</div>
<div class="header__hotel_info">
<div class="header__hotel_info-address">
' . $hotel->city . ', ' . $hotel->address . '
</div>
<div class="header__hotel_info-price">
Цена от: ' . $min_price . ' руб.
</div>
</div>
';

?>

@section('content')
    <section class="hotel__description wp">
        <h2 class="text-center">Забронировать {{ $hotel->name }}</h2>
        <div class="hotel__description-text">
            {{ $hotel->description }}
        </div>
    </section>

    <section class="photo_gallery">
        <div class="slider-for container">
            @foreach($hotel->photos as $photo)
                <div class="slider__item">
                    <img src="{{ asset('img/hotels/gallery/'.$photo->img) }}" alt="">
                </div>
            @endforeach
        </div>
        <div class="slider-nav container">
            @foreach($hotel->photos as $photo)
                <div class="slider__item">
                    <img src="{{ asset('img/hotels/gallery/'.$photo->img) }}" alt="">
                </div>
            @endforeach
        </div>
    </section>

    <section class="rooms__price wp">
        <h2 class="text-center">Типы номеров</h2>
        <div class="price__items">
            @foreach($hotel->price as $price)
                <div class="item_parent">
                    <div class="button button__price">
                        <div class="price__title">{{ $price->room->name }}</div>
                        <div class="price__price">{{ $price->price }} руб.</div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="hotel__services wp">
        <h2 class="text-center">Услуги отеля</h2>
        <div class="hotel__services_items">
            @foreach($hotel->services as $service)
            <div class="item_parent">
                <div class="button hotel__service_item">
                    {{ $service->name }}
                </div>
            </div>
                @endforeach
        </div>
    </section>
@endsection