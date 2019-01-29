<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | Ce contrôleur est responsable de la gestion des demandes de réinitialisation du mot de passe
    | et utilise un trait simple pour inclure ce comportement. Vous êtes libre de
    | explorez ce trait et substituez toutes les méthodes que vous souhaitez modifier.
    |
    */

    use ResetsPasswords;

    /**
     * Redirection user après reset password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Création d'une nouvelle instance de controlleur.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
