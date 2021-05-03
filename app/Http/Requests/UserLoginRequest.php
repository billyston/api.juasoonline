<?php

namespace App\Http\Requests;

use App\Rules\CheckUserStatus;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

class UserLoginRequest extends FormRequest
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
        return
        [
            'data'                      => [ 'required', 'array' ],
            'data.type'                 => [ 'required', 'in:StoreAdministrator,Customer' ],
            'data.attributes.email'     => [ 'required', 'email' ],
//            'data.attributes.email'     => [ 'required', 'email', new CheckUserStatus() ],
            'data.attributes.password'  => [ 'required', 'string', 'min:6', 'max:50' ]
        ];
    }

    /**
     * @return string[]
     */
    public function messages() : array
    {
        return
        [
            'data.required'                                             => "The data field is invalid",

            'data.type.required'                                        => "The type is required",
            'data.type.string'                                          => "The type must be of a string",
            'data.type.in'                                              => "The type is invalid",

            'data.attributes.email.required'                            => "The email is required",
            'data.attributes.email.email'                               => "The email address is invalid",

            'data.attributes.password.required'                         => "The password is required",
            'data.attributes.password.min'                              => "The password must be more than 5 characters",
        ];
    }
}
