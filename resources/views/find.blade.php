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

    @if(count($batteries))
        <br>
        <h5>Похожие товары на Яндекс.Маркете: </h5>
        <div id="marketWidget1"></div>
    @endif

@endsection
@if(isset($batteries[0]))
    <script async src="https://aflt.market.yandex.ru/widget/script/api"
            type="text/javascript"></script>
    <script type="text/javascript">
        (function (w) {
            function start() {
                w.removeEventListener("YaMarketAffiliateLoad", start);
                w.YaMarketAffiliate.createWidget({
                    containerId: "marketWidget1",
                    type: "offers",
                    params: {
                        clid: 2310490,
                        searchText: "Батарейка {{ $batteries[0]->Renata }}",
                        themeId: 2
                    }
                });
            }
            w.YaMarketAffiliate
                ? start()
                : w.addEventListener("YaMarketAffiliateLoad", start);
        })(window);
    </script>
@endif


