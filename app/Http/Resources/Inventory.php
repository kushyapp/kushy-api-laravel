<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Inventory extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'inventory_id' => $this->id,
            'product_id' => $this->product->id,
            'name' => $this->product->name,
            'slug' => $this->product->slug,
            'categories' => $this->product->categories,
            'avatar' => $this->product->getAvatar,
            'featured_img' => $this->product->getFeaturedImage,
            'description' => $this->product->description,
            'pricing' => [
                'pricing_type' => $this->pricing_type,
                'list_price' => $this->list_price,
                'sale_price' => $this->sale_price,

                // By Weight
                'half_gram' => $this->half_gram,
                'one_gram' => $this->one_gram,
                'two_grams' => $this->two_grams,
                'eighth_ounce' => $this->eighth_ounce,
                'quarter_ounce' => $this->quarter_ounce,
                'half_ounce' => $this->half_ounce,
                'ounce' => $this->ounce,
                'quarter_pound' => $this->quarter_pound,
                'half_pound' => $this->half_pound,
                'pound' => $this->pound
            ],
            'cannabinoids' => [
                'thc' => $this->thc,
                'cbd' => $this->cbd,
                'cbn' => $this->cbn
            ]
        ];
    }
}
