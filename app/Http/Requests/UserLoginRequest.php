<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
{
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
        return
        [
            'data'                      => [ 'required', 'array' ],
            'data.type'                 => [ 'required', 'in:StoreAdministrator,Customer' ],
            'data.attributes.email'     => [ 'required', 'email' ],
            'data.attributes.password'  => [ 'required', 'string', 'min:6', 'max:50' ]
        ];
    }
}
