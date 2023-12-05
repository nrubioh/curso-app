<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVideogame extends FormRequest
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
            //
            'name_game'=>'required|min:4|max:10|',
        ];
    }

    public function attributes()
    {
        return[
            'name_game'=>'Videogame Name',
        ];
    }

    public function messages()
    {
        return[
            'name_game.required'=>'The gameName couldn`t be empty',
            'name_game.min'=>'The quantity of characters it should be at least 3',
            'name_game.max'=>'The max quantity of characters it should be of 10 or less', 
        ];
    }
}
