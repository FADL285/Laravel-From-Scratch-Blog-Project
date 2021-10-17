<?php
/**
 * Author: Mohamed Fadl <Mohamed.Fadl2852@gmail.com>
 * Date: 10/17/2021
 * Time: 11:57 AM
 */

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter): RedirectResponse
    {
        // validation
        request()->validate([
            'email' => ['required', 'email']
        ]);

        try {
            $newsletter->subscribe(request('email'));
        } catch (\Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'This email could not be added to our newsletter.'
            ]);
        }

        return back()->with(
            'success',
            'You are now signed up for our newsletter.'
        );
    }
}
