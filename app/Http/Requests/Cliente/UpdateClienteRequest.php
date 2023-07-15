<?php

namespace App\Http\Requests\Cliente;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'numero_documento' => 'required',
            'nombres' => 'required',
            'telefono' => 'required',
            'direccion' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'required' => '* Campo obligatorio',
            'unique' => 'Ya existe el nombre de seguro'
        ];
    }
}
