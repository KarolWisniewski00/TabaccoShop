<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|max:255',
            'password_confirm' => 'required|min:8|same:password|max:255'
        ];
    }
}
