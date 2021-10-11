<?php
/**
 * Author: Mohamed Fadl <Mohamed.Fadl2852@gmail.com>
 * Date: 10/11/2021
 * Time: 5:26 PM
 */

namespace App\Http\Controllers;

class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect(route('home'))->with('success', 'Good bye!');
    }
}
