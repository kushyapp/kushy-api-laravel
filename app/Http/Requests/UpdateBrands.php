<?php

namespace KushyApi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBrands extends FormRequest
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
            'meta.email'    => 'email_address',
            'latitude'      => 'integer',
            'longitude'     => 'integer',
            'address'       => 'string|max:255',
            'city'          => 'string|max:255',
            'state'         => 'string|max:255',
            'postal_code'   => 'integer|max:10',
            'country'       => 'string|max:255',
            'featured'      => 'boolean',
            'verified'      => 'boolean',
        ];
    }
}
