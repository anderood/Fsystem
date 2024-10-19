<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'dateOfBirth' => 'required',
            'zip_code' => 'required',
            'street' => 'required',
            'number' => 'required',
            'district' => 'required',
            'city' => 'required',
            'state' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
           'first_name.required' => 'Primeiro nome é Obrigatorio.',
            'last_name.required' => 'Ultimo nome é Obrigatorio.',
            'dateOfBirth.required' => 'Data de Nascimento é obrigatorio.',
            'zip_code.required' => 'Cep é obrigatorio.',
            'street.required' => 'Rua é obrigatorio.',
            'number.required' => 'Numero é obrigatorio.',
            'district.required' => 'Bairro é obrigatorio.',
            'city.required' => 'Cidade é obrigatorio.',
            'state.required' => 'Estado é obrigatorio.',
        ];
    }
}
