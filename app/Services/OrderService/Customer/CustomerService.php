<?php

namespace App\Services\OrderService\Customer;

use App\Traits\ExternalService;

class CustomerService
{
    use ExternalService;
    private $baseURL;

    /**
     * CustomerService constructor.
     */
    public function __construct()
    {
        $this -> baseURL = env('ORDER_SERVICE_URL') . 'customers';
    }

    /**
     * @return array|mixed
     */
    public function getAll()
    {
        return $this -> getAllRequest( $this -> baseURL );
    }

    /**
     * @param $theRequest
     * @return array|mixed
     */
    public function createCustomer( $theRequest ) : array
    {
        return $this -> postRequest( $this -> baseURL, $theRequest );
    }

    /**
     * @param $theCustomer
     * @return array|mixed
     */
    public function getCustomer( $theCustomer ) : array
    {
        return $this -> getRequest( $this -> baseURL . '/' . $theCustomer );
    }

    /**
     * @param $theCustomer
     * @param $theRequest
     * @return array|mixed
     */
    public function updateCustomer( $theCustomer, $theRequest ) : array
    {
        return $this -> putRequest( $this -> baseURL . '/' . $theCustomer, $theRequest );
    }

    /**
     * @param $theCustomer
     * @return array|mixed
     */
    public function deleteCustomer( $theCustomer ) : array
    {
        return $this -> deleteRequest( $this -> baseURL . '/' . $theCustomer );
    }
}
