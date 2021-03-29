<?php

namespace App\Services\ProductService\Store;

use App\Traits\ExternalService;

class BranchService
{
    use ExternalService;
    private $baseURL;

    public function __construct() {
        $this -> baseURL = env('PRODUCT_SERVICE_URL') . 'stores/branches/';
    }

//    private $baseURL = "http://products.juasoonline.dev/stores/branches";
//    private $baseURL = "https://test.products.juasoonline.com/stores/branches";

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
    public function createBranch( $theRequest ) : array
    {
        return $this -> postRequest( $this -> baseURL, $theRequest );
    }

    /**
     * @param $theBranch
     * @return array|mixed
     */
    public function getBranch( $theBranch ) : array
    {
        return $this -> getRequest( $this -> baseURL, $theBranch,  );
    }

    /**
     * @param $theRequest
     * @param $theBranch
     * @return array|mixed
     */
    public function updateBranch( $theRequest, $theBranch ) : array
    {
        return $this -> putRequest( $this -> baseURL, $theRequest, $theBranch  );
    }

    /**
     * @param $theBranch
     * @return array|mixed
     */
    public function deleteBranch( $theBranch ) : array
    {
        return $this -> deleteRequest( $this -> baseURL, $theBranch  );
    }
}
