<?php

namespace KushyApi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategories extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->isAdmin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => 'required|unique:categories|string|max:255',
            'section'       => 'nullable|string|max:255',
            'parent'        => 'nullable|integer|exists:categories,id,1',
        ];
    }
}
