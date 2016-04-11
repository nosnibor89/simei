<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreFailRequest extends Request
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
      'name' => 'bail|required|min:3|max:100'
      ];
    }

    public function messages()
    {
        return [
            'name.min' => 'El campo nombre debe contener al menos 3 caracteres',
        ];
    }
}
