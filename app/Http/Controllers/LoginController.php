<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function sessionUserStart($request, $user)
    {
        $request->session()->put('login_id', $user->id);
        if ($user->admin == true) {
            $request->session()->put('admin', $user->admin);
        }
    }
    public function passwordUserCheck($request, $user)
    {
        if (Hash::check($request->password, $user->password)) {
            $this->sessionUserStart($request, $user);
            return redirect()->route('index');
        } else {
            return redirect()->route('login')->with('fail', "Złe hasło!");
        }
    }
    public function userCheck($request,$user){
        if ($user) {
            return $this->passwordUserCheck($request,$user);
        } else {
            return redirect()->route('login')->with('fail', 'Nie ma takiego użytkownika!');
        }
    }
}
