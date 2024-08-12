<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);


        if (Auth::check()) {
            $user = Auth::user();
            $role = $user->role; // Assuming you have a role property on the User model

            switch ($role) {
                case 'admin':
                    return redirect()->route('admin.dashboard');        
                case 'user':
                    return redirect()->route('user.dashboard');
                default:
                    return $next($request);
            }
            return response()->json(["you dont have access to this page"])
        }

     
}

    }

