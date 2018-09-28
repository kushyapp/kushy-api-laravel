<?php

namespace KushyApi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Auth\Access\AuthorizationException;

class StoreBookmarks extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->bookmarks()->where('post_id', $this->get('post_id'))->count() == 0;
    }

    /**
     * Displays message when authorization fails
     *
     * @return void
     */
    protected function failedAuthorization()
    {
        throw new AuthorizationException('Bookmark already exists.');
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
        ];
    }
}
