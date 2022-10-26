<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|max:255|min:3|unique:categories,id,'.$this->category?->id,
            'image' => $imageValidationRules
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A title is required',
            'name.unique' => 'Database check kore dekheci eta ace',
        ];
    }

}
