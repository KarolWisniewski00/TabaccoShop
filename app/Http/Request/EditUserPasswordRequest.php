<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;

class EditUserPasswordRequest extends FormRequest
{
    public static function rules()
    {
        return [
            'password_old' => 'required|min:8|max:255',
            'password' => 'required|min:8|max:255',
            'password_confirm' => 'required|min:8|same:password|max:255'
        ];
    }
}
