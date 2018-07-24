<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BookmarksCollection extends ResourceCollection
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
                    'name' => $post->post_id,
                    'slug' => $post->user_id,
                ];
            }),
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
