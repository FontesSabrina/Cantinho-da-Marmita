@extends('layouts.app')

@section('title', 'Painel Inicial - Cantinho da Marmita')

@section('content')
<div class="mt-2">
    <div class="row g-4 justify-content-center">
        <div class="col-md-4">
            <a href="/pedidos" class="card card-hover shadow-sm text-decoration-none cor-pedidos">
                <div class="card-body text-center p-5">
                    <i class="fas fa-clipboard-list fa-4x mb-3 text-primary"></i>
                    <h3 class="fw-bold text-dark">Pedidos</h3>
                    <p class="text-muted mb-0">Gerencie as entregas do dia</p>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="/clientes" class="card card-hover shadow-sm text-decoration-none cor-clientes">
                <div class="card-body text-center p-5">
                    <i class="fas fa-users fa-4x mb-3 text-success"></i>
                    <h3 class="fw-bold text-dark">Clientes</h3>
                    <p class="text-muted mb-0">Consulte sua base de dados</p>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="/marmitas" class="card card-hover shadow-sm text-decoration-none cor-marmitas">
                <div class="card-body text-center p-5">
                    <i class="fas fa-utensils fa-4x mb-3 text-warning"></i>
                    <h3 class="fw-bold text-dark">Cardápio</h3>
                    <p class="text-muted mb-0">Veja as marmitas do dia</p>
                </div>
            </a>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <div class="card card-lembrete shadow-sm p-4">
                <h5 class="titulo-lembrete text-start"><i class="fas fa-sticky-note me-2"></i> Mural de Avisos</h5>
                <p class="lembrete-texto text-start mb-0">
                    🥘 Dica: Verifique os pedidos agendados para Muriaé agora cedo!
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
