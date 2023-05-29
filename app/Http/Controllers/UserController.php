<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function updateUserPassword($request)
    {
        $user =  User::where('id', '=', Session::get('login_id'))->first();
        if (Hash::check($request->password_old, $user->password)) {
            $result = User::where('id', '=', Session::get('login_id'))->update([
                'password' => Hash::make($request->password),
            ]);
            return $result;
        }
    }
    public function updateUser($request)
    {
        $result = User::where('id', '=', Session::get('login_id'))->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
        ]);
        return $result;
    }
}
