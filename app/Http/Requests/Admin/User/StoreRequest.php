<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
//            'password' => 'required|string',
            'role' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле необходимо заполнить',
            'name.string' => 'Поле должно быть строкой',
            'email.required' => 'Поле необходимо заполнить',
            'email.string' => 'Поле должно быть строкой',
            'email.email' => 'Поле соответствовать формату mail@mail.com',
            'email.unique' => 'Пользователь с таким email уже существует',
//            'password.required' => 'Поле необходимо заполнить',
//            'password.string' => 'Поле должно быть строкой',
        ];
    }
}
