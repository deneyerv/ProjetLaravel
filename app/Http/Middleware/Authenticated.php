<?php
/**
 * Created by PhpStorm.
 * User: SHAW1N
 * Date: 1/1/2017
 * Time: 10:43 PM
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class Authenticated


{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::guard($guard)->guest())
        {
                if($request->ajax()|| $request->wantsJson())
                {
                    return response('Unauthorized access.', 401);
                }
                return redirect()->route('user.signin');
        }

        return $next($request);
    }


}