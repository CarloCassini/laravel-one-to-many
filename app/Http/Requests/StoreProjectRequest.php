<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:50'],
            // 'git_url' => [],
            'description' => ['string']
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'il nome è obbligatiorio',
            'name.string' => 'il nome deve essere un testo',
            'name.max' => 'il nome deve essere max di 50 caratteri',

            // 'git_url.string' => ' url deve essere di tipo testo',


            'description.string' => 'la descrizione deve essere di tipo testo',
        ];
    }
}