<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordFormRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->guest();
    }

    public function rules()
    {
        return [
            'token' => ['required'],
            'email' => ['required', 'email:dns'],
            'password' => ['required', 'confirmed'],
        ];
    }
}
