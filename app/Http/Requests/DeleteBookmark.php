<?php

namespace KushyApi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Auth\Access\AuthorizationException;

class DeleteBookmark extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $checkUserOwns = $this->user()->bookmarks()->where([
            'id' => $this->route('id')
        ])->count() > 0;

        return true;
    }

    /**
     * Displays message when authorization fails
     *
     * @return void
     */
    protected function failedAuthorization()
    {
        throw new AuthorizationException("User doesn't own bookmark");
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
