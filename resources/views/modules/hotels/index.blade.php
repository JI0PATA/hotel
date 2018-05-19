{{ config(['app.name' => 'Все отели']) }}

@push('scripts')
    <script>
        $(document).ready(function () {
            let autocompleteTags = [
                @foreach($autocomplete as $item)
                {!! '"'.$item->city.'",'  !!}
                @endforeach
            ];

            $('#autocomplete').autocomplete({
                source: autocompleteTags
            });
        });
    </script>
@endpush

@extends('layouts.admin')

@section('content')
    <div class="container">
        <div>
            <a href="{{ route('admin.hotels.add') }}" class="btn btn-primary">Добавить</a>
        </div><br>
        <form action="">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Укажите город или отель" required id="autocomplete" name="search" value="{{ Request::get('search') }}">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Поиск</button>
                </div>
            </div>
        </form>
        <br>
        @if($hotels->isEmpty())
            <h3>Отелей нет</h3>
        @else
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Название</th>
                    <th>Кол-во звёзд</th>
                    <th>Город, адрес</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($hotels as $hotel)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $hotel->name }}</td>
                        <td>
                            @for($i = 0; $i < $hotel->star_count; $i++)
                                <img src="{{ asset('img/star.png') }}" alt="" class="star">
                            @endfor
                        </td>
                        <td>{{ $hotel->city.', '.$hotel->address }}</td>
                        <td>
                            <a href="{{ route('admin.hotels.edit', ['id' => $hotel->id]) }}" class="btn btn-warning">Изменить</a>
                            <a onclick="if(confirm('Вы хотите удалить?')) location.href='{{ route('admin.hotels.delete', ['id' => $hotel->id]) }}'"
                               href="#" class="btn btn-danger">Удалить</a>
                            <a href="{{ route('admin.photos.index', ['id' => $hotel->id]) }}" class="btn btn-success">Галерея</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection