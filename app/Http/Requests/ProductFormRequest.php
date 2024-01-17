<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'image' => 'image,nullable',
            'org_price' => 'required|numeric',
            'sell_price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'brand' => 'required',
            'shape' => 'required'
        ];
    }
}
