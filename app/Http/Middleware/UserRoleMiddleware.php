<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     return $next($request);


    //     if (Auth::check()) {
    //         $user = Auth::user();
    //         $role = $user->role; // Assuming you have a role property on the User model

    //         switch ($role) {
    //             case 'Admin':
    //                 return redirect()->route('admin.dashboard');
    //             case 'Gestionnaire':
    //                 return redirect()->route('user.dashboard');
    //             default:
    //                 return $next($request);
    //         }
    //         return response()->json(["you dont have access to this page"]);
    //     }
    // }
    public function handle(Request $request, Closure $next, $role)
    {
        if (Auth::check() && Auth::user()->role == $role) {
            return $next($request);
        }

        return redirect('/dashboard'); // Redirige vers la page d'accueil si l'utilisateur n'a pas le bon rôle
    }
}
