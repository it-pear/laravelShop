<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ];

        return $rules;
    }
    public function messages()
    {
        return [
            'required' => 'Данное поле необходимо заполнить',
            'email.unique' => 'Данное поле должно быть уникальным',
            'min' => 'Данное поле не должно содержать меньше :min символов'
        ];
    }
}
