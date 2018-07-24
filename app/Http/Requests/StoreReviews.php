<?php

namespace KushyApi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviews extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'post_id'          => 'string|max:255',
            'user_id'          => 'string|max:255',
            'review'   => 'string',
            'rating'     => 'integer|max:5',
            'useful'     => 'integer',
            'dank'     => 'integer',
            'funny'     => 'integer',
        ];
    }
}
