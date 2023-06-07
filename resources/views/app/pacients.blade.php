@extends('templates.main')
@section('title', 'Pacientes')
@section('content')

    <h1>
        PACIENTES
    </h1>
    @if (count($pacients) > 0)
        <h2>{{ $pacients[0] }}</h2>
    @endif

@endsection
