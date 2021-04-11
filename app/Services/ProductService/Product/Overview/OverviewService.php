<?php

namespace App\Services\ProductService\Product\Overview;

use App\Traits\ExternalService;

class OverviewService
{
    use ExternalService;
    private $baseURL;

    /**
     * OverviewService constructor.
     */
    public function __construct()
    {
        $this -> baseURL = env('PRODUCT_SERVICE_URL') . 'product/';
    }

    /**
     * @param $theProduct
     * @return array|mixed
     */
    public function getAll( $theProduct ) : array
    {
        return $this -> getAllRequest( $this -> baseURL.$theProduct."/overviews" );
    }

    /**
     * @param $theRequest
     * @param $theProduct
     * @return array|mixed
     */
    public function createOverview( $theRequest, $theProduct ) : array
    {
        return $this -> postWithFiles( $this -> baseURL.$theProduct."/overviews", $theRequest );
    }

    /**
     * @param $theOverview
     * @return array|mixed
     */
    public function getOverview( $theOverview ) : array
    {
        return $this -> getRequest( $this -> baseURL, $theOverview  );
    }

    /**
     * @param $theRequest
     * @param $theOverview
     * @return array|mixed
     */
    public function updateOverview( $theRequest, $theOverview ) : array
    {
        return $this -> putRequest( $this -> baseURL, $theRequest, $theOverview  );
    }

    /**
     * @param $theOverview
     * @return array|mixed
     */
    public function deleteOverview( $theOverview ) : array
    {
        return $this -> deleteRequest( $this -> baseURL, $theOverview  );
    }
}
