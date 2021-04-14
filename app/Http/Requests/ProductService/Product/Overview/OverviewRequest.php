<?php

namespace App\Http\Requests\ProductService\Product\Overview;

use Illuminate\Foundation\Http\FormRequest;

class OverviewRequest extends FormRequest
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
        return [
            //
        ];
    }
}
