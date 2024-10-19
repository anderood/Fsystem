<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'numeric|required',
            'password' => 'required|min:8',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nome é obrigatorio.',
            'email.required' => 'E-mail é obrigatorio.',
            'phone.required' => 'Telefone é Obrigatorio.',
            'phone.numeric' => 'Telefone somente numeros.',
            'password.required' => 'Senha é obrigatorio.',
        ];
    }
}
