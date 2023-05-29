<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Request\LoginRequest;
use App\Http\Request\RegisterRequest;
use Illuminate\Http\Request;

class AuthController extends LoginController
{
    public function login()
    {
        return view('client.auth.login');
    }
    public function store(LoginRequest $request)
    {
        return $this->userCheck($request, User::where('email', '=', $request->email)->first());
    }
    public function register()
    {
        return view('client.auth.register');
    }
    public function create(RegisterRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->admin = false;
        $result = $user->save();

        if ($result) {
            return redirect()->route('login')->with('success', 'Rejestracja zakończona powodzeniem!');
        } else {
            return redirect()->route('register')->with('fail', 'Error!');
        }
    }
    public function logout()
    {
        if (Session::has('login_id')) {
            Session::pull('login_id');
            Session::pull('admin');
            return redirect('/');
        }
    }
}
