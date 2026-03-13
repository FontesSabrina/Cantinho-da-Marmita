<!DOCTYPE html>
<html>
<head>
<title>Pedidos - Cantinho da Marmita</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h1 class="mb-4 text-center">🍱 Cantinho da Marmita</h1>

<div class="card">

<div class="card-header bg-warning">
Lista de Pedidos
</div>

<div class="card-body">

<table class="table table-striped">

<thead>
<tr>
<th>ID</th>
<th>Cliente</th>
<th>Marmita</th>
<th>Quantidade</th>
<th>Total</th>
</tr>
</thead>

<tbody>

@foreach($pedidos as $pedido)
<tr>
<td>{{ $pedido->id }}</td>
<td>{{ $pedido->cliente_id }}</td>
<td>{{ $pedido->marmita_id }}</td>
<td>{{ $pedido->quantidade }}</td>
<td>R$ {{ $pedido->total }}</td>
</tr>
@endforeach

</tbody>

</table>

<a href="/" class="btn btn-secondary">⬅ Voltar</a>

</div>
</div>

</div>

</body>
</html>
