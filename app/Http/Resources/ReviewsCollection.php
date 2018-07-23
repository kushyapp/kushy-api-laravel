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
                $review->user ? $user = new UsersResource($review->user) : $review->user_id;

                return [
                    'id' => $review->id,
                    'status' => $review->status,
                    'post_id' => $review->post_id,
                    'user' => $user,
                    'rating' => $review->rating,
                    'useful' => $review->useful,
                    'dank' => $review->dank,
                    'funny' => $review->funny,
                    'review' => $review->review,
                    'created_at' => $review->created_at,
                    'updated_at' => $review->updated_at
                ];
            }),
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
