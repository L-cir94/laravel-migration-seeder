@extends('layouts.app')
@section('title', 'Trains')
@section('content')
    <div class="container">
        <h1 class="py-3">Page for trains of Laravel-migration-seeder</h1>
        <div class="row py-2">
            @foreach ($trains as $train)
                <div class="col-3 g-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $train->company }}</h4>
                            <p class="card-text">Stazione di partenza: {{ $train->departure_station }}</p>
                            <p class="card-text">Stazione di arrivo: {{ $train->arrival_station }}</p>
                            <p class="card-text">Ora partenza: {{ $train->time_departure }}</p>
                            <p class="card-text">Arrivo previsto alle: {{ $train->time_arrival }}</p>
                            <h6># treno: {{ $train->train_code }}</h6>
                            <p>carrozze: {{ $train->carriages }}</p>
                            <div class="card-footer">
                            <p>in orario: @if ($train->in_time === 0)
                                regolare
                                @else
                                in ritardo
                            @endif</p>

                            <p>treno cancellato:
                            @if ($train->deleted === 0)
                                regolare
                            @else
                                CANCELLATO
                            @endif    
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

</html>
