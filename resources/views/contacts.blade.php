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
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi beatae consequuntur, delectus facere nobis
            non? A ab asperiores, blanditiis culpa dolore et facilis ipsa ipsum iusto laboriosam magni molestiae,
            mollitia nostrum odit optio placeat quisquam repellat repellendus repudiandae saepe sapiente sed unde vero
            voluptas voluptatem! Aspernatur dignissimos incidunt, libero maxime minus necessitatibus quos reiciendis
            sunt? Eaque, error in iusto natus neque praesentium similique tempora totam veniam voluptas. At, neque,
            quisquam. Aliquam, asperiores beatae doloribus eligendi et magnam, minus nihil odio pariatur perspiciatis
            quae quaerat quia quidem quo sed unde ut voluptas. Animi aspernatur consectetur, id maiores quasi quos
            repudiandae vel.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet animi blanditiis delectus ducimus
            eaque eligendi expedita ipsa ipsam ipsum magnam maiores nisi pariatur, praesentium repellat, soluta tenetur
            ullam. Alias aspernatur atque consequuntur debitis doloremque eaque ex facilis fuga in inventore laboriosam
            laborum minus molestias mollitia natus necessitatibus nihil non odio odit perferendis placeat, quibusdam
            quis quod ratione recusandae reprehenderit saepe sed soluta ullam voluptatibus. Ab adipisci deleniti et
            eveniet excepturi iste itaque labore necessitatibus nisi, provident repellat repellendus, rerum soluta
            tenetur unde, ut vitae voluptatibus. Dignissimos et exercitationem ipsum laborum laudantium, maiores
            mollitia necessitatibus, nesciunt nobis rem, reprehenderit voluptatum?
        </div>
    </section>
@endsection