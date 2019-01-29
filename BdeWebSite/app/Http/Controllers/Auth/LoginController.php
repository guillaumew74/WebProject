<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | Ce contrôleur gère l’authentification des utilisateurs pour l’application et
    | les rediriger vers votre écran d'accueil. Le contrôleur utilise un trait
    | pour fournir facilement ses fonctionnalités à vos applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * redirection utilisateur après login
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * création d'une nouvelle instance de controller
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
