<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;

class ClienteController extends Controller
{
    //Listar
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    //Criar
    public function store(StoreClienteRequest $request)
    {
        Cliente::create($request->validated());

        return redirect()->route('clientes.index')
                        ->with('success', 'Cliente cadastrado com sucesso!');
    }

    //Exibir
    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    //Atualizar
    public function update(StoreClienteRequest $request, Cliente $cliente)
    {
        $cliente->update($request->validated());

        return redirect()->route('clientes.index')
                        ->with('success', 'Cadastro atualizado!');
    }


    //Deletar
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('clientes.index')
                        ->with('success', 'Cliente removido do sistema.');
    }
}
