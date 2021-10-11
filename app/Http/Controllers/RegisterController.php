<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $user = User::create(
            \request()->validate([
                'name' => ['required', 'max:255', 'min:3'],
                'username' => ['required', 'unique:users', 'max:255', 'min:4'],
                'email' => ['required', 'email', 'unique:users', 'max:255'],
                'password' => ['required', 'max:255', 'min:8']
            ])
        );

        auth()->login($user);

        return redirect(route('home'))->with(
            'success',
            'Your account has been created'
        );
    }
}
