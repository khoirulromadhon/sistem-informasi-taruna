<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('layouts.auth.register.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname'  => 'required',
            'email'     => 'required',
            'role'      => 'required',
            'username'  => 'required',
            'password'  => 'required|min:8'
        ]);

        $user = new User();
        $user->firstname    = $request->input('firstname');
        $user->lastname     = $request->input('lastname');
        $user->email        = $request->input('email');
        $user->role         = $request->input('role');
        $user->username     = $request->input('username');
        $user->password     = $request->input('password');
        $user->save();

        return redirect('/login')->with('success', 'Registrasi Berhasil!!!');
    }
}
