<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShippingManifestos extends JsonResource
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
            
            'shipper' => [
                'id' => $this->shipper_id,
                'state_license' => $this->shipper_state_license,
                'name' => $this->shipper_name,
                'address' => $this->shipper_address,
                'city' => $this->shipper_city,
                'state' => $this->shipper_state,
                'postal_code' => $this->shipper_postal_code,
                'phone' => $this->shipper_phone,

            ],
            'receiver' => [
                'id' => $this->receiver_id,
                'state_license' => $this->receiver_state_license,
                'name' => $this->receiver_name,
                'address' => $this->receiver_address,
                'city' => $this->receiver_city,
                'state' => $this->receiver_state,
                'postal_code' => $this->receiver_postal_code,
                'phone' => $this->receiver_phone,
                'email' => $this->receiver_email,

            ],
            'distributor' => [
                'id' => $this->distributor_id,
                'state_license' => $this->distributor_state_license,
                'name' => $this->distributor_name,
                'address' => $this->distributor_address,
                'city' => $this->distributor_city,
                'state' => $this->distributor_state,
                'postal_code' => $this->distributor_postal_code,
                'phone' => $this->distributor_phone,
                'email' => $this->distributor_email,
            ],

            'delivery_id' => $this->delivery_id,
            'owner_id' => $this->owner_id,
            'invoice' => $this->invoice,
            'status' => $this->status,
            'description' => $this->description,
            'contact_name' => $this->contact_name,
            'phone' => $this->phone,
            'date_departure' => $this->date_departure,
            'date_estimated_arrival' => $this->date_estimated_arrival,
            'date_actual_arrival' => $this->date_actual_arrival,
            'date_signed' => $this->date_signed,
            'digital_signature' => $this->digital_signature,

            'access_token' => $this->access_token,
        ];
    }
}
