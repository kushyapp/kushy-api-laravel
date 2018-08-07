<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UsersPermissionsCollection extends ResourceCollection
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
                    'business_id' => $post->business_id,
                    'user_id' => $post->user_id,
                    'verified' => $post->verified,
                    'user_type' => $post->user_type,
                    'permissions' => $post->permissions,
                    'created_at' => $post->created_at,
                    'updated_at' => $post->updated_at,
                    
                    'includes' => $relations,
                ];
            }),
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
