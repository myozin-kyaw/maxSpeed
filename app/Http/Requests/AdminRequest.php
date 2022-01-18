<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'name' => 'required:User|max:255',
            'email' => 'required',
            'password' => 'required',
            'is_admin' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Admin name is required',
            'email.required' => 'Email is required',
            'password.required' => 'password is required',
            'is_admin.required' => 'Is Admin ? is required',
        ];
    }
}
