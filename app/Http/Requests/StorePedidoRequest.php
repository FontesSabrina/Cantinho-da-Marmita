<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePedidoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


public function rules(): array
{
    return [
        'cliente_id' => 'required|exists:clientes,id',
        'marmita_id' => 'required|exists:marmitas,id',
        'quantidade' => 'required|integer|min:1',
        'total'      => 'nullable|numeric',
        'status'     => 'nullable|in:Pendente,Preparando,Entregue,Cancelado',
    ];
}

public function messages(): array
{
    return [
        'status.in' => 'O status deve ser: Pendente, Preparando, Entregue ou Cancelado.',
    ];
}

}
