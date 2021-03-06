{{ config(['app.name' => 'Добавление услуги']) }}

@extends('layouts.admin')

@section('content')
    <div class="container">
        <form action="{{ route('admin.services.create') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Наименование</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Наименование" required>
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
@endsection