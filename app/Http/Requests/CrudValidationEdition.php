<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrudValidationEdition extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
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
            'nome' => 'required|min:3 ',
            'sobrenome' => 'required',
            'email' => 'required',
            'data_nascimento' => 'required',
            'celular' => 'required',
            'cep' => 'required',
            'endereco' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
        ];
    }

    public function messages()
    {
        return [
          'nome.required' => 'Preencher o campo :attribute!',
          'nome.min' => 'O campo :attribute precisa ter no mínimo 3 letras!',
          'sobrenome.required' => 'Preencher o campo :attribute!',
          'email.required' => 'Preencher o campo :attribute!',
          'data_nascimento.required' => 'Preencher o campo :attribute!',
          'celular.required' => 'Preencher o campo :attribute!',
          'cep.required' => 'Preencher o campo :attribute!',
          'endereco.required' => 'Preencher o :attribute!',
          'numero.required' => 'Preencher o campo :attribute!',
          'bairro.required' => 'Preencher o campo :attribute!',
          'cidade.required' => 'Preencher o campo :attribute!',
          'uf.required' => 'Preencher o campo :attribute!',
        ];
    }


}
