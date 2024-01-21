<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientsFormRequest extends FormRequest
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
            'NomeCliente' => 'required',
            'CPF' => ['required', 'size:11', 'unique:clients,CPF', 'string', 'regex:/^[0-9]+$/'],
        ];
    }

    public function messages(): array 
    {
        return [
            'NomeCliente.required'=> 'O campo Nome é obrigatório.',
            'CPF.required'=> 'O campo CPF é obrigatório.',
            'CPF.size' => 'O CPF deve ter 11 caracteres.',
            'CPF.unique' => 'O CPF informado já está cadastrado.',
            'CPF.string'=> 'O CPF deve conter apenas caracteres numéricos.',
            'CPF.regex' => 'O CPF deve conter apenas caracteres numéricos.',
        ];
    }
}
