<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

  /**
  *Request pour créer un utilisateur
  */
class UserCreateRequest extends FormRequest
{

    public function authorize()
  {
    return true;
  }

  /**
  * Règle pour créer un nouveau utilisateur
  */
  public function rules()
  {
    return [
      'name' => 'required|max:255|unique:users',
      'lastName' => 'required | max:255',
      'location' => 'required| max:255',
      'state' => 'required|max:255',
      'email' => 'required|email|max:255|unique:users',
      'password' => 'required|confirmed|min:6'
    ];
  }

}

