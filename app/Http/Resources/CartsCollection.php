<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CartsCollection extends ResourceCollection
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
                    'user' => $post->user,
                    'shop' => $post->shop,
                    'created_at' => $post->created_at,
                    'updated_at' => $post->updated_at,
                ];
            }),
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
