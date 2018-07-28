<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class DealsCollection extends ResourceCollection
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
                $relations = $post->getRelations();
                return [
                    'id' => $post->id,
                    'name' => $post->name,
                    'slug' => $post->slug,
                    'featured_img' => $post->featured_img,
                    'city' => $post->city,
                    'state' => $post->state,
                    'postal_code' => $post->postal_code,
                    'country' => $post->country,
                    'rating' => $post->rating,
                    'featured' => $post->featured,
                    'verified' => $post->verified,
                    'includes' => $relations,
                ];
            }),
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
