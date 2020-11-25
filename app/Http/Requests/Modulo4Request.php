<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Modulo4Request extends FormRequest
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
            'id_respustaverbos' => ['required'],
            'objetivo' => ['required'],
            'nombre_indicador' => ['required'],
            'lo_que_se_va_a_medir' => ['required'],
            'sobre_lo_que_se_va_a_medir' => ['required'],

        ];
    }

    public function messages()
    {
        return [
            'id_respustaverbos.required' => 'El :id_respustaverbos es obligatorio.',
            'objetivo.required' => 'El campo objetivo es obligatorio',
            'nombre_indicador' => 'El nombre del indicador es obligatorio',
            'lo_que_se_va_a_medir.required'=>'el campo es obligatorio',
            'sobre_lo_que_se_va_a_medir.required'=>'el campo es obligatorio',
        ];
    }
}
