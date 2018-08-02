<?php

namespace KushyApi\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ShippingManifestosCollection extends ResourceCollection
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
                    'shipper' => [
                        'id' => $post->shipper_id,
                        'state_license' => $post->shipper_state_license,
                        'name' => $post->shipper_name,
                        'address' => $post->shipper_address,
                        'city' => $post->shipper_city,
                        'state' => $post->shipper_state,
                        'postal_code' => $post->shipper_postal_code,
                        'phone' => $post->shipper_phone,

                    ],
                    'receiver' => [
                        'id' => $post->receiver_id,
                        'state_license' => $post->receiver_state_license,
                        'name' => $post->receiver_name,
                        'address' => $post->receiver_address,
                        'city' => $post->receiver_city,
                        'state' => $post->receiver_state,
                        'postal_code' => $post->receiver_postal_code,
                        'phone' => $post->receiver_phone,
                        'email' => $post->receiver_email,

                    ],
                    'distributor' => [
                        'id' => $post->distributor_id,
                        'state_license' => $post->distributor_state_license,
                        'name' => $post->distributor_name,
                        'address' => $post->distributor_address,
                        'city' => $post->distributor_city,
                        'state' => $post->distributor_state,
                        'postal_code' => $post->distributor_postal_code,
                        'phone' => $post->distributor_phone,
                        'email' => $post->distributor_email,
                    ],

                    'delivery_id' => $post->delivery_id,
                    'owner_id' => $post->owner_id,
                    'invoice' => $post->invoice,
                    'status' => $post->status,
                    'description' => $post->description,
                    'contact_name' => $post->contact_name,
                    'phone' => $post->phone,
                    'date_departure' => $post->date_departure,
                    'date_estimated_arrival' => $post->date_estimated_arrival,
                    'date_actual_arrival' => $post->date_actual_arrival,
                    'date_signed' => $post->date_signed,
                    'digital_signature' => $post->digital_signature,

                    'access_token' => $post->access_token,
                    
                    'includes' => $relations,
                ];
            }),
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
