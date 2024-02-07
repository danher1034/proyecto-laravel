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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','string','min:5','max:20','unique:events'],
            'description'=> ['required','string','min:10','max:10000'],
            'location'=> ['required','string','min:3','max:100'],
            'date' => ['required', 'date'],
            'hour' => ['required', 'time'],
            'type' => ['required','string', 'in:official, exhibition, charity'],
            'tags'=> ['required','string','min:3','max:100'],
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'El nombre de usuario es obligatorio.',
            'name.min' => 'El nombre de usuario debe tener como mínimo 5 caracteres.',
            'name.max' => 'El nombre de usuario debe tener como máximo 20 caracteres.',
            'name.unique' => 'El nombre de usuario ya existe en el sistema.',

            'description.required'=>'El argumento es obligatorio',
            'description.min'=>'El argumento debe tener al menos 10 caracteres',
            'description.max'=>'El argumento debe tener menos de 10000 caracteres',

            'location.required'=>'El localización es obligatorio',
            'location.min'=>'El localización debe tener al menos 3 caracteres',
            'location.max'=>'El localización debe tener menos de 100 caracteres',

            'date.required' => 'El cumpleaños es obligatorio.',

            'hour.required' => 'La hora es obligatoria.',

            'email.required' => 'EL email es obligatorio.',
            'email.unique' => 'EL email ya existe en el sistema.',
            'email.min' => 'El email debe tener como mínimo 10 caracteres.',
            'email.max' => 'El email debe tener como máximo 255 caracteres.',

            'password.required' => 'La contraseña es obligatoria.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'password.min' => 'La contraseña debe tener como mínimo 8 caracteres.',
        ];
    }
}
