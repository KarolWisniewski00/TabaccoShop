<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Http\Request\EditUserRequest;
use App\Http\Request\EditUserPasswordRequest;

class AccountController extends UserController
{
    public function index()
    {
        return view('client.account.info.index', [
            'user' => User::where('id', '=', Session::get('login_id'))->get()->first()
        ]);
    }
    public function edit($slug)
    {
        switch ($slug) {
            case 'user':
                return view('client.account.info.edit.user', [
                    'user' => User::where('id', '=', Session::get('login_id'))->get()->first(),
                    'slug' => $slug
                ]);
                break;
            case 'password':
                return view('client.account.info.edit.password', [
                    'user' => User::where('id', '=', Session::get('login_id'))->get()->first(),
                    'slug' => $slug
                ]);
                break;
        }
    }
    public function update(Request $request, $slug)
    {
        switch ($slug) {
            case 'user':
                $this->validate($request, EditUserRequest::rules());
                $result = $this->updateUser($request);
                if ($result){
                    return redirect()->route('account.info.index')->with('success', 'Edycja konta zakońcona.');
                }else{
                    return redirect()->route('account.info.edit','password')->with('fail', "Złe hasło!");
                }
                break;
            case 'password':
                $this->validate($request, EditUserPasswordRequest::rules());
                $result = $this->updateUserPassword($request);
                if ($result){
                    return redirect()->route('account.info.index')->with('success', 'Edycja konta zakońcona.');
                }else{
                    return redirect()->route('account.info.edit','password')->with('fail', "Złe hasło!");
                }
                break;
        }
    }
}
