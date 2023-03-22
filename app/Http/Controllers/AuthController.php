<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login_page()
    {
        return view('auth.login_page');
    }
    public function login_form(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = User::where('email', '=', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('login_id', $user->id);
                if ($user->admin == true) {
                    $request->session()->put('admin', $user->admin);
                }
                return redirect('/');
            } else {
                return redirect('/login')->with('fail', "Złe hasło!");
            }
        } else {
            return redirect('/login')->with('fail', 'Nie ma takiego użytkownika!');
        }
    }
    public function register_page()
    {
        return view('auth.register_page');
    }
    public function register_form(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'password_confirm' => 'required|min:8|same:password'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->admin = false;
        $res = $user->save();

        if ($res) {
            return redirect('/login')->with('success', 'Rejestracja zakończona powodzeniem!');
        } else {
            return redirect('/')->with('fail', 'Error!');
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
