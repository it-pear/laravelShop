<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'code' => 'required|min:3|max:255|unique:products,code',
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3',
            'price' => 'required|min:1'
        ];

        if ($this->route()->named('products.update')) {
            $rules['code'] .= ',' . $this->route()->parameter('product')->id;
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
