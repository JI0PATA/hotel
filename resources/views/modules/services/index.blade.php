{{ config(['app.name' => 'Услуги']) }}

@extends('layouts.admin')

@section('content')
    <div class="container">
        <div>
            <a href="{{ route('admin.services.add') }}" class="btn btn-primary">Добавить</a>
        </div><br>
        @if($services->isEmpty())
            <h3>Нет услуг</h3>
        @else
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Имя</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $service->name }}</td>
                        <td>
                            <a href="{{ route('admin.services.edit', ['id' => $service->id]) }}" class="btn btn-warning">Изменить</a>
                            <a onclick="if(confirm('Вы хотите удалить?')) location.href='{{ route('admin.services.delete', ['id' => $service->id]) }}'" href="#" class="btn btn-danger">Удалить</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection