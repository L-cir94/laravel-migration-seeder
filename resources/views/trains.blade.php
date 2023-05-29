@extends('layouts.app')
@section('title', 'Trains')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Page for trains of Laravel-migration-seeder</h1>
            @foreach ($trains as $train)
                
                {{ $train->company}}
                
            @endforeach
        </div>
    </div>
@endsection

</html>
