{{ config(['app.name' => 'Название отеля']) }}

@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/hotel.css') }}">

    <link rel="stylesheet" href="{{ asset('components/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('components/slick/slick-theme.css') }}">

    <style>
        #header {
            background-image: url("{{ asset('img/bg.jpg') }}");
        }
    </style>
@endpush

@push('scripts')
    <script src="{{ asset('components/slick/slick.js') }}"></script>
    <script>
        $(document).ready(function() {
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
                infinite: true,
            });
        });
    </script>
@endpush

<?php
$header__center = '
<div class="header__title">Отель №1</div>
<div class="header__stars">
<img src="' . asset('img/star.png') . '" alt="">
<img src="' . asset('img/star.png') . '" alt="">
<img src="' . asset('img/star.png') . '" alt="">
</div>
<div class="header__hotel_info">
<div class="header__hotel_info-address">
г. Казань, ул. Вахитова 12/1
</div>
<div class="header__hotel_info-price">
Цена от: 123 руб.
</div>
</div>
';

?>

@section('content')
    <section class="hotel__description wp">
        <h2 class="text-center">Забронировать Отель №1</h2>
        <div class="hotel__description-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, aspernatur beatae eius explicabo
            laboriosam magni maiores minus molestiae natus officia perferendis quae qui recusandae sed tenetur vel
            veniam. Beatae commodi expedita nisi quam quisquam repellendus sit suscipit. Consequuntur dolorem eaque eum
            minus perspiciatis quisquam reprehenderit sunt vel! Accusamus consectetur, dolorum impedit in laudantium
            officiis placeat quis ratione sit tenetur ut voluptatibus? Architecto consequuntur dolor dolorem ea fugit
            hic neque nisi obcaecati perferendis. A accusamus adipisci alias aut consequuntur cumque, dolorum ex fugit
            id laboriosam provident quae! Magni nihil, vel? Accusamus ad aut beatae culpa dolore eos error et explicabo
            itaque iure labore, magni, numquam odio optio possimus quam quibusdam quo repellendus sit tenetur. A
            accusamus ad aliquam architecto cumque cupiditate distinctio eveniet exercitationem facere facilis, impedit
            iusto labore laborum modi nam nihil nobis quae quas ratione sint soluta tenetur totam, unde velit, veniam?
            Ad incidunt ipsa iusto maxime nobis pariatur provident quibusdam repellat temporibus voluptas! Adipisci cum
            labore necessitatibus quod quos? Alias architecto corporis ea eveniet incidunt molestias rem rerum,
            temporibus ullam vitae! Ab asperiores atque dolor ea eligendi et, facere impedit iure libero, magnam maxime
            minima minus molestias nesciunt nostrum possimus praesentium provident quisquam quod sint suscipit tempora
            velit.
        </div>
    </section>

    <section class="photo_gallery">
        <div class="slider-for container">
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel1.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel2.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel1.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel2.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel1.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel2.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel1.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel2.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel1.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel2.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel1.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel2.jpg') }}" alt="">
            </div>
        </div>
        <div class="slider-nav container">
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel1.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel2.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel1.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel2.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel1.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel2.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel1.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel2.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel1.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel2.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel1.jpg') }}" alt="">
            </div>
            <div class="slider__item">
                <img src="{{ asset('img/hotels/hotel2.jpg') }}" alt="">
            </div>
        </div>
    </section>

    <section class="rooms__price wp">
        <h2 class="text-center">Типы номеров</h2>
        <div class="price__items">
            <div class="item_parent">
                <div class="button button__price">
                    <div class="price__title">Одноместный</div>
                    <div class="price__price">3000 руб.</div>
                </div>
            </div>
            <div class="item_parent">
                <div class="button button__price">
                    <div class="price__title">Двухместный</div>
                    <div class="price__price">3000 руб.</div>
                </div>
            </div>
            <div class="item_parent">
                <div class="button button__price">
                    <div class="price__title">Трёхместный</div>
                    <div class="price__price">3000 руб.</div>
                </div>
            </div>
            <div class="item_parent">
                <div class="button button__price">
                    <div class="price__title">Четырёхместный</div>
                    <div class="price__price">3000 руб.</div>
                </div>
            </div>
            <div class="item_parent">
                <div class="button button__price">
                    <div class="price__title">Люкс</div>
                    <div class="price__price">3000 руб.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="hotel__services wp">
        <h2 class="text-center">Услуги отеля</h2>
        <div class="hotel__services_items">
            <div class="item_parent">
                <div class="button hotel__service_item">
                    Wi-FI
                </div>
            </div>
            <div class="item_parent">
                <div class="button hotel__service_item">
                    Бассейн
                </div>
            </div>
            <div class="item_parent">
                <div class="button hotel__service_item">
                    Ресторан
                </div>
            </div>
            <div class="item_parent">
                <div class="button hotel__service_item">
                    Бизнес-центр
                </div>
            </div>
            <div class="item_parent">
                <div class="button hotel__service_item">
                    Прачечная
                </div>
            </div>
            <div class="item_parent">
                <div class="button hotel__service_item">
                    Бар
                </div>
            </div>
        </div>
    </section>
@endsection