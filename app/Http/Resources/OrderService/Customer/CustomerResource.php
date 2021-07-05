<?php

namespace App\Http\Resources\OrderService\Customer;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray( $request ) : array
    {
        return
        [
            'id'                    => $this -> resource -> id,
            'type'                  => 'Customer',

            'attributes' =>
            [
                'resource_id'       => $this -> resource -> resource_id,
                'email'             => $this -> resource -> email,

                'status'            => $this -> resource -> status,

                'created_at'        => $this -> resource -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> resource -> updated_at -> toDateTimeString(),
            ]
        ];
    }
}
