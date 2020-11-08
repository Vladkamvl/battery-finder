@extends('master')

@section('content')
    <h1>Аналоги</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Renata</th>
            <th scope="col">Energizer Rayovac Eveready</th>
            <th scope="col">Maxell Panasonic Sony Toshiba</th>
            <th scope="col">Varta</th>
            <th scope="col">Duracell</th>
            <th scope="col">Timex</th>
            <th scope="col">Citizen</th>
            <th scope="col">SEIKO</th>
            <th scope="col">Прочие</th>
            <th scope="col">Размер диаметр х толщина, мм</th>
            <th scope="col">Емкость, мАч</th>
            <th scope="col">Напряжение, В</th>
        </tr>
        </thead>
        <tbody>
        @foreach($batteries as $btn)
            <tr>
                <th scope="row">{{ $btn->id }}</th>
                <td>{{ $btn->Renata }}</td>
                <td>{{ $btn->Energizer_Rayovac_Eveready }}</td>
                <td>{{ $btn->Maxell_Panasonic_Sony_Toshiba }}</td>
                <td>{{ $btn->Varta }}</td>
                <td>{{ $btn->Duracell }}</td>
                <td>{{ $btn->Timex }}</td>
                <td>{{ $btn->Citizen}}</td>
                <td>{{ $btn->SEIKO}}</td>
                <td>{{ $btn->Others_bt }}</td>
                <td>{{ $btn->Size_DxThick }}</td>
                <td>{{ $btn->Capacity }}</td>
                <td>{{ $btn->Voltage }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
