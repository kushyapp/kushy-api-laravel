<?php

namespace KushyApi\Http\Requests;

use KushyApi\Http\Requests\ErrorValidatorBase;

class StorePhotos extends ErrorValidatorBase
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->isBusiness;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'driver'          => 'string|max:255',
            'image'   => 'required|string',
            'caption'   => 'string',
            'user_id'   => 'string',
            'post_id'   => 'string',
            'featured'     => 'boolean',
            'status'     => 'boolean',
        ];
    }
}
