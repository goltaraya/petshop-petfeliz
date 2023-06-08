@extends('templates.main')
@section('title', 'Pacientes')
@section('content')

    <div class="h1-header">
        <h2 class="header-title">
            Ficha do Paciente
        </h2>
    </div>
    <div class="patient-information">
        <h4>Nome</h4>
        <p>{{ $pacient->name }}</p>
        <h4>Data de Nascimento</h4>
        <p>{{ $pacient->birth }}</p>
        <h4>Espécie</h4>
        <p>{{ $pacient->species }}</p>
        <h4>Sexo</h4>
        <p>{{ $pacient->gender }}</p>
        <h4>Observação</h4>
        <p>{{ $pacient->observation }}</p>
    </div>
@endsection
