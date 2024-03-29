<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'code' => 'required|min:3|max:255|unique:categories,code',
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3'
        ];

        if ($this->route()->named('categories.update')) {
            $rules['code'] .= ',' . $this->route()->parameter('category')->id;
        } 

        return $rules;
    }
    public function messages()
    {
        return [
            'required' => 'поле обязательно для ввода',
            'min' => 'Поле :attribute должно содержать минимум :min символов',
            'code.min' => 'Поле код должно содержать не менее :min символов',
            'name.min' => 'Поле название должно содержать не менее :min символов',
            'code.unique' => 'Поле код должно быть уникальным'
        ];
    }
}
