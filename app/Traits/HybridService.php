<?php

namespace App\Traits;

class HybridService
{
    use ExternalService; private string $orderServiceURL;  private string $productServiceURL;

    /**
     * CartService constructor.
     */
    public function __construct()
    {
        $this -> orderServiceURL = env('ORDER_SERVICE_URL');
        $this -> productServiceURL = env('PRODUCT_SERVICE_URL');
    }

    public function getProduct ( $theProduct )
    {
        return $this -> getAllRequest( $this -> productServiceURL . 'juasooline/product/' . $theProduct );
    }
}
