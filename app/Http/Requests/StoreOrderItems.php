<?php

namespace KushyApi\Http\Requests;

use KushyApi\Http\Requests\ErrorValidatorBase;

class StoreOrderItems extends ErrorValidatorBase
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
            'order_id'          => 'string|max:255',
            'inventory_id'          => 'string|max:255',
            'product_type'   => 'string',
            'count'     => 'integer',
        ];
    }
}
