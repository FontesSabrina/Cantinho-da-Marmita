<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cantinho da Marmita')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <header class="py-2 mb-4">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="/" class="d-flex align-items-center text-decoration-none">
                <img src="{{ asset('img/logo.png') }}" alt="Logo Cantinho da Marmita" class="logo-header me-3">
            </a>

            <nav>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link btn-glass mx-1" href="/clientes">
                            <i class="fas fa-users me-1 text-success"></i> Clientes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-glass mx-1" href="/marmitas">
                            <i class="fas fa-utensils me-1 text-warning"></i> Marmitas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-glass mx-1" href="/pedidos">
                            <i class="fas fa-clipboard-list me-1 text-primary"></i> Pedidos
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="faixa-animada shadow-sm">
            <span class="texto-movimento">
                🍱 Bem-vinda ao sistema oficial do Cantinho da Marmita! Gerencie seus pedidos com carinho e agilidade. 🍱
            </span>
        </div>
    </div>

    <main class="container">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
