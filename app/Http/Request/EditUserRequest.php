<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;

class EditUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Session::get('login_id'),
            'password' => 'nullable|min:8|max:255',
            'password_confirm' => 'nullable|min:8|same:password|max:255'
        ];
    }
}
