<?php

namespace App\Services\ProductService\Product;

use App\Traits\ExternalService;

class ProductService
{
    use ExternalService;
    private $baseURL;

    /**
     * ProductService constructor.
     */
    public function __construct()
    {
        $this -> baseURL = env('PRODUCT_SERVICE_URL') . 'store/';
    }

    /**
     * @param $theStore
     * @return array|mixed
     */
    public function getAll( $theStore ) : array
    {
        return $this -> getAllRequest( $this -> baseURL.$theStore."/products" );
    }

    /**
     * @param $theRequest
     * @param $theStore
     * @return array|mixed
     */
    public function createProduct( $theRequest, $theStore ) : array
    {
        return $this -> postRequest( $this -> baseURL.$theStore."/products", $theRequest );
    }

    /**
     * @param $theStore
     * @param $theProduct
     * @return array|mixed
     */
    public function getProduct( $theStore, $theProduct ) : array
    {
        return $this -> getRequest( $this -> baseURL.$theStore.'/products', $theProduct  );
    }

    /**
     * @param $theRequest
     * @param $theProduct
     * @return array|mixed
     */
    public function updateProduct( $theRequest, $theProduct ) : array
    {
        return $this -> putRequest( $this -> baseURL, $theRequest, $theProduct  );
    }

    /**
     * @param $theProduct
     * @return array|mixed
     */
    public function deleteProduct( $theProduct ) : array
    {
        return $this -> deleteRequest( $this -> baseURL, $theProduct  );
    }
}
