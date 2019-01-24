<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class formRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:20',
            'description' => 'required|max:250',
            'date' => 'required',

            'image' => 'required|image|dimensions:min_width,min_height=100',
            'email' => 'required|email',
            'date' => 'required',
            'payable' => 'required'
        ];
    }


}
