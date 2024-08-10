<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

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
            'image' => [ // Validación para la imagen
                $this->route('persona') ? 'nullable' : 'required', 
                'mimes:jpeg,png']
        ];
    }
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
            'image.required' => 'Debe subir una imagen. El campo no puede estar vacío'
        ];
    }
}
