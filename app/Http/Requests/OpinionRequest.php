<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OpinionRequest extends FormRequest
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
            'nombre_O'=>'required|min:4|max:100',
            'email_O'=>'required|min:5|max:100',
            'asunto_O'=>'required|min:4|max:100',
            'mensaje_O'=>'required|min:4|max:500',
        ];
    }
}
