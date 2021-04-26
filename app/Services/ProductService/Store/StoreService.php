<?php

namespace App\Services\ProductService\Store;

use App\Traits\ExternalService;

class StoreService
{
    use ExternalService;
    private $baseURL;

    /**
     * StoreService constructor.
     */
    public function __construct()
    {
        $this -> baseURL = env('PRODUCT_SERVICE_URL') . 'stores';
    }

    /**
     * @return array|mixed
     */
    public function getAll() : array
    {
        return $this -> getAllRequest( $this -> baseURL );
    }

    /**
     * @param $theRequest
     * @return array|mixed
     */
    public function createShop( $theRequest ) : array
    {
        return $this -> postRequest( $this -> baseURL, $theRequest );
    }

    /**
     * @param $theStore
     * @return array|mixed
     */
    public function getShop( $theStore ) : array
    {
        return $this -> getRequest( $this -> baseURL . '/' . $theStore  );
    }

    /**
     * @param $theRequest
     * @param $theStore
     * @return array|mixed
     */
    public function updateShop( $theRequest, $theStore ) : array
    {
        return $this -> putRequest( $this -> baseURL . '/' . $theStore, $theRequest  );
    }

    /**
     * @param $theStore
     * @return array|mixed
     */
    public function deleteShop( $theStore ) : array
    {
        return $this -> deleteRequest( $this -> baseURL . '/' . $theStore  );
    }
}
