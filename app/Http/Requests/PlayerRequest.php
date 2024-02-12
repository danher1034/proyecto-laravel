<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayerRequest extends FormRequest
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
            'name' => ['required','string','min:5','max:25'],
            'twitter'=> ['string','min:3','max:10000'],
            'instagram'=> ['string','min:3','max:10000'],
            'twitch'=> ['string','min:3','max:10000'],
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'El nombre de usuario es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena de texto.',
            'name.min' => 'El nombre de usuario debe tener como mínimo 5 caracteres.',
            'name.max' => 'El nombre de usuario debe tener como máximo 25 caracteres.',

            'twitter.string' => 'El twitter debe ser una cadena de texto.',
            'twitter.min'=>'El twitter debe tener al menos 3 caracteres',
            'twitter.max'=>'El twitter debe tener menos de 10000 caracteres',

            'instagram.string' => 'El instagram debe ser una cadena de texto.',
            'instagram.min'=>'El instagram debe tener al menos 3 caracteres',
            'instagram.max'=>'El instagram debe tener menos de 10000 caracteres',

            'twitch.string' => 'El twitch debe ser una cadena de texto.',
            'twitch.min'=>'El twitch debe tener al menos 3 caracteres',
            'twitch.max'=>'El twitch debe tener menos de 10000 caracteres',
        ];
    }
}
