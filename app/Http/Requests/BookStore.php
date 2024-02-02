<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookStore extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'adv_name'    => ['required','min:6'],
            'oab_number'  => ['required'],
            'entrance'    => ['required'],
            'prisioner'   => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'adv_name.required'   => 'O campo nome do advogado é obrigatório',
            'adv_name.min'        => 'O campo nome deve conter no mínimo 6 letras',
            'oab_number.required' => 'O campo número da OAB é obrigatório',
            'entrance.required'   => 'O campo entrada é obrigatório',
            'prisioner.required'  => 'O campo nome do interno é obrigatório'
        ];
    }

}
