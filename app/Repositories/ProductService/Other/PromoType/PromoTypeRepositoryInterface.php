<?php

namespace App\Repositories\ProductService\Other\PromoType;

use App\Http\Requests\ProductService\Other\PromoType\PromoTypeRequest;

interface PromoTypeRepositoryInterface
{
    /**
     * @return array|mixed
     */
    public function index() : array;

    /**
     * @param PromoTypeRequest $promoTypeRequest
     * @return array|mixed
     */
    public function store( PromoTypeRequest $promoTypeRequest ) : array;

    /**
     * @param $PromoType
     * @return array|mixed
     */
    public function show( $PromoType ) : array;

    /**
     * @param PromoTypeRequest $promoTypeRequest
     * @param $PromoType
     * @return array|mixed
     */
    public function update( PromoTypeRequest $promoTypeRequest, $PromoType ) : array;

    /**
     * @param $PromoType
     * @return array|mixed
     */
    public function destroy( $PromoType ) : array;
}
