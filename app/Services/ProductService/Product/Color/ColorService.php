<?php

namespace App\Services\ProductService\Product\Color;

use App\Traits\ExternalService;

class ColorService
{
    use ExternalService;
    private $baseURL;

    /**
     * ColorService constructor.
     */
    public function __construct()
    {
        $this -> baseURL = env('PRODUCT_SERVICE_URL') . 'product/';
    }

    /**
     * @param $theProduct
     * @return array|mixed
     */
    public function getAll( $theProduct ) : array
    {
        return $this -> getAllRequest( $this -> baseURL . $theProduct . '/colors' );
    }

    /**
     * @param $theRequest
     * @param $theProduct
     * @return array|mixed
     */
    public function createColor( $theProduct, $theRequest ) : array
    {
        return $this -> postRequest( $this -> baseURL . $theProduct . '/colors', $theRequest );
    }

    /**
     * @param $theProduct
     * @param $theColor
     * @return array|mixed
     */
    public function getColor( $theProduct, $theColor ) : array
    {
        return $this -> getRequest( $this -> baseURL . $theProduct . '/colors/' . $theColor  );
    }

    /**
     * @param $theProduct
     * @param $theRequest
     * @param $theColor
     * @return array|mixed
     */
    public function updateColor( $theProduct, $theRequest, $theColor ) : array
    {
        return $this -> putRequest( $this -> baseURL . $theProduct . '/colors/' . $theColor, $theRequest  );
    }

    /**
     * @param $theProduct
     * @param $theColor
     * @return array|mixed
     */
    public function deleteColor( $theProduct, $theColor ) : array
    {
        return $this -> deleteRequest( $this -> baseURL . $theProduct . '/colors/' . $theColor  );
    }
}
