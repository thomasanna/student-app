<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function redirectTo(){
        // User role
        $user = Auth::user();
       // echo "<pre>"; print_r($user); exit("hhh");
        if($user->hasRole('superadmin'))
            {
                return route('dashboard');
            }
            else
            {
                return '/';
            }
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showAdminLoginForm()
    {
        return view('auth.login');
    }

    public function logout(Request $request)
    {
        $user = Auth::user();
        if($user->hasRole('superadmin'))
        {
            Auth::logout();
            return redirect('/');
        }
        else
        {
            Auth::logout();
            return redirect('/');
        }
    }
}
