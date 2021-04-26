<?php

namespace App\Services\OrderService\Customer\Wishlist;

use App\Traits\ExternalService;

class WishlistService
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
        return $this -> getAllRequest( $this -> baseURL . $theCustomer . '/wishlists' );
    }

    /**
     * @param $theRequest
     * @param $theCustomer
     * @return array|mixed
     */
    public function createWishlist( $theCustomer, $theRequest ) : array
    {
        return $this -> postRequest( $this -> baseURL . $theCustomer . '/wishlists', $theRequest );
    }

    /**
     * @param $theCustomer
     * @param $theWishlist
     * @return array|mixed
     */
    public function getWishlist( $theCustomer, $theWishlist ) : array
    {
        return $this -> getRequest( $this -> baseURL . $theCustomer . '/wishlists/' . $theWishlist  );
    }

    /**
     * @param $theCustomer
     * @param $theRequest
     * @param $theWishlist
     * @return array|mixed
     */
    public function updateWishlist( $theCustomer, $theRequest, $theWishlist ) : array
    {
        return $this -> putRequest( $this -> baseURL . $theCustomer . '/wishlists/' . $theWishlist, $theRequest  );
    }

    /**
     * @param $theCustomer
     * @param $theWishlist
     * @return array|mixed
     */
    public function deleteWishlist( $theCustomer, $theWishlist ) : array
    {
        return $this -> deleteRequest( $this -> baseURL . $theCustomer . '/wishlists/' . $theWishlist  );
    }
}
