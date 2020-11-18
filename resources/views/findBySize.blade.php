@extends('master')

@section('title', 'Поиск по размеру')

@section('content')
    <div class="row justify-content-md-center">
        <form action="{{ route('findSize') }}" method="GET">
            <div class="form-group mt-4">
                <h3>Поиск по размеру</h3>
                <label class="mt-2">Диаметр: </label>
                <input type="text" class="form-control" name="diamOfBattery" value="{{ old('diamOfBattery') }}">

                <label class="mt-2">Толщина: </label>
                <input type="text" class="form-control" name="thickOfBattery" value="{{ old('thickOfBattery') }}">
            </div>
            <button type="submit" class="btn" style="background-color: #6f43d6; color: white;">Искать</button>
        </form>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
