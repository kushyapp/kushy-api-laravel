<?php

namespace KushyApi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',

            'drivers_license'   => 'nullable|string',
            'doctors_rec'   => 'nullable|string',
            'address'       => 'nullable|string|max:255',
            'city'       => 'nullable|string|max:255',
            'state'       => 'nullable|string|max:255',
            'postal_code'       => 'nullable|string|max:255',
            'country'       => 'nullable|string|max:255',
            'billing_first_name'       => 'nullable|string|max:255',
            'billing_last_name'       => 'nullable|string|max:255',
            'billing_address'       => 'nullable|string|max:255',
            'billing_city'       => 'nullable|string|max:255',
            'billing_country'       => 'nullable|string|max:255',
            'billing_state'       => 'nullable|string|max:255',
            'billing_postal_code'       => 'nullable|string|max:255',
            'billing_phone'       => 'nullable|string|max:255',

            'shipping_first_name'       => 'nullable|string|max:255',
            'shipping_last_name'       => 'nullable|string|max:255',
            'shipping_address'       => 'nullable|string|max:255',
            'shipping_city'       => 'nullable|string|max:255',
            'shipping_country'       => 'nullable|string|max:255',
            'shipping_state'       => 'nullable|string|max:255',
            'shipping_postal_code'       => 'nullable|string|max:255',
            'shipping_phone'       => 'nullable|string|max:255'
        ];
    }
}
