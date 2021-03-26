<?php

namespace App\Services\ProductService\Store;

use App\Traits\ExternalService;

class StoreAdministratorService
{
    use ExternalService;
    private $baseURL = "http://products.juasoonline.dev/stores/administrator/";

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
    public function createAdministrator( $theRequest ) : array
    {
        return $this -> postRequest( $this -> baseURL, $theRequest );
    }

    /**
     * @param $theAdministrator
     * @return array|mixed
     */
    public function getAdministrator( $theAdministrator ) : array
    {
        return $this -> getRequest( $this -> baseURL, $theAdministrator,  );
    }

    /**
     * @param $theRequest
     * @param $theBranch
     * @return array|mixed
     */
    public function updateAdministrator( $theRequest, $theBranch )
    {
        return $this -> putRequest( $this -> baseURL, $theRequest, $theBranch  );
    }

    /**
     * @param $theBranch
     * @return array|mixed
     */
    public function deleteAdministrator( $theBranch )
    {
        return $this -> deleteRequest( $this -> baseURL, $theBranch  );
    }
}
