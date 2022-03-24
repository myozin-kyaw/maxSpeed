<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class vehicleEditRequest extends FormRequest
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
            'brand' => 'required:popular_vehicles|max:255',
            'model' => 'required',
            'price' => 'required',
            'production_year' => 'required',
            'speed' => 'required',
            'transmission_id' => 'required',
            'power_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'brand' => 'Brand is required',
            'model' => 'Model is required',
            'price' => 'Price is required',
            'production_year' => 'Production Year is required',
            'speed' => 'Speed is required',
            'transmission_id' => 'Transmission is required',
            'power_id' => 'Power is required'
        ];
    }
}