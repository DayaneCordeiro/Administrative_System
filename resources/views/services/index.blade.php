@extends('adminlte::page')

@section('title', 'Lista de serviços')

@section('content_header')
    <h1>Lista de serviços</h1>
@stop

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($services as $service)
                <tr>
                    <th>{{ $service->id }}</th>
                    <td>{{ $service->name }}</td>
                    <td>aaa</td>
                </tr>
            @empty
                <tr>
                    <th></th>
                    <th>Nenhum registro encontrado.</th>
                    <th></th>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $services->links(); }}
    </div>
@stop