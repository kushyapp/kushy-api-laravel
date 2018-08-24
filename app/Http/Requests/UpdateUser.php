<?php

namespace KushyApi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class UpdateUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /**
         * If we detect an "old password", check if it matches user's actual password
         */
        if($this->get('oldPassword'))
        {
            if($this->user()->password != Hash::make($this->get('oldPassword')))
            {
                return false;
            }
        }

        // Make sure current user ID is equal to URL -- or allow admin
        return $this->user()->id == $this->route('id') || $this->user()->isAdmin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'string|max:255',
            'email' => 'string|email|max:255',
            'newEmail' => 'nullable|string|email|max:255|unique:users,email',

            'password' => 'nullable|string|min:6|confirmed',
            'oldPassword' => 'nullable|string|min:6',

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
