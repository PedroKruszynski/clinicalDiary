<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
            'name'      => 'required|max:255|string',
            'cpf'       => 'required|max:14|string',
            'telephone' => 'required|max:15|string',
            'date'      => 'required|date',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'         => 'O campo nome é obrigatorio',
            'name.max'              => 'O campo nome possui um maximo de 255 caracteres',
            'cpf.required'          => 'O campo cpf é obrigatorio',
            'cpf.max'               => 'O campo cpf possui um maximo de 14 caracteres',
            'telephone.required'    => 'O campo telefone é obrigatorio',
            'telephone.max'         => 'O campo telefone possui um maximo de 255 caracteres',
            'date.date'             => 'O campo data precisa ser uma data valida',
        ];
    }
}
