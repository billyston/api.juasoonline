<?php

namespace App\Services\Branch;

use App\Traits\ExternalService;

class BranchService
{
    use ExternalService;
    private $baseURL = "http://shops.juasoonline.test/branches/";

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
    public function createBranch( $theRequest )
    {
        return $this -> postRequest( $this -> baseURL, $theRequest );
    }

    /**
     * @param $theBranch
     * @return array|mixed
     */
    public function getBranch( $theBranch )
    {
        return $this -> getRequest( $this -> baseURL, $theBranch,  );
    }

    /**
     * @param $theRequest
     * @param $theBranch
     * @return array|mixed
     */
    public function updateBranch( $theRequest, $theBranch )
    {
        return $this -> putRequest( $this -> baseURL, $theRequest, $theBranch  );
    }

    /**
     * @param $theBranch
     * @return array|mixed
     */
    public function deleteBranch( $theBranch )
    {
        return $this -> deleteRequest( $this -> baseURL, $theBranch  );
    }
}
