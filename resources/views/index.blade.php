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
        @foreach($hotels as $hotel)
            <div class="hotels__item" style="background-image: url('{{ asset('img/hotels/'.$hotel->img) }}');animation-delay: {{ $loop->index / 2 }}s">
                <div class="hotels__info">
                    <div class="hotels__name">{{ $hotel->name }}</div>
                    <div class="hotels__stars">
                        @for($i = 0; $i < $hotel->star_count; $i++)
                            <img src="{{ asset('img/star.png') }}" alt="">
                        @endfor
                    </div>
                </div>
                <a href="{{ route('hotel.view', ['id' => $hotel->id]) }}" class="hogitels__read">Посмотреть</a>
            </div>
        @endforeach
    </section>
@endsection