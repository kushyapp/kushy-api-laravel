<?php

namespace KushyApi\Http\Requests;

use KushyApi\Http\Requests\ErrorValidatorBase;

class StoreDeals extends ErrorValidatorBase
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
            'name'          => 'string|max:255',
            'featured_img'   => 'string',
            'city'     => 'string',
            'state'     => 'string',
            'postal_code'     => 'string',
            'country'     => 'string',
        ];
    }
}
