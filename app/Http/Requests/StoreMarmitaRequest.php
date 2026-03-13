<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMarmitaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric|min:0',
            'tamanho' => 'required|in:P,M,G',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'Dê um nome bem gostoso para sua marmita!',
            'preco.required' => 'Você esqueceu de colocar o preço.',
            'preco.numeric' => 'O preço precisa ser um número, hein?',
            'tamanho.required' => 'Escolha se a marmita é P, M ou G.',
            'tamanho.in' => 'O tamanho deve ser P, M ou G.',
        ];
    }
}
