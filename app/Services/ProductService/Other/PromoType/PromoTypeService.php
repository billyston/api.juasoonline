<?php

namespace App\Services\ProductService\Other\PromoType;

use App\Http\Requests\ProductService\Other\PromoType\PromoTypeRequest;
use App\Traits\ExternalService;

class PromoTypeService
{
    use ExternalService;
    private $baseURL;

    /**
     * PromoTypeService constructor.
     */
    public function __construct()
    {
        $this -> baseURL = env('PRODUCT_SERVICE_URL') . 'promo-types';
    }

    /**
     * @return array|mixed
     */
    public function getAll() : array
    {
        return $this -> getAllRequest( $this -> baseURL );
    }

    /**
     * @param PromoTypeRequest $promoTypeRequest
     * @return array|mixed
     */
    public function createPromoType( PromoTypeRequest $promoTypeRequest ) : array
    {
        return $this -> postRequest( $this -> baseURL, $promoTypeRequest  );
    }

    /**
     * @param $thePromoType
     * @return array|mixed
     */
    public function getPromoType( $thePromoType ) : array
    {
        return $this -> getRequest( $this -> baseURL . "/" . $thePromoType  );
    }

    /**
     * @param PromoTypeRequest $promoTypeRequest
     * @param $thePromoType
     * @return array|mixed
     */
    public function updatePromoType( PromoTypeRequest $promoTypeRequest, $thePromoType ) : array
    {
        return $this -> putRequest( $this -> baseURL. '/'. $thePromoType,  $promoTypeRequest  );
    }

    /**
     * @param $thePromoType
     * @return array|mixed
     */
    public function deletePromoType( $thePromoType ) : array
    {
        return $this -> deleteRequest( $this -> baseURL. '/'. $thePromoType  );
    }
}
