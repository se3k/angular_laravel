<?php

namespace hortifruti\Http\Requests;

use hortifruti\Http\Requests\Request;

class StoreProdutoRequest extends Request
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
            'nome' => 'required|min:5',
            'ncm' => 'required|min:7',
            'tipo' => 'required',
        ];
    }
}
