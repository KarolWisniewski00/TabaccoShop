<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        return view('client.account.info.index', [
            'user' => User::where('id', '=', Session::get('login_id'))->get()->first()
        ]);
    }
    public function edit()
    {
        return view('client.account.info.edit', [
            'user' => User::where('id', '=', Session::get('login_id'))->get()->first()
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:users,email,' . Session::get('login_id'),
            'password' => 'nullable|min:8',
            'password_confirm' => 'nullable|min:8|same:password'
        ]);

        User::where('id', '=', Session::get('login_id'))->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
        ]);

        if ($request->password != null) {
            User::where('id', '=', Session::get('login_id'))->update([
                'password' => Hash::make($request->password),
            ]);
        }

        return redirect('account')->with('success', 'Edycja konta zakońcona powodzeniem!');
    }
}
