<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'stock' => 'required|integer',
            'image' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'The name field is required',
            'price.required' => 'The price field is required',
            'description.required' => 'The description field is required',
            'stock.required' => 'The stock field is required',
        ];
    }
}
