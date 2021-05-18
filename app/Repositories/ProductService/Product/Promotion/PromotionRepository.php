<?php

namespace App\Repositories\ProductService\Product\Promotion;

use App\Http\Requests\ProductService\Product\Promotion\PromotionRequest;
use App\Services\ProductService\Product\Promotion\PromotionService;

class PromotionRepository implements PromotionRepositoryInterface
{
    private $theService;

    /**
     * PromotionRepository constructor.
     * @param PromotionService $promotionService
     */
    public function __construct( PromotionService $promotionService )
    {
        $this -> theService = $promotionService;
    }

    /**
     * @param $theProduct
     * @return array|mixed
     */
    public function index( $theProduct ) : array
    {
        return $this -> theService -> getAll( $theProduct );
    }

    /**
     * @param $theProduct
     * @param PromotionRequest $promotionRequest
     * @return array|mixed
     */
    public function store( $theProduct, PromotionRequest $promotionRequest ) : array
    {
        return $this -> theService -> createPromotion( $theProduct, $promotionRequest );
    }

    /**
     * @param $theProduct
     * @param $thePromotion
     * @return array|mixed
     */
    public function show( $theProduct, $thePromotion ) : array
    {
        return $this -> theService -> getPromotion( $theProduct, $thePromotion );
    }

    /**
     * @param $theProduct
     * @param PromotionRequest $promotionRequest
     * @param $thePromotion
     * @return array|mixed
     */
    public function update( $theProduct, PromotionRequest $promotionRequest, $thePromotion ) : array
    {
        return $this -> theService -> updatePromotion( $theProduct, $promotionRequest, $thePromotion );
    }

    /**
     * @param $theProduct
     * @param $thePromotion
     * @return array|mixed
     */
    public function destroy( $theProduct, $thePromotion ) : array
    {
        return $this -> theService -> deletePromotion( $theProduct, $thePromotion );
    }
}
