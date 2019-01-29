<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | Ce contrôleur est responsable du traitement de la vérification du courrier électronique pour tout
    | utilisateur récemment inscrit à l'application. Les courriels peuvent aussi
    | être renvoyé si l'utilisateur n'a pas reçu le message électronique d'origine.
    |
    */

    use VerifiesEmails;

    /**
     * Redirection user après verification.
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
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
