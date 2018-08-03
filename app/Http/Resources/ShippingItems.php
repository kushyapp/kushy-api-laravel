<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShippingItems extends JsonResource
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
            'manifesto_id' => $this->manifesto_id,
            'product_id' => $this->product_id,
            'uid_tag' => $this->uid_tag,
            'qty_ordered' => $this->qty_ordered,
            'qty_received' => $this->qty_received,
            'unit_cost' => $this->unit_cost,
            'total_cost' => $this->total_cost,
            'unit_retail_price' => $this->unit_retail_price,
            'total_retail_price' => $this->total_retail_price,
            'rejected' => $this->rejected,
            'description' => $this->description,
        ];
    }
}
