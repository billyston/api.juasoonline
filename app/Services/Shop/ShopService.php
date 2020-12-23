<?php

namespace App\Services\Shop;

use App\Traits\ExternalService;

class ShopService
{
    use ExternalService;
    private $baseURL = "http://shops.juasoonline.test/shops/";

    /**
     * @return array|mixed
     */
    public function getAll()
    {
        return $this -> getRequest( $this -> baseURL );
    }

    /**
     * @param $theRequest
     * @return array|mixed
     */
    public function createShop( $theRequest )
    {
        return $this -> postRequest( $this -> baseURL, $theRequest );
    }

    /**
     * @param $theBranch
     * @return array|mixed
     */
    public function getShop( $theBranch )
    {
        return $this -> getRequest( $this -> baseURL, $theBranch,  );
    }

    /**
     * @param $theRequest
     * @param $theBranch
     * @return array|mixed
     */
    public function updateShop( $theRequest, $theBranch )
    {
        return $this -> putRequest( $this -> baseURL, $theRequest, $theBranch  );
    }

    /**
     * @param $theBranch
     * @return array|mixed
     */
    public function deleteShop( $theBranch )
    {
        return $this -> deleteRequest( $this -> baseURL, $theBranch  );
    }
}
