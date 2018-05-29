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
                Адрес: Казань, Татарстан, 22, 603 офис; 6 этаж<br>
                Район Татарская слобода, район Вахитовский район
            </div>
            <div>
                Телефон: +7 (843) 264-47-28
            </div>
        </div>
    </section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2243.7123429757585!2d49.1110777162778!3d55.78086768056088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415ead033f5a431d%3A0x74a0cd27e65e05c8!2z0YPQuy4g0KLQsNGC0LDRgNGB0YLQsNC9LCAyMiwg0JrQsNC30LDQvdGMLCDQoNC10YHQvy4g0KLQsNGC0LDRgNGB0YLQsNC9LCA0MjAwMjE!5e0!3m2!1sru!2sru!4v1527572941721" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
@endsection