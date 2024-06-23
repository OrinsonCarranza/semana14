<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Cambiar a true para autorizar la validación
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'cPerApellido' => 'required|string|max:255',
            'cPerNombre' => 'required|string|max:255',
            'cPerDireccion' => 'required|string|max:255',
            'dPerFecNac' => 'required|date',
            'nPerEdad' => 'required|integer|min:0',
            'nPerSueldo' => 'required|numeric|min:0',
            'nPerEstado' => 'required|boolean',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages()
    {
        return [
            'cPerApellido.required' => 'El apellido es obligatorio.',
            'cPerNombre.required' => 'El nombre es obligatorio.',
            'cPerDireccion.required' => 'La dirección es obligatoria.',
            'dPerFecNac.required' => 'La fecha de nacimiento es obligatoria.',
            'dPerFecNac.date' => 'La fecha de nacimiento debe ser una fecha válida.',
            'nPerEdad.required' => 'La edad es obligatoria.',
            'nPerEdad.integer' => 'La edad debe ser un número entero.',
            'nPerEdad.min' => 'La edad no puede ser negativa.',
            'nPerSueldo.required' => 'El sueldo es obligatorio.',
            'nPerSueldo.numeric' => 'El sueldo debe ser un número.',
            'nPerSueldo.min' => 'El sueldo no puede ser negativo.',
            'nPerEstado.required' => 'El estado es obligatorio.',
            'nPerEstado.boolean' => 'El estado debe ser verdadero o falso.',
        ];
    }
}
