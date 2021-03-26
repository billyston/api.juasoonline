<?php

namespace App\Services\ProductService\Product;

use App\Traits\ExternalService;

class ProductService
{
    use ExternalService;
    private $baseURL = "http://products.juasoonline.dev/products/";

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
    public function createProduct( $theRequest ) : array
    {
        return $this -> postRequest( $this -> baseURL, $theRequest );
    }

    /**
     * @param $theProduct
     * @return array|mixed
     */
    public function getProduct( $theProduct ) : array
    {
        return $this -> getRequest( $this -> baseURL, $theProduct  );
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
