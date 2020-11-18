@extends('master')

@section('title', 'Поиск по модели')

@section('content')
    <div class="row justify-content-center">
        <form action="{{ route('find') }}" method="GET">
            <div class="form-group mt-4">
                <label for="exampleInputEmail1">Модель батарейки</label>
                <input type="text" class="form-control" name="modelBattery" value="{{ old('modelBattery') }}">
            </div>
            <button type="submit" class="btn" style="background-color: #6f43d6; color: white;">Искать</button>
        </form>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
