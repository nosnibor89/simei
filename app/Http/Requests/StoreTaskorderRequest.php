<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreTaskorderRequest extends Request
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
        'title' => 'bail|required',
        'description' => 'bail|required',
        ];
    }

    public function messages()
    {
           return [
          'description.required' => 'Debe describir el problema para generar esta incidencia',
          'title.required'  => 'Debe darle un titulo o Asunto a la incidencia',

      ];

    }
}
