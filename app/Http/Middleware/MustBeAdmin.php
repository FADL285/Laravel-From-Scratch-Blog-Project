<?php
/**
 * Author: Mohamed Fadl <Mohamed.Fadl2852@gmail.com>
 * Date: 10/21/2021
 * Time: 10:58 PM
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MustBeAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()?->username !== 'fadl') {
            abort(Response::HTTP_FORBIDDEN);
        }
        return $next($request);
    }
}
