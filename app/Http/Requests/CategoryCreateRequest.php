<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryCreateRequest extends FormRequest
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
            'transmission_name' => 'max:255',
            'power_name' => 'max:255',
        ];
    }

    public function messages()
    {
        return [
            'transmission_name' => 'One name is required',
            'power_name' => 'One name is required'
        ];
    }
}