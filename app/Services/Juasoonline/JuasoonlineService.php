<?php

namespace App\Services\Juasoonline;

use App\Traits\ExternalService;

class JuasoonlineService
{
    use ExternalService;
    private string $baseURL;

    /**
     * JuasoonlineService constructor.
     */
    public function __construct()
    {
        $this -> baseURL = env('PRODUCT_SERVICE_URL');
    }

    /**
     * @return array|mixed
     */
    public function getProducts() : array
    {
        return $this -> getAllRequest( env('PRODUCT_SERVICE_URL') . 'products' );
    }

    /**
     * @return array|mixed
     */
    public function getProduct( $theProduct ) : array
    {
        return $this -> getAllRequest( env('PRODUCT_SERVICE_URL') . 'product/' . $theProduct );
    }
}
