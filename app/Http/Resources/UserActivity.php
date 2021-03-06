<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserActivity extends JsonResource
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
            'section' => $this->section,
            'user' => $this->user,
            'item_id' => $this->item_id,
        ];
    }
}
