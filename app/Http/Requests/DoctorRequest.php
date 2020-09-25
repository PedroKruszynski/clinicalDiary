<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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
            'crm'       => 'required|size:7|string',
            'telephone' => 'required|max:15|string',
            'date'      => 'required|date',
            'specialty' => 'required|max:255|string',
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
            'crm.required'          => 'O campo crm é obrigatorio',
            'crm.size'              => 'O campo crm precisa possuir 7 caracteres',
            'telephone.required'    => 'O campo telefone é obrigatorio',
            'telephone.max'         => 'O campo telefone possui um maximo de 255 caracteres',
            'specialty.required'    => 'O campo especialidade é obrigatorio',
            'specialty.max'         => 'O campo especialidade precisa possuir um maximo de 255 caracteres',
            'date.date'             => 'O campo data precisa ser uma data valida',
        ];
    }
}
