<?php

namespace App\Services\Juasoonline;

use App\Traits\ExternalService;
use Illuminate\Http\Request;

class JuasoonlineService
{
    use ExternalService;
    private string $baseURL;

    /**
     * JuasoonlineService constructor.
     */
    public function __construct()
    {
        $this -> baseURL = env('PRODUCT_SERVICE_URL') . 'juaso/';
    }

    /**
     * @return array|mixed
     */
    public function getProducts() : array
    {
        return $this -> getAllRequest( $this -> baseURL . 'products' );
    }

    /**
     * @return array|mixed
     */
    public function getProduct( $theProduct ) : array
    {
        return $this -> getAllRequest( $this -> baseURL . 'product/' . $theProduct );
    }

    /**
     * @return array|mixed
     */
    public function getRecommendations( Request $request ) : array
    {
        return $this -> getWithBody( $this -> baseURL . 'products/recommendations', $request );
    }

    /**
     * @return array|mixed
     */
    public function getStoreProducts( $theStore ) : array
    {
        return $this -> getAllRequest( $this -> baseURL . 'store/' . $theStore . '/products' );
    }

    /**
     * @return array|mixed
     */
    public function getDeals() : array
    {
        return $this -> getAllRequest( $this -> baseURL . 'products/deals' );
    }
}
