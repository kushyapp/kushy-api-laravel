<?php

namespace KushyApi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProducts extends FormRequest
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
            'name'          => 'required|string|max:255',
            'newFeatured'   => 'nullable|image|mimes:jpeg,bmp,png|max:420',
            'newAvatar'     => 'nullable|image|mimes:jpeg,bmp,png|max:420',
            'category'      => 'required',
            'featured'      => 'boolean',
            'verified'      => 'boolean',
        ];
    }
}
