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
        return $this -> getAllRequest( $this -> baseURL . $theProduct . '/overviews' );
    }

    /**
     * @param $theRequest
     * @param $theProduct
     * @return array|mixed
     */
    public function createOverview( $theProduct, $theRequest ) : array
    {
        return $this -> postWithFiles( $this -> baseURL . $theProduct . '/overviews', $theRequest );
    }

    /**
     * @param $theProduct
     * @param $theOverview
     * @return array|mixed
     */
    public function getOverview( $theProduct, $theOverview ) : array
    {
        return $this -> getRequest( $this -> baseURL . $theProduct . '/overviews/' . $theOverview  );
    }

    /**
     * @param $theProduct
     * @param $theRequest
     * @param $theOverview
     * @return array|mixed
     */
    public function updateOverview( $theProduct, $theRequest, $theOverview ) : array
    {
        return $this -> putRequest( $this -> baseURL . $theProduct . '/overviews/' . $theOverview, $theRequest  );
    }

    /**
     * @param $theProduct
     * @param $theOverview
     * @return array|mixed
     */
    public function deleteOverview( $theProduct, $theOverview ) : array
    {
        return $this -> deleteRequest( $this -> baseURL . $theProduct . '/overviews/' . $theOverview  );
    }
}
