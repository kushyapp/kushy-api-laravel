<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ShippingItemsCollection extends ResourceCollection
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
                    'manifesto_id' => $post->manifesto_id,
                    'product_id' => $post->product_id,
                    'uid_tag' => $post->uid_tag,
                    'qty_ordered' => $post->qty_ordered,
                    'qty_received' => $post->qty_received,
                    'unit_cost' => $post->unit_cost,
                    'total_cost' => $post->total_cost,
                    'unit_retail_price' => $post->unit_retail_price,
                    'total_retail_price' => $post->total_retail_price,
                    'rejected' => $post->rejected,
                    'description' => $post->description,
                    
                    'includes' => $relations,
                ];
            }),
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
