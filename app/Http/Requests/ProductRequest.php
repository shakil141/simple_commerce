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
        return [
            'product_name' => 'required|unique:tbl_products',
            'product_short_description' => 'required|max:100',
            'product_long_description' => 'required|max:200',
            'product_price' => 'required|numeric',
            'product_image' => 'required',
            'product_size' => 'required',
            'product_color' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'product_name.required' => 'Product Name is Required',
            'product_short_description.required' => 'Product Short Description is Required',
            'product_long_description.required' => 'Product Long Description is Required',
            'Product_price.required' => 'Product price is Required',
            'product_size.required' => 'Product Size is Required',
            'product_color.required' => 'Product Color is Required',
        ];
    }
}
