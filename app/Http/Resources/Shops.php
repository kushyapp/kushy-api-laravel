<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Shops extends JsonResource
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
            'verified' => $this->verified,
            'location' => [
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
                'address' => $this->address,
                'state' => $this->state,
                'city' => $this->city,
                'postal_code' => $this->postal_code,
                'country' => $this->country,
            ],
            'hours' => $this->hours,
            'social' => $this->social,
        ];
    }
}
