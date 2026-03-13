<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
{
    public function authorize(): bool //Permissão
    {
        return true;
    }

public function rules(): array //conferer
{

    $clienteId = $this->route('cliente');

    return [
        'nome' => 'required|string|max:255',
        'email' => "required|email|unique:clientes,email,{$clienteId}",
        'telefone' => 'required|string|min:10|max:20',
        'endereco' => 'required|string|max:255',
    ];
}

    public function messages(): array //mensagens
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O campo email deve ser um endereço de email válido.',
            'email.unique' => 'O email já está em uso.',
            'telefone.required' => 'O campo telefone é obrigatório.',
            'endereco.required' => 'O campo endereço é obrigatório.',
        ];
    }
}
