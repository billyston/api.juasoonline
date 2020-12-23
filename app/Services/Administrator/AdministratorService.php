<?php

namespace App\Services\Administrator;

use App\Traits\ExternalService;

class AdministratorService
{
    use ExternalService;
    private $baseURL = "http://shops.juasoonline.test/administrators/";

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
    public function createAdministrator( $theRequest )
    {
        return $this -> postRequest( $this -> baseURL, $theRequest );
    }

    /**
     * @param $theBranch
     * @return array|mixed
     */
    public function getAdministrator( $theBranch )
    {
        return $this -> getRequest( $this -> baseURL, $theBranch,  );
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
