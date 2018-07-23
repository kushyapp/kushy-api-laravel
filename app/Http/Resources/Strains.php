<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Strains extends JsonResource
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
            'name' => $this->name,
            'slug' => $this->slug,
            'categories' => $this->categories,
            'avatar' => $this->getAvatar,
            'featured_img' => $this->getFeaturedImage,
            'description' => $this->description,
            'rating' => $this->rating,
            'featured' => $this->featured,
            'social' => $this->social,
        ];
    }
}
