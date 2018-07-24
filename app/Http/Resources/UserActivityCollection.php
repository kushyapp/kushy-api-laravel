<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UserActivityCollection extends ResourceCollection
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
                    'section' => $post->section,
                    'user' => $post->user,
                    'item_id' => $post->item_id,
                ];
            }),
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
