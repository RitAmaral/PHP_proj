<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name'=>'required|string',
            'email'=>'required|string' 
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'O campo nome é obrigatório',
            'name.string'=>'O campo nome tem de ser texto',
            'email.string'=>'O email tem de ser texto',
            'email.required'=>'O campo email é obrigatório'
        ];
    }
}
