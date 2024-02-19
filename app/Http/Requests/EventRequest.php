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
            'name' => ['required','string','min:5','max:15'],
            'description'=> ['required','string','min:10','max:10000'],
            'location'=> ['required','string','min:3','max:1000'],
            'date' => ['required', 'date', 'after_or_equal:' . now()->format('Y-m-d')],
            'hour' => ['required', 'date_format:H:i:s'],
            'type' => ['required','string', 'in:official,exhibition,charity'],
            'tags'=> ['required','string','min:3','max:1000'],
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'El nombre del evento es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena de texto.',
            'name.min' => 'El nombre del evento debe tener como mínimo 5 caracteres.',
            'name.max' => 'El nombre del evento debe tener como máximo 15 caracteres.',

            'description.required'=>'La descripción es obligatorio',
            'description.string' => 'La descripción debe ser una cadena de texto.',
            'description.min'=>'La descripción debe tener al menos 10 caracteres',
            'description.max'=>'La descripcióno debe tener menos de 10000 caracteres',

            'location.required'=>'La ubicación es obligatorio',
            'location.string' => 'La ubicación debe ser una cadena de texto.',
            'location.min'=>'La ubicación debe tener al menos 3 caracteres',
            'location.max'=>'La ubicación debe tener menos de 1000 caracteres',

            'date.required' => 'La fecha es obligatoria.',
            'date.date' => 'La fecha debe ser una fecha válida.',
            'date.after_or_equal' => 'La fecha no puede anterio a hoy.',

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
