<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Marmita;
use App\Models\Cliente; // Adicionado para carregar a lista no formulário
use App\Http\Requests\StorePedidoRequest;

class PedidoController extends Controller
{
    // Listar
    public function index()
    {
        $pedidos = Pedido::with(['cliente', 'marmita'])->get();
        return view('pedidos.index', compact('pedidos'));
    }

    // Criar
    public function store(StorePedidoRequest $request)
    {
        $marmita = Marmita::find($request->marmita_id);

        // Lógica O sistema calcula o preço automaticamente para evitar erros humanos
        $valorTotal = $marmita->preco * $request->quantidade;

        Pedido::create([
            'cliente_id' => $request->cliente_id,
            'marmita_id' => $request->marmita_id,
            'quantidade' => $request->quantidade,
            'total'      => $valorTotal,
            'status'     => 'Pendente'
        ]);

        return redirect()->route('pedidos.index')
                        ->with('success', 'Pedido registrado! Já pode começar a cozinhar. 🍲');
    }

    // Exibir
    public function show(Pedido $pedido)
    {
        return view('pedidos.show', compact('pedido'));
    }

    // Atualizar
    public function update(StorePedidoRequest $request, Pedido $pedido)
    {
        $pedido->update($request->validated());

        return redirect()->route('pedidos.index')
                        ->with('success', 'Status do pedido atualizado!');
    }

    // Deletar
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();

        return redirect()->route('pedidos.index')
                        ->with('success', 'Pedido cancelado.');
    }
}
