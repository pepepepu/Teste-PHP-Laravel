<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchasesFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'cliente_id' => ['required', 'exists:clients,NomeCliente'],
            'produto_id' => ['required', 'exists:products,CodBarras'],
            'Quantidade' => ['required', 'min:1'],
        ];
    }

    public function messages(): array
    {
        return [
            'cliente_id.exists' => 'O cliente informado não foi encontrado.',
            'cliente_id.required' => 'O nome do cliente é obrigatório.',
            'produto_id.exists' => 'O produto informado não foi encontrado.',
            'produto_id.required' => 'O código de barras do produto é obrigatório.',
            'Quantidade.min' => 'A quantidade de produtos solicitada deve ser maior que 1.',
            'Quantidade.required' => 'A quantidade de produtos é obrigatória.',
        ];
    }
}

