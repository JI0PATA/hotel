{{ config(['app.name' => 'Добавить отель']) }}

@extends('layouts.admin')

@section('content')
    <div class="container">
        <form action="{{ route('admin.hotels.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Название</label>
                <input type="text" id="name" name="name" required class="form-control" placeholder="Название"
                       value="{{ old('name') }}">
            </div>
            <div class="row">
                <div class="col">
                    <label for="star_count">Кол-во звёзд</label>
                    <select name="star_count" id="star_count" class="form-control">
                        @for($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}"
                                    @if(old('star_count') !== null)
                                    @if(old('star_count') == $i)
                                    selected
                                    @endif
                                    @endif

                            >{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="col">
                    <label for="city">Город</label>
                    <input type="text" id="city" class="form-control" name="city" placeholder="Город" required
                           value="{{ old('city') }}">
                </div>
                <div class="col">
                    <label for="address">Адрес</label>
                    <input type="text" id="address" class="form-control" name="address" placeholder="Адрес" required
                           value="{{ old('address') }}">
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea name="description" id="description" class="form-control" rows="10" placeholder="Описание"
                          required>{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label for="img">Картинка</label>
                <input type="file" required name="file" id="img" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Выберите услуги</label><br>
                @forelse($services as $service)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox{{ $loop->index }}"
                               value="{{ $service->id }}" name="services[]">
                        <label class="form-check-label"
                               for="inlineCheckbox{{ $loop->index  }}">{{ $service->name }}</label>
                    </div>
                @empty
                    <h3>Нет услуг</h3>
                @endforelse
            </div>
            <div class="form-group">
                <label for="">Выберите комнаты</label>
                <div class="row">
                    @foreach($rooms as $room)
                        <div class="col-md-3">
                            <label for="room{{ $room->id }}">{{ $room->name }}</label>
                            <input type="number" class="form-control" placeholder="Стоимость" name="rooms[]">
                        </div>
                    @endforeach
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
@endsection