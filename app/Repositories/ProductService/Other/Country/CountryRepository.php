<?php

namespace App\Repositories\ProductService\Other\Country;

use App\Http\Requests\ProductService\Other\Country\CountryRequest;
use App\Services\ProductService\Other\Country\CountryService;

class CountryRepository implements CountryRepositoryInterface
{
    private $countryService;

    /**
     * CountryRepository constructor.
     * @param CountryService $countryService
     */
    public function __construct( CountryService $countryService )
    {
        $this -> countryService = $countryService;
    }

    /**
     * @return array|mixed
     */
    public function index() : array
    {
        return $this -> countryService -> getAll();
    }

    /**
     * @param CountryRequest $countryRequest
     * @return array|mixed
     */
    public function store( CountryRequest $countryRequest ) : array
    {
        return $this -> countryService -> createCountry( $countryRequest );
    }

    /**
     * @param $Country
     * @return array|mixed
     */
    public function show( $Country ) : array
    {
        return $this -> countryService -> getCountry( $Country );
    }

    /**
     * @param CountryRequest $countryRequest
     * @param $Country
     * @return array|mixed
     */
    public function update( CountryRequest $countryRequest, $Country ) : array
    {
        return $this -> countryService -> updateCountry( $countryRequest, $Country );
    }

    /**
     * @param $Country
     * @return array|mixed
     */
    public function destroy( $Country ) : array
    {
        return $this -> countryService -> deleteCountry( $Country );
    }
}
