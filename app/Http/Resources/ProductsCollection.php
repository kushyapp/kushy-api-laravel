<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductsCollection extends ResourceCollection
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
                    'brand' => $this->when($post->brand && count($post->brand) > 0, function () use ($post) {
                        return $post->brand[0]->parent->name;
                    }),
                    'avatar' => $post->getAvatar,
                    'featured_img' => $post->getFeaturedImage,
                    'rating' => $post->rating,
                    'featured' => $post->featured,
                    'verified' => $post->verified,
                ];
            }),
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
