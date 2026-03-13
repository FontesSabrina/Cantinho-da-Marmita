@extends('layouts.app')

@section('title', 'Novo Cliente - Cantinho da Marmita')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm border-0 cor-clientes card-hover">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">➕ Cadastrar Novo Cliente</h4>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('clientes.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Nome do Cliente</label>
                        <input type="text" name="nome" class="form-control" placeholder="Ex: João da Silva" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Telefone</label>
                        <input type="text" name="telefone" id="telefone" class="form-control" placeholder="(32) 99999-9999" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Endereço Completo</label>
                    <textarea name="endereco" class="form-control" rows="3" placeholder="Rua, número, bairro..." required></textarea>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="/" class="btn btn-light border">Cancelar</a>
                    <button type="submit" class="btn btn-success px-4">Salvar Cliente</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
