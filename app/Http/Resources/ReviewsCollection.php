<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use KushyApi\Http\Resources\Users as UsersResource;

class ReviewsCollection extends ResourceCollection
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
            'data' => $this->collection->transform(function($review){
                // $review->user ? $user = new UsersResource($review->user) : $review->user_id;
                $relations = $review->getRelations();
 
                return [
                    'id' => $review->id,
                    'status' => $review->status,
                    'post_id' => $review->post_id,
                    'user_id' => $review->user_id,
                    'rating' => $review->rating,
                    'useful' => $review->useful,
                    'dank' => $review->dank,
                    'funny' => $review->funny,
                    'review' => $review->review,
                    'created_at' => $review->created_at,
                    'updated_at' => $review->updated_at,
                    'includes' => $relations,
                ];
            }),
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
