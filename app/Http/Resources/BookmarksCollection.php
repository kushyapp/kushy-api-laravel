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
                $relations = $post->getRelations();
                return [
                    'id' => $post->id,
                    'post_id' => $post->post_id,
                    'user_id' => $post->user_id,
                    'includes' => $relations,
                ];
            }),
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
