<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Bookmarks extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->post_id,
            'slug' => $this->user_id,
        ];
    }
}
