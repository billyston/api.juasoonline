<?php

namespace App\Repositories\Juasoonline;

use Illuminate\Http\Request;

interface JuasoonlineRepositoryInterface
{
    /**
     * @return array|mixed
     */
    public function products() : array;

    /**
     * @param $theProduct
     * @return array|mixed
     */
    public function product( $theProduct ) : array;

    /**
     * @param Request $request
     * @return array|mixed
     */
    public function recommendations( Request $request ) : array;

    /**
     * @return array|mixed
     */
    public function storeProducts( $theStore ) : array;

    /**
     * @return array|mixed
     */
    public function deals() : array;
}
