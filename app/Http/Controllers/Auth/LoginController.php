<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function username(){
        $login = request('login');
        // Cette fonction va ns permettre de retourner soit mail soit pseudo selon le choix de l'utilisateur
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'pseudo';
        // On associe la val field -mail ou pseudo- à la valeur entrer par le user
        request()->merge([$field => $login]); 
        return $field;
    }
}
