<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class addComments extends FormRequest
{
    /**
     * Déterminez si l'utilisateur est autorisé à faire cette demande.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Obtenez les règles de validation qui s'appliquent à la demande.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'comments' => 'required|max:250'
        ];
    }
}
