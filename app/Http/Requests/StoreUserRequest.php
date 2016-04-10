<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
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
            //
        'name' => 'bail|required|min:5|max:100',
        'email' => 'bail|required|email|min:5|max:100',
        'password' => 'bail|required|min:8',
        ];
    }

    public function messages()
    {
           return [
          'name.min' => 'El campo nombre debe contener al menos 5 caracteres',
          'name.required'  => 'Se requiere un nombre',
          'name.max'  => 'El nombre no puede sobrepasar 100 caracteres',
      ];

    }
}
