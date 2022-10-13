<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepoimentoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'title'=>'required',
            'description'=>'required',
            'date'=>'required'
        ];

    }

    public function messages(){
        return [
            'title.required' => 'Coloque o Titulo',
            'description.required' => 'Coloque a Descrição',
            'date.required' => 'Coloque a Data'
        ];
    }
}
