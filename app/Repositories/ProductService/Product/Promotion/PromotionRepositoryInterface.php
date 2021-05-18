<?php

namespace App\Repositories\ProductService\Product\Promotion;

use App\Http\Requests\ProductService\Product\Promotion\PromotionRequest;

interface PromotionRepositoryInterface
{
    /**
     * @param $theProduct
     * @return array|mixed
     */
    public function index( $theProduct ) : array;

    /**
     * @param $theProduct
     * @param PromotionRequest $promotionRequest
     * @return array|mixed
     */
    public function store( $theProduct, PromotionRequest $promotionRequest ) : array;

    /**
     * @param $theProduct
     * @param $thePromotion
     * @return array|mixed
     */
    public function show( $theProduct, $thePromotion ) : array;

    /**
     * @param $theProduct
     * @param PromotionRequest $promotionRequest
     * @param $thePromotion
     * @return array|mixed
     */
    public function update( $theProduct, PromotionRequest $promotionRequest, $thePromotion ) : array;

    /**
     * @param $theProduct
     * @param $thePromotion
     * @return array|mixed
     */
    public function destroy( $theProduct, $thePromotion ) : array;
}
