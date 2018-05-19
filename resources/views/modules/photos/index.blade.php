{{ config(['app.name' => 'Просмотр галереи']) }}

@extends('layouts.admin')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
@endpush

@section('content')
    <div class="container">
        <div>
            <form action="{{ route('admin.photos.create', ['id' => $hotel_id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <input type="file" required multiple class="form-control" name="file[]">
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary">Загрузить</button>
                    </div>
                </div>
            </form>
        </div><br>
        <div class="photo__items">
            @forelse($photos as $photo)
                <div class="photo__item">
                    <img src="{{ asset('img/hotels/gallery/'.$photo->img) }}" alt="">
                    <div class="photo__overlay">
                        <a href="{{ route('admin.photos.delete', ['id' => $photo->id]) }}" class="photo__delete_button">x</a>
                    </div>
                </div>
            @empty
                <h3>Нет фотографий</h3>
            @endforelse
        </div>
    </div>
@endsection