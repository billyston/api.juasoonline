<?php

namespace App\Services\ProductService\Product\Promotion;

use App\Traits\ExternalService;

class PromotionService
{
    use ExternalService;
    private $baseURL;

    /**
     * SizeService constructor.
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
        return $this -> getAllRequest( $this -> baseURL . $theProduct . '/promotions' );
    }

    /**
     * @param $theRequest
     * @param $theProduct
     * @return array|mixed
     */
    public function createPromotion( $theProduct, $theRequest ) : array
    {
        return $this -> postRequest( $this -> baseURL . $theProduct . '/promotions', $theRequest );
    }

    /**
     * @param $theProduct
     * @param $thePromotion
     * @return array|mixed
     */
    public function getPromotion( $theProduct, $thePromotion ) : array
    {
        return $this -> getRequest( $this -> baseURL . $theProduct . '/promotions/' . $thePromotion  );
    }

    /**
     * @param $theProduct
     * @param $theRequest
     * @param $thePromotion
     * @return array|mixed
     */
    public function updatePromotion( $theProduct, $theRequest, $thePromotion ) : array
    {
        return $this -> putRequest( $this -> baseURL . $theProduct . '/promotions/' . $thePromotion, $theRequest  );
    }

    /**
     * @param $theProduct
     * @param $thePromotion
     * @return array|mixed
     */
    public function deletePromotion( $theProduct, $thePromotion ) : array
    {
        return $this -> deleteRequest( $this -> baseURL . $theProduct . '/promotions/' . $thePromotion  );
    }
}
