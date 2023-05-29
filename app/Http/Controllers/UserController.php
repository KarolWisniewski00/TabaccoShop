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
        if ($request->password != null) {
            User::where('id', '=', Session::get('login_id'))->update([
                'password' => Hash::make($request->password),
            ]);
        }
    }
    public function updateUserOtherThanPassword($request)
    {
        User::where('id', '=', Session::get('login_id'))->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
        ]);
    }
    public function updateUser($request)
    {
        $this->updateUserOtherThanPassword($request);
        $this->updateUserPassword($request);
    }
}
