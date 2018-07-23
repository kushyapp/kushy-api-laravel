<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Reviews extends JsonResource
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
            'status' => $this->status,
            'post_id' => $this->post_id,
            'user_id' => $this->user_id,
            'rating' => $this->rating,
            'useful' => $this->useful,
            'dank' => $this->dank,
            'funny' => $this->funny,
            'review' => $this->review,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
