<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()) {
            foreach (Auth::user()->roles->toArray() as $role){
                if($role['pivot']['role_id'] === Role::ADMIN_ROLE_ID){
                    return $next($request);
                }
            }
        }

        return redirect('/');
    }
}
