<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         return route('login');
    //     }
    // }
    public function redirectTo($request)
    {
        $request->validate([

            'email' => 'required|email', 'max:255', 'unique:users',
            'password' => 'required', 'string', 'min:8', 'confirmed',

        ]);
         // Attempt to log the user in
         if (Auth::check()) {

            // Get the user's role
            $role = Auth::user()->role;

            // Redirect the user based on their role
            if ($role == 'Admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($role == 'Gestionnaire') {
                return redirect()->route('gestionnaire.dashboard');

            } else {
                // If the user's role is not recognized, log them out and redirect to the login page
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect('/login');
            }
        }

        // If the login fails, redirect back to the login page with an error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
