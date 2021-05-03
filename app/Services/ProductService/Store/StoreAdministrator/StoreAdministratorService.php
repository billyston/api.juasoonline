<?php

namespace App\Services\ProductService\Store\StoreAdministrator;

use App\Traits\ExternalService;

class StoreAdministratorService
{
    use ExternalService;
    private $baseURL;

    /**
     * StoreAdministratorService constructor.
     */
    public function __construct()
    {
        $this -> baseURL = env('PRODUCT_SERVICE_URL') . 'store/';
    }

    /**
     * @return array|mixed
     */
    public function getAll() : array
    {
        return $this -> getAllRequest( $this -> baseURL );
    }

    /**
     * @param $theStore
     * @param $theRequest
     * @return array|mixed
     */
    public function createAdministrator( $theStore, $theRequest ) : array
    {
        return $this -> postRequest( $this -> baseURL . $theStore . '/administrator', $theRequest );
    }

    /**
     * @param $theStore
     * @param $theAdministrator
     * @return array|mixed
     */
    public function getAdministrator( $theStore, $theAdministrator ) : array
    {
        return $this -> getRequest( $this -> baseURL . $theStore . '/administrator/' . $theAdministrator );
    }

    /**
     * @param $theStore
     * @param $theRequest
     * @param $theAdministrator
     * @return array|mixed
     */
    public function updateAdministrator( $theStore, $theRequest, $theAdministrator ) : array
    {
        return $this -> putRequest( $this -> baseURL . $theStore . '/administrator/' . $theAdministrator, $theRequest  );
    }

    /**
     * @param $theStore
     * @param $theAdministrator
     * @return array|mixed
     */
    public function deleteAdministrator( $theStore, $theAdministrator ) : array
    {
        return $this -> deleteRequest( $this -> baseURL . $theStore . '/administrator/' . $theAdministrator  );
    }
}
