<?php

namespace App\Http\Requests\ProductService\Store\Branch;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

class BranchRequest extends FormRequest
{
    /**
     * @param Validator $validator
     */
    protected function failedValidation( Validator $validator )
    {
        throw new HttpResponseException(
            response() -> json([ 'status' => 'Error', 'code' => Response::HTTP_UNPROCESSABLE_ENTITY, 'errors' => $validator -> errors() -> all() ])
        );
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        if ( in_array( $this -> getMethod (), [ 'PUT', 'PATCH' ] ) )
        {
            return $rules =
            [
                'data'                                                  => [ 'required' ],
                'data.id'                                               => [ 'required', 'string', ],
                'data.type'                                             => [ 'required', 'string', 'in:Branch' ],
            ];
        }

        return
        [
            'data'                                                      => [ 'required' ],
            'data.type'                                                 => [ 'required', 'string', 'in:Branch' ],

            'data.attributes.branch_name'                               => [ 'required', 'string' ],

            'data.attributes.region'                                    => [ 'required', 'string' ],
            'data.attributes.city'                                      => [ 'required', 'string' ],
            'data.attributes.address'                                   => [ 'required', 'string' ],
            'data.attributes.postal_code'                               => [ 'required', 'string' ],

            'data.attributes.mobile_phone'                              => [ 'required', 'min:10', 'numeric' ],
            'data.attributes.other_phone'                               => [ 'min:10', 'numeric' ],

            'data.attributes.email'                                     => [ 'required', 'email' ],

            'data.relationships.store.store_id'                         => [ 'required', 'string' ],
        ];
    }

    /**
     * @return array|string[]
     */
    public function messages() : array
    {
        return
        [
            'data.required'                                             => "The data field is invalid",

            'data.type.required'                                        => "The resource type is required",
            'data.type.string'                                          => "The resource type must be of a string type",
            'data.type.in'                                              => "The resource type is invalid",

            'data.attributes.branch_name.required'                      => "The branch name is required",
            'data.attributes.branch_name.string'                        => "The branch name must be of a string type",

            'data.attributes.region.required'                           => "The region is required",
            'data.attributes.region.string'                             => "The region must be of a string type",

            'data.attributes.city.required'                             => "The city is required",
            'data.attributes.city.string'                               => "The city must be of a string type",

            'data.attributes.address.required'                          => "The address is required",
            'data.attributes.address.string'                            => "The address must be of a string type",

            'data.attributes.postal_code.required'                      => "The postal code is required",
            'data.attributes.postal_code.string'                        => "The postal code must be of a string type",

            'data.attributes.mobile_phone.required'                     => "The mobile phone number is required",
            'data.attributes.mobile_phone.min'                          => "The mobile phone number must have a minimum of 10 digits",
            'data.attributes.mobile_phone.numeric'                      => "The mobile phone number must only contain numbers",

            'data.attributes.other_phone.min'                           => "The other phone number must have a minimum of 10 digits",
            'data.attributes.other_phone.numeric'                       => "The other phone number must only contain numbers",

            'data.attributes.email.email'                               => "The email address is invalid",

            'data.relationships.store.store_id.required'                => "The store id is required",
        ];
    }
}
