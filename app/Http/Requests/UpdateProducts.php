<?php

namespace KushyApi\Http\Requests;

use KushyApi\Http\Requests\ErrorValidatorBase;

class UpdateProducts extends ErrorValidatorBase
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
            'name'          => 'string|max:255',
            'newFeatured'   => 'nullable|image|mimes:jpeg,bmp,png|max:420',
            'newAvatar'     => 'nullable|image|mimes:jpeg,bmp,png|max:420',
        ];
    }
}
