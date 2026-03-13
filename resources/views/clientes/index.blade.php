<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Clientes - Cantinho da Marmita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h1 class="mb-4 text-center">🍱 Cantinho da Marmita</h1>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow border-0">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center py-3">
            <h5 class="mb-0"><i class="fas fa-users me-2"></i> Lista de Clientes</h5>
            <a href="{{ route('clientes.create') }}" class="btn btn-light btn-sm fw-bold shadow-sm">
                <i class="fas fa-plus-circle me-1"></i> Novo Cliente
            </a>
        </div>

        <div class="card-body p-0"> <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">Nome do Cliente</th> <th>Telefone</th>
                            <th>Endereço de Entrega</th>
                            <th class="text-center pe-4">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $cliente)
                        <tr class="align-middle">
                            <td class="ps-4 text-primary fw-bold">{{ $cliente->nome }}</td>
                            <td>{{ $cliente->telefone }}</td>
                            <td class="text-muted">{{ $cliente->endereco }}</td>
                            <td class="text-center pe-4">
                                <a href="{{ route('clientes.edit', $cliente->id) }}"
                                class="btn btn-sm btn-outline-warning border-0"
                                title="Editar Cadastro">
                                    <i class="fas fa-edit fa-lg"></i>
                                </a>

                                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="btn btn-sm btn-outline-danger border-0"
                                            title="Remover Cliente"
                                            onclick="return confirm('Tem certeza que deseja remover este cliente?')">
                                        <i class="fas fa-trash fa-lg"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer bg-white py-3">
            <a href="/" class="btn btn-outline-secondary btn-sm">
                <i class="fas fa-arrow-left me-1"></i> Painel Inicial
            </a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
