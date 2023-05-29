<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Http\Request\EditUserRequest;
class AccountController extends UserController
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
    public function update(EditUserRequest $request)
    {
        $this->updateUser($request);
        return redirect('account')->with('success', 'Edycja konta zakońcona.');
    }
}
