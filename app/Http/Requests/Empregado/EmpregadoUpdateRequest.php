<?php

namespace App\Http\Requests\Empregado;

use Illuminate\Foundation\Http\FormRequest;

class EmpregadoUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'nome'=>'required|string',
            'morada'=>'required|string',
            'localidade'=>'required|string',
        ];
    }
    public function messages()
    {
        return [
            'nome.required'=>'O campo nome é obrigatório',
            'nome.string'=>'O campo nome tem de ser texto',
            'morada.required'=>'O campo morada é obrigatório',
            'morada.string'=>'O campo morada tem de ser texto',
            'localidade.required'=>'O campo localidade é obrigatório',
            'localidade.string'=>'O campo localidade tem de ser texto',
        ];
    }
}
