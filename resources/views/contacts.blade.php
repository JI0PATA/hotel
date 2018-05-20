{{ config(['app.name' => 'Контакты']) }}

@extends('layouts.app')

@push('styles')
    <style>
        #header {
            background-image: url("{{ asset('/img/bg.jpg') }}");
        }
    </style>
@endpush

<?php
$header__center = "Контакты";
?>

@section('content')
    <section class="page__content container">
        <h2 class="text-center">Контакты</h2>
        <div class="page__description">
            <div>
                Адрес: г. Казань, ул. Мира, 1в
            </div>
            <div>
                Телефон: +7 (843) 264-47-28
            </div>
        </div>
    </section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2238.7346627087154!2d49.233343716280366!3d55.867269880584175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415eb34c6fa07e89%3A0xdd5ea63989f40e95!2z0YPQuy4g0JzQuNGA0LAsIDHQkiwg0JrQsNC30LDQvdGMLCDQoNC10YHQvy4g0KLQsNGC0LDRgNGB0YLQsNC9LCA0MjAwNzU!5e0!3m2!1sru!2sru!4v1526825201022" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
@endsection