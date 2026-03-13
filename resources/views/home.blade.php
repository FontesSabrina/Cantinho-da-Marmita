@extends('layouts.app')

@section('content')

<h2 class="display-6 titulo-sistema mb-4">Olá, bem-vinda ao sistema! 👋</h2>

<div class="row g-4">
    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 cor-pedidos card-hover">
            <div class="card-body text-center p-4">
                <i class="fas fa-clipboard-check display-4 text-primary mb-3"></i>
                <h5 class="fw-bold">Pedidos</h5>
                <p class="small text-muted mb-4">Gerencie as vendas e o status das entregas.</p>
                <div class="d-grid gap-2">
                    <a href="/pedidos/novo" class="btn btn-primary rounded-pill shadow-sm">
                        <i class="fas fa-plus me-1"></i> Novo Pedido
                    </a>
                    <a href="/pedidos" class="btn btn-glass rounded-pill">
                        <i class="fas fa-list-ul me-1"></i> Ver Todos
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 cor-clientes card-hover">
            <div class="card-body text-center p-4">
                <i class="fas fa-users display-4 text-success mb-3"></i>
                <h5 class="fw-bold">Clientes</h5>
                <p class="small text-muted mb-4">Cadastre novos clientes ou veja a lista atual.</p>
                <div class="d-grid gap-2">
                    <a href="/clientes/novo" class="btn btn-success rounded-pill shadow-sm">
                        <i class="fas fa-user-plus me-1"></i> Adicionar Cliente
                    </a>
                    <a href="/clientes" class="btn btn-glass rounded-pill">
                        <i class="fas fa-search me-1"></i> Lista de Clientes
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 cor-marmitas card-hover">
            <div class="card-body text-center p-4">
                <i class="fas fa-utensils display-4 text-warning mb-3"></i>
                <h5 class="fw-bold">Cardápio</h5>
                <p class="small text-muted mb-4">Ajuste preços, nomes e tamanhos das marmitas.</p>
                <div class="d-grid gap-2">
                    <a href="/marmitas" class="btn btn-warning text-white rounded-pill shadow-sm">
                        <i class="fas fa-cog me-1"></i> Gerenciar Cardápio
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-12">
        <div class="card shadow-sm card-lembrete">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h5 class="titulo-lembrete m-0">
                        <i class="fas fa-sticky-note me-2"></i>Mural de Avisos
                    </h5>
                    <small class="text-muted">Salvo automaticamente</small>
                </div>
                <textarea
                    id="bloco-notas"
                    class="form-control border-0 bg-transparent lembrete-texto"
                    rows="4"
                    placeholder="Anote aqui os recados da cozinha..."></textarea>
            </div>
        </div>
    </div>
</div>

@endsection
