<?php

namespace App\Services\Juasoonline;

use App\Traits\ExternalService;
use Illuminate\Http\Request;

class JuasoonlineService
{
    use ExternalService; private string $productURL; private string $orderURL;

    /**
     * JuasoonlineService constructor.
     */
    public function __construct()
    {
        $this -> productURL = env('PRODUCT_SERVICE_URL') . 'juaso/';
        $this -> orderURL = env('ORDER_SERVICE_URL') . 'juaso/';
    }

    /**
     * @return array|mixed
     */
    public function getProducts() : array
    {
        return $this -> getAllRequest( $this -> productURL . 'products' );
    }

    /**
     * @return array|mixed
     */
    public function getProduct( $theProduct ) : array
    {
        return $this -> getAllRequest( $this -> productURL . 'product/' . $theProduct );
    }

    /**
     * @return array|mixed
     */
    public function getRecommendations( Request $request ) : array
    {
        return $this -> getWithBody( $this -> productURL . 'products/recommendations', $request );
    }

    /**
     * @return array|mixed
     */
    public function getStoreProducts( $theStore ) : array
    {
        return $this -> getAllRequest( $this -> productURL . 'store/' . $theStore . '/products' );
    }

    /**
     * @return array|mixed
     */
    public function getStoreRecommendations( $theProduct ) : array
    {
        return $this -> getAllRequest( $this -> productURL . 'store/product/' . $theProduct . '/recommendations' );
    }

    /**
     * @return array|mixed
     */
    public function getDeals() : array
    {
        return $this -> getAllRequest( $this -> productURL . 'products/deals' );
    }

    /**
     * @return array|mixed
     */
    public function getStoreAds() : array
    {
        return $this -> getAllRequest( $this -> productURL . 'stores/ads' );
    }

    /**
     * @return array|mixed
     */
    public function getCategories() : array
    {
        return $this -> getAllRequest( $this -> productURL . 'categories' );
    }

    /**
     * @return array|mixed
     */
    public function getPaymentMethods() : array
    {
        return $this -> getAllRequest( $this -> orderURL . 'payment-methods' );
    }
}
