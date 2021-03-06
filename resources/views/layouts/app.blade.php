<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('css/overall.css') }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media/tablet/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media/mobile/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/callback.css') }}">

    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media/mobile/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media/tablet/search.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media/mobile/search.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hotel_item.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media/tablet/hotel_item.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media/mobile/hotel_item.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    @stack('styles')
</head>
<body>

@if(session()->has('popupMsg'))
    {!! session()->get('popupMsg') !!}
@endif

<input type="checkbox" class="hidden" id="menu__checkbox">

<header id="header">
    <div id="logo">
        <img src="{{ asset('img/logo.png') }}" alt="">
    </div>
    <label id="san-menu" for="menu__checkbox">
        <div></div>
        <div></div>
        <div></div>
    </label>
    <div class="header__center">
        {!! $header__center !!}
    </div>
</header>

<div id="menu">
    <label class="close__menu" for="menu__checkbox"></label>
    <div class="clearfix"></div>
    <a href="{{ route('index') }}">Главная</a>
    <a href="{{ route('about') }}">О нас</a>
    <a href="{{ route('contacts') }}">Контакты</a>
</div>

@include('templates.search')

@yield('content')

<footer>
    Все права защищены © 2018
</footer>

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset('js/jquery-ui/jquery-ui.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('js/jquery-ui/jquery-ui.min.css') }}">
<link rel="stylesheet" href="{{ asset('js/jquery-ui/jquery-ui.structure.min.css') }}">
<link rel="stylesheet" href="{{ asset('js/jquery-ui/jquery-ui.theme.min.css') }}">

@stack('scripts')
</body>
</html>