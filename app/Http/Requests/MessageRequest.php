<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'subject'=> ['required','string','min:3','max:100'],
            'text'=> ['required','string','min:3','max:10000'],
        ];
    }
    public function messages()
    {
        return[

            'subject.required' => 'El asunto del mensaje es obligatorio.',
            'subject.string' => 'El asunto debe ser una cadena de texto.',
            'subject.min'=>'El asunto debe tener al menos 3 caracteres',
            'subject.max'=>'El asunto debe tener menos de 100 caracteres',

            'text.required' => 'La descripción del mensaje es obligatorio.',
            'text.string' => 'La descripción debe ser una cadena de texto.',
            'text.min'=>'La descripción debe tener al menos 3 caracteres',
            'text.max'=>'La descripción debe tener menos de 10000 caracteres',
        ];
    }
}
