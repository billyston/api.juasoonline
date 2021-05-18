<?php

namespace App\Repositories\ProductService\Other\Country;

use App\Http\Requests\ProductService\Other\Country\CountryRequest;

interface CountryRepositoryInterface
{
    /**
     * @return array|mixed
     */
    public function index() : array;

    /**
     * @param CountryRequest $countryRequest
     * @return array|mixed
     */
    public function store( CountryRequest $countryRequest ) : array;

    /**
     * @param $Country
     * @return array|mixed
     */
    public function show( $Country ) : array;

    /**
     * @param CountryRequest $countryRequest
     * @param $Country
     * @return array|mixed
     */
    public function update( CountryRequest $countryRequest, $Country ) : array;

    /**
     * @param $Country
     * @return array|mixed
     */
    public function destroy( $Country ) : array;
}
