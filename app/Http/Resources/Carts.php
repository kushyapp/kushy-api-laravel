<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Carts extends JsonResource
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
            'id' => $this->id,
            'user' => $this->user_id,
            'shop' => $this->shop_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'includes' => [
                'user' => $this->load('user')->user,
                'shop' => $this->load('shop')->shop,
            ]
        ];
    }
}
