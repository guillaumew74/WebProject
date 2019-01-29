<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | Ce contrôleur gère l’enregistrement de nouveaux utilisateurs ainsi que leurs
    | validation et création. Par défaut, ce contrôleur utilise un trait pour
    | fournir cette fonctionnalité sans nécessiter de code supplémentaire.
    |
    */

    use RegistersUsers;

    /**
     * Redirection utilisateur après connexion.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Création d'une nouvelle instance de controller.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Obtenez un validateur pour une demande d'inscription entrante.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6','regex:/[a-z]/','regex:/[A-Z]/','regex:/[0-9]/', 'confirmed'],
        ]);
    }

    /**
     * Créez une nouvelle instance d'utilisateur après un enregistrement valide.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'lastName' => $data['lastName'],
            'location' => $data['location'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'state' => isset($data['state']),
        ]);
    }
}
