<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{

    public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'name' => 'required|max:255|unique:users',
      'lastName' => 'required | max:255',
      'location' => 'required| max:255',
      'email' => 'required|email|max:255|unique:users',
      'password' => 'required|confirmed|min:6'
    ];
  }

}

