<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'CodBarras' => ['required', 'unique:products,CodBarras'],
            'ValorUnitario' => ['required', 'numeric', 'min:0'],
        ];
    }

    public function messages(): array 
    {
        return [
            'CodBarras.required'=> 'O campo Código de barras é obrigatório.',
            'CodBarras.unique'=> 'O código informado já está cadastrado.',
            'ValorUnitario.required'=> 'O campo Valor Unitário é obrigatório.',
            'ValorUnitario.numeric' => 'O valor só pode conter números e pontos(.).',
            'ValorUnitario.min' => 'O valor informado precisa maior ou igual a 0(zero).'
        ];
    }
}
