<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class SignUpFormRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->guest();
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:1', 'max:30'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'confirmed', Password::defaults()],
            // Password::defaults() - сделаем дефолтные настройки валидации в в сервис провайдере

        ];
    }
    
    // перед валидацией емаил к нижнему регистру + trim

    public function prepareForValidation()
    {
        $this->merge([
            'email' => str(request('email'))
                ->squish() //trim
                ->lower()
                ->value() //возвращаем строку а не объект
        ]);
    }
    
}


