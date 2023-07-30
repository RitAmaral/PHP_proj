<?php

namespace App\Http\Requests\Empregado;

use Illuminate\Foundation\Http\FormRequest;

class EmpregadoStoreRequest extends FormRequest
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
            'password'=>'required|string|min:6|max:10'
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
            'password.required'=>'O campo password é obrigatório',
            'password.min'=>'A palavra-passe tem de ter entre 6 e 10 caracteres',
            'password.max'=>'A palavra-passe tem de ter entre 6 e 10 caracteres'
        ];
    }
}
