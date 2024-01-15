<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

class BusinessProfilesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Asegúrate de que solo los usuarios autorizados puedan enviar este formulario
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return [
        'name' => 'required|min:3|max:64',
        'email' => ['required','email','max:255', Rule::unique('business_profiles')->ignore($this->id)],
      ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
      return [
        'name.required' => 'El nombre de empresa es obligatorio',
        'name.min' => 'El mínimo de caracteres permitidos para el nombre de empresa son 3',
        'name.max' => 'El máximo de caracteres permitidos para el nombre de empresa son 64',
        'email.required' => 'El email es obligatorio',
        'email.email' => 'El formato de email es incorrecto',
        'email.max' => 'El máximo de caracteres permitidos para el email son 255',
        'email.unique' => 'El email ya existe',
      ];
    }
}