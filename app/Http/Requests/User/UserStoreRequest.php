<?php
/*--------------------- Isto foi criado ao usar o comando php artisan make:request User/UserStoreRequest --------------*/
namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //Auth::check(); //Isto é usado para só as pessoas autorizadas alterarem ou criarem dados ou remover; depois é preciso programar o check
        //return false;

        return true; //qualquer pessoa poderia alterar os dados
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array //aqui é onde metemos as regras
    {
        return [
            'name'=>'required|string',
            'email'=>'required|string|unique:users|email', 
            'password'=>'required|string|min:6|max:10'
        ];
    }

    public function messages() //criar esta nova função, mensagens; posso criar uma msg para todos os requireds, ou para cada campo.
    { 
        return [
            'name.required'=>'O campo nome é obrigatório',
            'name.string'=>'O campo nome tem de ser texto',
            'email.unique'=>'O email já existe na base de dados',
            'email.string'=>'O email tem de ser texto',
            'email.required'=>'O campo email é obrigatório',
            'password.required'=>'O campo password é obrigatório',
            'password.min'=>'A palavra-passe tem de ter entre 6 e 10 caracteres',
            'password.max'=>'A palavra-passe tem de ter entre 6 e 10 caracteres'
        ];
    }

}
