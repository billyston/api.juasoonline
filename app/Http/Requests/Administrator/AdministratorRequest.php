<?php

namespace App\Http\Requests\Administrator;

use Illuminate\Foundation\Http\FormRequest;

class AdministratorRequest extends FormRequest
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
                'data.id'                                                           => [ 'required', 'string' ],
                'data.type'                                                         => [ 'required', 'string', 'in:Administrator' ],
            ];
        }
        return
        [
            'data'                                                                  => [ 'required' ],
            'data.type'                                                             => [ 'required', 'string', 'in:Administrator' ],

            'data.attributes.first_name'                                            => [ 'required', 'string' ],
            'data.attributes.other_names'                                           => [ 'sometimes', 'string' ],
            'data.attributes.last_name'                                             => [ 'required', 'string' ],

            'data.attributes.designation'                                           => [ 'required', 'string' ],

            'data.attributes.email'                                                 => [ 'required', 'email' ],
            'data.attributes.mobile_phone'                                          => [ 'required', 'min:10', 'numeric' ],
            'data.attributes.other_phone'                                           => [ 'min:10', 'numeric' ],

            'data.relationships.shop.shop_id'                                       => [ 'required', 'string' ],
        ];
    }
}
