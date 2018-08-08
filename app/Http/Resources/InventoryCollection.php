<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class InventoryCollection extends ResourceCollection
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
            // Grab your inserted variable from the Request object
            // using the get() method (since it's passed as a query param)
            // You can dd($request->query) to see the variable there in a protected array
            'menuLastUpdated' => $request->get('menuLastUpdated'),
            'data' => $this->collection->transform(function($post){
                return [

                    'id' => $post->id,
                    'product' => [
                        'id' => $post->product->id,
                        'name' => $post->product->name,
                        'slug' => $post->product->slug,
                        // Use the transform() method on the PostCategories collection
                        // to only return the category name (instead of extra fields)
                        'categories' => $post->product->load('categories')->categories->transform(function($category) {
                            return $category->categoryName;
                        }),
                        'avatar' => $post->product->getAvatar,
                        'featured_img' => $post->product->getFeaturedImage,
                        'description' => $post->product->description,
                    ],
                    'pricing' => [
                        'pricing_type' => $post->pricing_type,
                        'list_price' => $post->list_price,
                        'sale_price' => $post->sale_price,

                        // By Weight
                        'half_gram' => $post->half_gram,
                        'one_gram' => $post->one_gram,
                        'two_grams' => $post->two_grams,
                        'eighth_ounce' => $post->eighth_ounce,
                        'quarter_ounce' => $post->quarter_ounce,
                        'half_ounce' => $post->half_ounce,
                        'ounce' => $post->ounce,
                        'quarter_pound' => $post->quarter_pound,
                        'half_pound' => $post->half_pound,
                        'pound' => $post->pound
                    ],
                    'cannabinoids' => [
                        'thc' => $post->thc,
                        'cbd' => $post->cbd,
                        'cbn' => $post->cbn
                    ]
                ];
            }),
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
