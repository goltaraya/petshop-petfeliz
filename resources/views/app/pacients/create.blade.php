@extends('templates.main')
@section('title', 'Pacientes')
@section('content')

    <div class="h1-header">
        <h1 class="header-title">
            PACIENTES
        </h1>
    </div>
    <div class="pacient-form">
        <form action="/app/pacientes" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input required type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="birth" class="form-label">Data de Nascimento</label>
                <input required type="date" class="form-control" id="birth" name="birth">
            </div>
            <div class="mb-3">
                <label for="species" class="form-label">Espécie</label>
                <input required type="text" class="form-control" id="species" name="species">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Sexo</label>
                <div class="gender-radio-option">
                    <input required type="radio" id="male" name="gender" value="macho" checked="checked">
                    <label for="male">Macho</label>
                    <input required type="radio" id="female" name="gender" value="fêmea">
                    <label for="female">Fêmea</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="observation" class="form-label">Observação</label>
                <textarea class="form-control" id="observation" rows="3" name="observation"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

@endsection
