<?php


namespace App\Services\ProductService\Other\Country;


use App\Http\Requests\ProductService\Other\Country\CountryRequest;
use App\Http\Requests\ProductService\Other\PromoType\PromoTypeRequest;
use App\Traits\ExternalService;

class CountryService
{
    use ExternalService;
    private $baseURL;

    /**
     * CountryService constructor.
     */
    public function __construct()
    {
        $this -> baseURL = env('PRODUCT_SERVICE_URL') . 'countries';
    }

    /**
     * @return array|mixed
     */
    public function getAll() : array
    {
        return $this -> getAllRequest( $this -> baseURL );
    }

    /**
     * @param CountryRequest $countryRequest
     * @return array|mixed
     */
    public function createCountry( CountryRequest $countryRequest ) : array
    {
        return $this -> postRequest( $this -> baseURL, $countryRequest  );
    }

    /**
     * @param $theCountry
     * @return array|mixed
     */
    public function getCountry( $theCountry ) : array
    {
        return $this -> getRequest( $this -> baseURL . "/" . $theCountry  );
    }

    /**
     * @param CountryRequest $countryRequest
     * @param $theCountry
     * @return array|mixed
     */
    public function updateCountry( CountryRequest $countryRequest, $theCountry ) : array
    {
        return $this -> putRequest( $this -> baseURL. '/'. $theCountry,  $countryRequest  );
    }

    /**
     * @param $theCountry
     * @return array|mixed
     */
    public function deleteCountry( $theCountry ) : array
    {
        return $this -> deleteRequest( $this -> baseURL. '/'. $theCountry  );
    }
}
