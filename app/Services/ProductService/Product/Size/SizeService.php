<?php

namespace App\Services\ProductService\Product\Size;

use App\Traits\ExternalService;

class SizeService
{
    use ExternalService;
    private $baseURL;

    /**
     * SizeService constructor.
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
        return $this -> getAllRequest( $this -> baseURL . $theProduct . '/sizes' );
    }

    /**
     * @param $theRequest
     * @param $theProduct
     * @return array|mixed
     */
    public function createSize( $theProduct, $theRequest ) : array
    {
        return $this -> postRequest( $this -> baseURL . $theProduct . '/sizes', $theRequest );
    }

    /**
     * @param $theProduct
     * @param $theSize
     * @return array|mixed
     */
    public function getSize( $theProduct, $theSize ) : array
    {
        return $this -> getRequest( $this -> baseURL . $theProduct . '/sizes/' . $theSize  );
    }

    /**
     * @param $theProduct
     * @param $theRequest
     * @param $theSize
     * @return array|mixed
     */
    public function updateSize( $theProduct, $theRequest, $theSize ) : array
    {
        return $this -> putRequest( $this -> baseURL . $theProduct . '/sizes/' . $theSize, $theRequest  );
    }

    /**
     * @param $theProduct
     * @param $theSize
     * @return array|mixed
     */
    public function deleteSize( $theProduct, $theSize ) : array
    {
        return $this -> deleteRequest( $this -> baseURL . $theProduct . '/sizes/' . $theSize  );
    }
}
