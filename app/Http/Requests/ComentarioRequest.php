<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComentarioRequest extends FormRequest
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
            'id_C' => 'min:1',
            'nombre_C'=>'required|min:4|max:100',
            'email_C'=>'required|min:4|max:100',
            'comentario_C'=>'required|min:4|max:500',
        ];
    }
}
