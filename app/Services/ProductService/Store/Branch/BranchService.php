<?php

namespace App\Services\ProductService\Store\Branch;

use App\Traits\ExternalService;

class BranchService
{
    use ExternalService;
    private $baseURL;

    /**
     * BranchService constructor.
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
        return $this -> getAllRequest( $this -> baseURL . $theStore . '/branches' );
    }

    /**
     * @param $theStore
     * @param $theRequest
     * @return array|mixed
     */
    public function createBranch( $theStore, $theRequest ) : array
    {
        return $this -> postRequest( $this -> baseURL . $theStore . '/branches', $theRequest );
    }

    /**
     * @param $theStore
     * @param $theBranch
     * @return array|mixed
     */
    public function getBranch( $theStore, $theBranch ) : array
    {
        return $this -> getRequest( $this -> baseURL . $theStore . '/branches/' . $theBranch,  );
    }

    /**
     * @param $theStore
     * @param $theRequest
     * @param $theBranch
     * @return array|mixed
     */
    public function updateBranch( $theStore, $theRequest, $theBranch ) : array
    {
        return $this -> putRequest( $this -> baseURL . $theStore . '/branches/' . $theBranch, $theRequest  );
    }

    /**
     * @param $theStore
     * @param $theBranch
     * @return array|mixed
     */
    public function deleteBranch( $theStore, $theBranch ) : array
    {
        return $this -> deleteRequest( $this -> baseURL . $theStore . '/branches/' . $theBranch  );
    }
}
