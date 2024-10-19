<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'amount' => 'numeric|required',
            'date' => 'date|required',
            'origin_id' => 'int|required',
            'movement_id' => 'int|required',
            'type_id' => 'int|required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Titulo é obrigatorio',
            'amount.required' => 'Valor é obrigatorio',
            'amount.numeric' => 'O campo valor so aceita numeros.',
            'date.required' => 'Data é obrigatorio',
            'date.date' => 'O campo Data não pode ser do tipo texto.',
            'origin_id.required' => 'Origem é obrigatorio',
            'movement_id.required' => 'Categoria é obrigatorio',
            'type_id.required' => 'Tipo é obrigatorio',
        ];
    }
}
