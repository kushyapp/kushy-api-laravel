<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ImagesCollection extends ResourceCollection
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
            'data' => $this->collection->transform(function($image){
                $relations = $post->getRelations();
                return [
                    'id' => $image->id,
                    'image' => $image->getImage,
                    'caption' => $image->caption,
                    'user_id' => $image->user_id,
                    'post_id' => $image->post_id,
                    'featured' => $image->featured,
                    'created_at' => $image->created_at,
                    'updated_at' => $image->updated_at,
                    
                    'includes' => $relations,
                ];
            }),
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
