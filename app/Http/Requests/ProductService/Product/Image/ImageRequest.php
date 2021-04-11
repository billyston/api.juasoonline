<?php

namespace App\Http\Requests\ProductService\Product\Image;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize() : bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules() : array
    {
        if ( in_array( $this -> getMethod (), [ 'PUT', 'PATCH' ] ) )
        {
            return $rules =
            [
            ];
        }
        return
        [
            'product_id'                            => [ 'required' ],
            'file.*'                                => [ 'required', 'mimes:jpg,jpeg,png', 'max:2048' ]
        ];
    }

    /**
     * @return array|string[]
     */
    public function messages(): array
    {
        return
        [
            'product_id.required'                   => "The product id is required",

            'file.*.required'                       => "Image(s) are required",
            'file.*.mimes'                          => "Image(s) must be jpg, jpeg, or png",

        ];
    }
}
