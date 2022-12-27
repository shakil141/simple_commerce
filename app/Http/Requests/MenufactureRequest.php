<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenufactureRequest extends FormRequest
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
            'manufacture_name' => 'required|unique:tbl_menufactures',
            'manufacture_description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'manufacture_name.required' => 'Menufacture name is required !',
            'manufacture_description.required' => 'Menufacture description is required !'
        ];

    }
}
