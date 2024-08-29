<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    // Redirection après connexion
    // protected function redirectTo()
    // {
    //     return '/dashboard';
    // }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        // $remember = $request->has('remember_me');

        if (Auth::attempt($credentials,)) {
            $users = Auth::user();
            if ($users->status === 1) {
                return redirect()->intended('/dashboard');
            }
            // Authentification réussie

            else {
                return back()->withErrors([
                    'email' => ' Demande a L\'Administrateur de vous activer.'
                ]);
            }
        } else {
            // Authentification échouée
            return back()->withErrors([
                'email' => 'L\'email ne correspond pas.',
                'password' => 'Le mot de passe ne correspond pas.',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
