<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BrandsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function($post){
                return [
                    'id' => $post->id,
                    'name' => $post->name,
                    'slug' => $post->slug,
                    'categories' => $post->categories,
                    'avatar' => $post->getAvatar,
                    'featured_img' => $post->getFeaturedImage,
                    'rating' => $post->rating,
                    'featured' => $post->featured,
                    'verified' => $post->verified,
                    'location' => [
                        'latitude' => $post->latitude,
                        'longitude' => $post->longitude,
                        'address' => $post->address,
                        'state' => $post->state,
                        'city' => $post->city,
                        'postal_code' => $post->postal_code,
                        'country' => $post->country,
                    ],
                ];
            }),
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
