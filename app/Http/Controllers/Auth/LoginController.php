<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

    protected function authenticated(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        $users = Auth::user();

        // Vérifie si le statut de l'utilisateur est égal à 1
        if ($users->status === 1) {
            if (Auth::attempt($credentials)) {
                return redirect()->intended('/dashboard');
            } else {
                // Authentification échouée
                return back()->withErrors([
                    'email' => 'L\'email ne correspond pas.',
                    'password' => 'Le mot de passe ne correspond pas.',
                ]);
            }
        } else {
            // Déconnecte l'utilisateur s'il est déjà connecté
            Auth::logout();

            // Redirige vers la page de connexion avec un message d'erreur
            return redirect('/login')->withErrors([
                'email' => 'Votre compte n\'est pas activé. Veuillez contacter l\'administration.',
            ])->withInput();
        }
    }


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
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            // Récupérer l'utilisateur authentifié
            $users = Auth::user();
            $status = $users->status;

            if ($status == 1) {
                // L'utilisateur est actif, redirection vers le tableau de bord
                return redirect()->intended('/dashboard');
            } else {
                // L'utilisateur n'est pas actif, afficher un message personnalisé
                Auth::logout(); // Déconnexion de l'utilisateur
                return back()->withErrors(['email' => 'Votre compte n\'est pas encore activé. Veuillez contacter l\'administrateur.']);
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
