<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => 'sometimes|string|max:255',
            'price' => 'sometimes|numeric',
            'description' => 'sometimes|string',
            'stock' => 'sometimes|integer',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    public function messages(): array
    {
        return [
            'name.string|max:255' => 'The name field must be a string and less than 255 characters',
            'price.numeric' => 'The price field must be a number',
            'description.string' => 'The description field must be a string',
            'stock.integer' => 'The stock field must be an integer',
            'image.image' => 'The image field must be an image',
            'image.mimes' => 'The image field must be a valid image format (jpeg, png, jpg, gif, svg)',
            'image.max' => 'The image field must be less than 2048KB',
        ];
    }
}
