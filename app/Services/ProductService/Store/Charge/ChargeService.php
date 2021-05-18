<?php

namespace App\Services\ProductService\Store\Charge;

use App\Traits\ExternalService;
use Illuminate\Session\Store;

class ChargeService
{
    use ExternalService;
    private $baseURL;

    /**
     * StoreService constructor.
     */
    public function __construct()
    {
        $this -> baseURL = env('PRODUCT_SERVICE_URL') . 'store/';
    }

    /**
     * @return array|mixed
     */
    public function getAll( $theStore ) : array
    {
        return $this -> getAllRequest( $this -> baseURL . $theStore . '/charges' );
    }

    /**
     * @param $theStore
     * @param $theRequest
     * @return array|mixed
     */
    public function createCharge( $theStore, $theRequest ) : array
    {
        return $this -> postRequest( $this -> baseURL . $theStore . '/charges', $theRequest );
    }

    /**
     * @param $theStore
     * @param $theCharge
     * @return array|mixed
     */
    public function getCharge( $theStore, $theCharge ) : array
    {
        return $this -> getRequest( $this -> baseURL . $theStore . '/charges/' . $theCharge  );
    }

    /**
     * @param $theStore
     * @param $theRequest
     * @param $theCharge
     * @return array|mixed
     */
    public function updateCharge( $theStore, $theRequest, $theCharge ) : array
    {
        return $this -> putRequest( $this -> baseURL . $theStore . '/charges/' . $theCharge, $theRequest  );
    }

    /**
     * @param $theStore
     * @param $theCharge
     * @return array|mixed
     */
    public function deleteCharge( $theStore, $theCharge ) : array
    {
        return $this -> deleteRequest( $this -> baseURL . $theStore . '/charges/' . $theCharge );
    }
}
