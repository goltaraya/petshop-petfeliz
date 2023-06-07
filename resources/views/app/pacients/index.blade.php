@extends('templates.main')
@section('title', 'Pacientes')
@section('content')

    <div class="h1-header">
        <h1 class="header-title">
            PACIENTES
        </h1>
    </div>
    <div>
        <a href="{{ route('app.pacients.create') }}">
            <button class="btn btn-primary">
                Cadastrar
            </button>
        </a>
    </div>
@endsection
