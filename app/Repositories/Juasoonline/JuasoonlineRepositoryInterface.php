<?php

namespace App\Repositories\Juasoonline;

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
}
