<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class EventRequest extends FormRequest
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
            'name' => ['required','string','min:5','max:1000','unique:events'],
            'description'=> ['required','string','min:10','max:10000'],
            'location'=> ['required','string','min:3','max:1000'],
            'date' => ['required', 'date'],
            'hour' => ['required', 'regex:/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/'],
            'type' => ['required','string', 'in:official, exhibition, charity'],
            'tags'=> ['required','string','min:3','max:1000'],
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'El nombre de usuario es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena de texto.',
            'name.min' => 'El nombre de usuario debe tener como mínimo 5 caracteres.',
            'name.max' => 'El nombre de usuario debe tener como máximo 1000 caracteres.',
            'name.unique' => 'El nombre de usuario ya existe en el sistema.',

            'description.required'=>'El argumento es obligatorio',
            'description.string' => 'La descripción debe ser una cadena de texto.',
            'description.min'=>'El argumento debe tener al menos 10 caracteres',
            'description.max'=>'El argumento debe tener menos de 10000 caracteres',

            'location.required'=>'El localización es obligatorio',
            'location.string' => 'La ubicación debe ser una cadena de texto.',
            'location.min'=>'El localización debe tener al menos 3 caracteres',
            'location.max'=>'El localización debe tener menos de 1000 caracteres',

            'date.required' => 'La fecha es obligatoria.',
            'date.date' => 'La fecha debe ser una fecha válida.',

            'hour.required' => 'La hora es obligatoria.',
            'hour.regex' => 'La hora debe seguir el formato de 24 horas.',

            'type.required' => 'El tipo es obligatorio.',
            'type.string' => 'El tipo debe ser una cadena de texto.',
            'type.in' => 'El tipo debe ser uno de los siguientes: oficial, exposición, beneficencia.',

            'tags.required' => 'Las etiquetas son obligatorias.',
            'tags.string' => 'Las etiquetas deben ser una cadena de texto.',
            'tags.min' => 'Las etiquetas deben tener al menos 3 caracteres.',
            'tags.max' => 'Las etiquetas no pueden tener más de 1000 caracteres.',
        ];
    }
}
