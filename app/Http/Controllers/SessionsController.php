<?php
/**
 * Author: Mohamed Fadl <Mohamed.Fadl2852@gmail.com>
 * Date: 10/11/2021
 * Time: 5:26 PM
 */

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller {

    public function create()
    {
        return view('sessions.create');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect(route('home'))->with('success', 'Good bye!');
    }

    public function store()
    {
        // input validation
        $validate = request()->validate([
            'email'    => ['required', 'email'],
            'password' => ['required']
        ]);

        // auth failed
        if (!auth()->attempt($validate)) {
            throw ValidationException::withMessages([
                'error' => 'These credentials do not match our records.'
            ]);
        }

        //attempt to authenticate and login the user
        session()->regenerate();

        return redirect(route('home'))->with('success', 'Welcome back!');
    }
}
