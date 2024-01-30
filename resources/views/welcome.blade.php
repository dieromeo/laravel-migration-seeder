@extends('_partials.head')
@section('titolo_pagina')
    Treni in partenza
@endsection

<body>
    @include('_partials.header')
    <main class="p-5">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($trains as $train)
                    @if ($train['departure_date'] === date('Y-m-d'))
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card pt-3" style="width: 18rem;">
                                <img src="{{ Vite::asset('resources/img/train.svg') }}" alt="train" id="train">
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Parte da: {{ $train['departure_station'] }}</li>
                                        <li class="list-group-item">Alle ore: {{ $train['departure_time'] }}</li>
                                        <li class="list-group-item">Destinazione: {{ $train['arrival_station'] }}</li>
                                        <li class="list-group-item">Alle ore: {{ $train['arrival_time'] }}</li>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>
