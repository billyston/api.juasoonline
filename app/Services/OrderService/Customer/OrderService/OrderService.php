<?php

namespace App\Services\OrderService\Customer\OrderService;

use App\Traits\ExternalService;

class OrderService
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
        return $this -> getAllRequest( $this -> baseURL . $theCustomer . '/orders' );
    }

    /**
     * @param $theRequest
     * @param $theCustomer
     * @return array|mixed
     */
    public function createOrder( $theCustomer, $theRequest ) : array
    {
        return $this -> postWithFiles( $this -> baseURL . $theCustomer . '/orders', $theRequest );
    }

    /**
     * @param $theCustomer
     * @param $theOrder
     * @return array|mixed
     */
    public function getOrder( $theCustomer, $theOrder ) : array
    {
        return $this -> getRequest( $this -> baseURL . $theCustomer . '/orders/' . $theOrder  );
    }

    /**
     * @param $theCustomer
     * @param $theRequest
     * @param $theOrder
     * @return array|mixed
     */
    public function updateOrder( $theCustomer, $theRequest, $theOrder ) : array
    {
        return $this -> putRequest( $this -> baseURL . $theCustomer . '/orders/' . $theOrder, $theRequest  );
    }

    /**
     * @param $theCustomer
     * @param $theOrder
     * @return array|mixed
     */
    public function deleteOrder( $theCustomer, $theOrder ) : array
    {
        return $this -> deleteRequest( $this -> baseURL . $theCustomer . '/orders/' . $theOrder  );
    }
}
