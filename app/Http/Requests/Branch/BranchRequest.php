<?php

namespace App\Http\Requests\Branch;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ( in_array( $this -> getMethod (), [ 'PUT', 'PATCH' ] ) )
        {
            return $rules =
            [
                'data'                                                              => [ 'required' ],
                'data.id'                                                           => [ 'required', 'string', ],
                'data.type'                                                         => [ 'required', 'string', 'in:Branch' ],
            ];
        }
        return
        [
            'data'                                                                  => [ 'required' ],
            'data.type'                                                             => [ 'required', 'string', 'in:Branch' ],

            'data.attributes.branch_name'                                           => [ 'required', 'string' ],

            'data.attributes.region'                                                => [ 'required', 'string' ],
            'data.attributes.city'                                                  => [ 'required', 'string' ],
            'data.attributes.address'                                               => [ 'required', 'string' ],
            'data.attributes.postal_code'                                           => [ 'required', 'string' ],

            'data.attributes.mobile_phone'                                          => [ 'required', 'min:10', 'numeric' ],
            'data.attributes.other_phone'                                           => [ 'min:10', 'numeric' ],

            'data.attributes.email'                                                 => [ 'required', 'email' ],

            'data.relationships.shop.shop_id'                                       => [ 'required', 'string' ],
        ];
    }
}
