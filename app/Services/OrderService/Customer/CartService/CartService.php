<?php

namespace App\Services\OrderService\Customer\CartService;

use App\Traits\ExternalService;

class CartService
{
    use ExternalService; private string $baseURL;

    /**
     * CartService constructor.
     */
    public function __construct()
    {
        $this -> baseURL = env('ORDER_SERVICE_URL') . 'customer/';
    }

    /**
     * @param $theCustomer
     * @return array|mixed
     */
    public function getAll( $theCustomer ) : array
    {
        return $this -> getAllRequest( $this -> baseURL . $theCustomer . '/carts' );
    }

    /**
     * @param $theRequest
     * @param $theCustomer
     * @return array|mixed
     */
    public function createCart( $theCustomer, $theRequest ) : array
    {
        return $this -> postWithFiles( $this -> baseURL . $theCustomer . '/carts', $theRequest );
    }

    /**
     * @param $theCustomer
     * @param $theCart
     * @return array|mixed
     */
    public function getCart( $theCustomer, $theCart ) : array
    {
        return $this -> getRequest( $this -> baseURL . $theCustomer . '/carts/' . $theCart  );
    }

    /**
     * @param $theCustomer
     * @param $theRequest
     * @param $theCart
     * @return array|mixed
     */
    public function updateCart( $theCustomer, $theRequest, $theCart ) : array
    {
        return $this -> putRequest( $this -> baseURL . $theCustomer . '/carts/' . $theCart, $theRequest  );
    }

    /**
     * @param $theCustomer
     * @param $theCart
     * @return array|mixed
     */
    public function deleteCart( $theCustomer, $theCart ) : array
    {
        return $this -> deleteRequest( $this -> baseURL . $theCustomer . '/carts/' . $theCart  );
    }
}
