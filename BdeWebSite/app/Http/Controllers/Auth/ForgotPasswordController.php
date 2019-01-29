<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | Ce contrôleur est responsable de la gestion des emails de réinitialisation de mot de passe et
    | inclut un trait qui aide à envoyer ces notifications de
    | votre application à vos utilisateurs. N'hésitez pas à explorer ce trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Création d'une nouvelle instance de controller
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
