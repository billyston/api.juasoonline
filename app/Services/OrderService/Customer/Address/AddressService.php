<?php

namespace App\Services\OrderService\Customer\Address;

use App\Traits\ExternalService;

class AddressService
{
    use ExternalService;
    private $baseURL;

    /**
     * AddressService constructor.
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
        return $this -> getAllRequest( $this -> baseURL . $theCustomer . '/addresses' );
    }

    /**
     * @param $theRequest
     * @param $theCustomer
     * @return array|mixed
     */
    public function createAddress( $theCustomer, $theRequest ) : array
    {
        return $this -> postRequest( $this -> baseURL . $theCustomer . '/addresses', $theRequest );
    }

    /**
     * @param $theCustomer
     * @param $theAddress
     * @return array|mixed
     */
    public function getAddress( $theCustomer, $theAddress ) : array
    {
        return $this -> getRequest( $this -> baseURL . $theCustomer . '/addresses/' . $theAddress  );
    }

    /**
     * @param $theCustomer
     * @param $theRequest
     * @param $theAddress
     * @return array|mixed
     */
    public function updateAddress( $theCustomer, $theRequest, $theAddress ) : array
    {
        return $this -> putRequest( $this -> baseURL . $theCustomer . '/addresses/' . $theAddress, $theRequest  );
    }

    /**
     * @param $theCustomer
     * @param $theAddress
     * @return array|mixed
     */
    public function deleteAddress( $theCustomer, $theAddress ) : array
    {
        return $this -> deleteRequest( $this -> baseURL . $theCustomer . '/addresses/' . $theAddress  );
    }
}
