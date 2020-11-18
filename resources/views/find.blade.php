@extends('master')

@section('content')
    @isset($modelBattery)
        <h3 class="mt-4 mb-4">Вы ввели:  {{ $modelBattery }}</h3>
    @else
        <h3 class="mt-4 mb-4">Вы ввели размер:  {{ $size }}</h3>
    @endisset


    @if(count($batteries))
        <h5>Совпадения: </h5>
        <hr>
        @foreach($batteries as $btn)
            @isset($btn->Renata)
                <p><strong>Renata </strong>{{ $btn->Renata }}</p>
            @endisset
            @isset($btn->Energizer_Rayovac_Eveready)
                <p><strong>Energizer Rayovac Eveready </strong>{{ $btn->Energizer_Rayovac_Eveready }}</p>
            @endisset

            @isset($btn->Maxell_Panasonic_Sony_Toshiba)
                <p><strong>Maxell Panasonic Sony Toshiba </strong>{{ $btn->Maxell_Panasonic_Sony_Toshiba }}</p>
            @endisset

            @isset($btn->Varta)
                <p><strong>Varta </strong>{{ $btn->Varta }}</p>
            @endisset

            @isset($btn->Duracell)
                <p><strong>Duracell </strong>{{ $btn->Duracell }}</p>
            @endisset

            @isset($btn->Timex )
                <p><strong>Timex </strong>{{ $btn->Timex }}</p>
            @endisset

            @isset($btn->Citizen)
                <p><strong>Citizen </strong>{{ $btn->Citizen}}</p>
            @endisset

            @isset($btn->SEIKO)
                <p><strong>SEIKO </strong>{{ $btn->SEIKO}}</p>
            @endisset

            @isset($btn->Others_bt )
                <p><strong>Прочие </strong>{{ $btn->Others_bt }}</p>
            @endisset

            @isset($btn->Size_DxThick)
                <p><strong>Размер диаметр х толщина, мм </strong>{{ $btn->Size_DxThick }}</p>
            @endisset

            @isset($btn->Capacity)
                <p><strong>Емкость, мАч </strong>{{ $btn->Capacity }}</p>
            @endisset

            @isset($btn->Voltage)
                <p><strong>Напряжение, В </strong>{{ $btn->Voltage }}</p>
            @endisset
            <hr>
        @endforeach
    @else
        <p><string>Такой батарейки не найдено, попробуйте ввести другую модель</string></p>
    @endif


@endsection
