<?php

namespace App\Http\Resources\ProductService;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreAdministratorResource extends JsonResource
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
            'id'                    => $this -> id,
            'type'                  => 'StoreAdministrator',

            'attributes' =>
            [
                'resource_id'       => $this -> resource_id,
                'first_name'        => "",
                'other_names'       => "",
                'last_name'         => "",
                'designation'       => "",

                'created_at'        => $this -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> updated_at -> toDateTimeString(),
            ]
        ];
    }
}
