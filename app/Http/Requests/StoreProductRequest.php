<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return true;
        return auth('admin')->check();

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            "name" => ['required', 'min:3'],
            "category_id" => ['required', 'exists:categories,id'],
            "image" => ['sometimes', 'image'],
            'description' => ['required', 'min:3'],
            'price' => ['required'],
            'size' => ['required'],
            'quantity' => ['required'],
            'status' => ['boolean'],
        ];
    }
}
