<?php

namespace App\Repositories\ProductService\Other\PromoType;

use App\Http\Requests\ProductService\Other\PromoType\PromoTypeRequest;
use App\Services\ProductService\Other\PromoType\PromoTypeService;

class PromoTypeRepository implements PromoTypeRepositoryInterface
{
    private $promoTypeService;

    /**
     * BrandRepository constructor.
     * @param PromoTypeService $promoTypeService
     */
    public function __construct( PromoTypeService $promoTypeService )
    {
        $this -> promoTypeService = $promoTypeService;
    }

    /**
     * @return array|mixed
     */
    public function index() : array
    {
        return $this -> promoTypeService -> getAll();
    }

    /**
     * @param PromoTypeRequest $promoTypeRequest
     * @return array|mixed
     */
    public function store( PromoTypeRequest $promoTypeRequest ) : array
    {
        return $this -> promoTypeService -> createPromoType( $promoTypeRequest );
    }

    /**
     * @param $PromoType
     * @return array|mixed
     */
    public function show( $PromoType ) : array
    {
        return $this -> promoTypeService -> getPromoType( $PromoType );
    }

    /**
     * @param PromoTypeRequest $promoTypeRequest
     * @param $PromoType
     * @return array|mixed
     */
    public function update( PromoTypeRequest $promoTypeRequest, $PromoType ) : array
    {
        return $this -> promoTypeService -> updatePromoType( $promoTypeRequest, $PromoType );
    }

    /**
     * @param $PromoType
     * @return array|mixed
     */
    public function destroy( $PromoType ) : array
    {
        return $this -> promoTypeService -> deletePromoType( $PromoType );
    }
}
