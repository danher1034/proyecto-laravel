<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class UsereditRequest extends FormRequest
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
        $rules= [
            'birthday' => ['date'],
            'password' => ['required'],
        ];

        if(!empty($this->request->get('newpassword'))){
            $rules['newpassword']=['string','min:8', 'confirmed', Rules\Password::default()];
        }

        return $rules;
    }

    public function messages()
    {
        return[
            'birthday.date' => 'El cumpleaños tiene que ser tipo fecha.',

            'newpassword.confirmed' => 'Las contraseñas no coinciden.',
            'newpassword.confirmed' => 'Las contraseñas no coinciden.',
            'newpassword.min' => 'La contraseña debe tener como mínimo 8 caracteres.',
            'newpassword.string' => 'La contraseña debe ser una cadena de texto.',
        ];
    }
}
