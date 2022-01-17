<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerReviewCreateRequest extends FormRequest
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
            'customer_name' => 'required',
            'customer_description' => 'required',
            'customer_image' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'customer_name.required' => 'Customer name is required',
            'customer_description.required' => 'Description is required',
            'customer_image.required' => 'Image is required'
        ];
    }
}