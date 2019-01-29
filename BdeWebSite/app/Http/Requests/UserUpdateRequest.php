<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

  /**
  * Request pour Update un utilisateur
  */
class UserUpdateRequest extends FormRequest
{

    public function authorize()
  {
    return true;
  }

  /**
  * Régle pour update un utilisateur
  */
  public function rules()
  {
    $id = $this->user;
    return [
      'name' => 'required|max:255|unique:users,name,' . $id,
      'email' => 'required|email|max:255|unique:users,email,' . $id
    ];
  }

}
