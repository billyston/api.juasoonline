<?php

namespace App\Services\ProductService\Product;

use App\Traits\ExternalService;

class ProductService
{
    use ExternalService;
    private string $baseURL;

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
        return $this -> getAllRequest( $this -> baseURL . $theStore . '/products' );
    }

    /**
     * @param $theRequest
     * @param $theStore
     * @return array|mixed
     */
    public function createProduct( $theStore, $theRequest ) : array
    {
        return $this -> postWithFiles( $this -> baseURL . $theStore . '/products', $theRequest );
    }

    /**
     * @param $theStore
     * @param $theProduct
     * @return array|mixed
     */
    public function getProduct( $theStore, $theProduct ) : array
    {
        return $this -> getRequest( $this -> baseURL . $theStore . '/products/' . $theProduct  );
    }

    /**
     * @param $theStore
     * @param $theRequest
     * @param $theProduct
     * @return array|mixed
     */
    public function updateProduct( $theStore, $theRequest, $theProduct ) : array
    {
        return $this -> putRequest( $this -> baseURL . $theStore . '/products/'. $theProduct, $theRequest  );
    }

    /**
     * @param $theStore
     * @param $theProduct
     * @return array|mixed
     */
    public function deleteProduct( $theStore, $theProduct ) : array
    {
        return $this -> deleteRequest( $this -> baseURL . $theStore . '/products/' . $theProduct  );
    }

    /**
     * @return array|mixed
     */
    public function getProducts() : array
    {
        return $this -> getAllRequest( env('PRODUCT_SERVICE_URL') . 'products' );
    }
}
