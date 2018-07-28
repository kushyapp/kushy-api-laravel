<?php

namespace KushyApi\Http\Requests;

use KushyApi\Http\Requests\ErrorValidatorBase;

class StoreInventory extends ErrorValidatorBase
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
            'product_id'          => 'string|max:255',
            'business_id'          => 'string|max:255',
            'description'   => 'max:420',
            'pricing_type'     => 'string',
            'list_price'      => 'integer',
            'sale_price'    => 'integer',
            'thc'      => 'integer',
            'cbd'     => 'integer',
            'cbn'       => 'integer',
            'status'      => 'boolean',
            'stock'      => 'integer',
            'stock'      => 'integer',
            'half_gram'      => 'integer',
            'one_gram'      => 'integer',
            'two_grams'      => 'integer',
            'eighth_ounce'      => 'integer',
            'quarter_ounce'      => 'integer',
            'half_ounce'      => 'integer',
            'ounce'      => 'integer',
            'quarter_pound'      => 'integer',
            'half_pound'      => 'integer',
            'pound'      => 'integer',
        ];
    }
}
