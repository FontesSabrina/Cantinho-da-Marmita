<?php

namespace App\Http\Controllers;

use App\Models\Marmita;
use App\Http\Requests\StoreMarmitaRequest;

class MarmitaController extends Controller
{
    // Listar: Abre a página do cardápio com todas as marmitas
    public function index()
    {
        $marmitas = Marmita::all();
        return view('marmitas.index', compact('marmitas'));
    }

    // Criar: Salva a nova marmita (ex: Feijoada) e volta para a lista
    public function store(StoreMarmitaRequest $request)
    {
        Marmita::create($request->validated());

        return redirect()->route('marmitas.index')
                        ->with('success', 'Marmita adicionada ao cardápio!');
    }

    // Exibir: Ver detalhes de uma marmita específica
    public function show(Marmita $marmita)
    {
        return view('marmitas.show', compact('marmita'));
    }

    // Atualizar: Muda preço ou descrição e redireciona
    public function update(StoreMarmitaRequest $request, Marmita $marmita)
    {
        $marmita->update($request->validated());

        return redirect()->route('marmitas.index')
                        ->with('success', 'Marmita atualizada com sucesso!');
    }

    // Deletar: Remove do cardápio
    public function destroy(Marmita $marmita)
    {
        $marmita->delete();

        return redirect()->route('marmitas.index')
                        ->with('success', 'Marmita removida do cardápio.');
    }
}
