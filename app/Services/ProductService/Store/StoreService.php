<?php

namespace App\Services\ProductService\Store;

use App\Traits\ExternalService;

class StoreService
{
    use ExternalService;
    private $baseURL;

    public function __construct() {
        $this -> baseURL = env('PRODUCT_SERVICE_URL') . 'stores/';
    }
//    private $baseURL = "https://test.products.juasoonline.com/stores";

    /**
     * @return array|mixed
     */
    public function getAll() : array
    {
        return $this -> getRequest( $this -> baseURL );
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
     * @param $theBranch
     * @return array|mixed
     */
    public function getShop( $theBranch ) : array
    {
        return $this -> getRequest( $this -> baseURL, $theBranch,  );
    }

    /**
     * @param $theRequest
     * @param $theBranch
     * @return array|mixed
     */
    public function updateShop( $theRequest, $theBranch ) : array
    {
        return $this -> putRequest( $this -> baseURL, $theRequest, $theBranch  );
    }

    /**
     * @param $theBranch
     * @return array|mixed
     */
    public function deleteShop( $theBranch ) : array
    {
        return $this -> deleteRequest( $this -> baseURL, $theBranch  );
    }
}
