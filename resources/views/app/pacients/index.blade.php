@extends('templates.main')
@section('title', 'Pacientes')
@section('content')

    <div class="h1-header">
        <h1 class="header-title">
            PACIENTES
        </h1>
    </div>
    @if (count($pacients) != 0)
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" class="col-1">#</th>
                    <th scope="col" class="col-2">Nome</th>
                    <th scope="col" class="col-2">Espécie</th>
                    <th scope="col" class="col-2">Data de Nascimento</th>
                    <th scope="col" class="col-2">Gênero</th>
                    <th scope="col" class="col-1">Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pacients as $pacient)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $pacient->name }}</td>
                        <td>{{ $pacient->species }}</td>
                        <td>{{ $pacient->birth }}</td>
                        <td>{{ $pacient->gender }}</td>
                        <td>
                            <a href="{{ route('app.pacients.show', ['id' => $pacient->id]) }}">
                                <ion-icon name="eye-outline"></ion-icon>
                            </a>
                            <a href=" {{route('app.pacients.edit', ['id' => $pacient->id])}}">
                                <ion-icon name="pencil"></ion-icon>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="no-patients">
            <h4>Não existem pacientes cadastrados no momentos. Clique no botão abaixo para cadastrar.</h4>
        </div>
    @endif

    <div>
        <a href="{{ route('app.pacients.create') }}">
            <button class="btn btn-success">
                <ion-icon name="add-circle-outline"></ion-icon> Cadastrar
            </button>
        </a>
    </div>
@endsection
