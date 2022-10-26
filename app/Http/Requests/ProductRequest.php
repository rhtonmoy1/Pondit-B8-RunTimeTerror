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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $imageValidationRules = 'mimes:png,jpg,jpeg,gif';

        if($this->isMethod('post')){
            $imageValidationRules  = 'required|'.$imageValidationRules;
        }

        return [
            'category_id' => 'exists:categories,id',
            'title' => 'required|max:255|min:3|unique:products,id,'.$this->product?->id,
            'image' => $imageValidationRules,
            'description' => 'required|min:5|max:1000'
        ];
    }
}
