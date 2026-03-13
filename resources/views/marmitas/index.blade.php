@extends('layouts.app')

@section('title', 'Marmitas - Cantinho da Marmita')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Lista de Marmitas</h4>
        </div>

        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th> <th>Descrição</th>
                        <th>Tamanho</th> <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($marmitas as $marmita)
                    <tr>
                        <td>{{ $marmita->id }}</td>
                        <td>{{ $marmita->nome }}</td>
                        <td>{{ $marmita->descricao }}</td>
                        <td><span class="badge bg-info text-dark">{{ $marmita->tamanho }}</span></td>
                        <td>R$ {{ number_format($marmita->preco, 2, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-3">
                <a href="/" class="btn btn-secondary">⬅ Voltar para o Início</a>
                <button class="btn btn-primary">➕ Cadastrar Nova</button>
            </div>
        </div>
    </div>
</div>
@endsection
