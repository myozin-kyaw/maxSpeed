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
            'email' => 'required|max:255',
            'password' => 'required|max:255',
            'is_admin' => 'required|max:255',
        ];
    }
    public function messages()
    {
        return [
            'name' => 'Admin name is required',
            'email' => 'Email is required',
            'password' => 'password is required',
            'is_admin' => 'Is Admin ? is required',
        ];
    }
}
