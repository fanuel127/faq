<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
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
    protected $redirectTo = '/home';

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
    
    public function login()
    {
        return view('auth.login');
    }

    public function Authenticate(Request $request)
    {
        // Validate the login credentials
        $input = $request->all();
        $this ->validate( $request,[
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

       if(auth()->attempt([ 'email'=>  $input["email"],'password'=>  $input["password"]]));
    
        if(Auth()->user()->role == 'admin')
        {
            return redirect()->route('admin.dashboard');
        }
        else
        if(Auth()->user()->role == 'user')
        {
            return redirect()->route('admin.dashboard');
        }
        // else
        // {
        //     return redirect()->route('home');
        // }
          else
        {
            return redirect()->route('auth.login')->with("error",'incorrect email or password');
        }

    }
}
