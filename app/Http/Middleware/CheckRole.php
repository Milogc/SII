<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {

        var_dump($request->user()->rol);
        if ( $request->user()->rol != 'Investigador' ) {
            // Redirect...
            return redirect('home');
        }

        return $next($request);
    }}
