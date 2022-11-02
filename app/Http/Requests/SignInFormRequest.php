<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignInFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        //логиниться может только гость
        return auth()->guest();
    }

    public function rules()
    {
        return [
            'email' => ['required', 'email:dns'],
            'password' => ['required', ''],
        ];
    }
}
