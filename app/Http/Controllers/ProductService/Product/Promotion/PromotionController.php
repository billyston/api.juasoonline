<?php

namespace App\Http\Controllers\ProductService\Product\Promotion;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductService\Product\Promotion\PromotionRequest;
use App\Repositories\ProductService\Product\Promotion\PromotionRepositoryInterface;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    private $theRepository;

    /**
     * PromotionController constructor.
     * @param PromotionRepositoryInterface $promotionRepository
     */
    public function __construct( PromotionRepositoryInterface $promotionRepository )
    {
        $this -> theRepository = $promotionRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @param $theProduct
     * @return array|mixed
     */
    public function index( $theProduct ) : array
    {
        return $this -> theRepository -> index( $theProduct );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $theProduct
     * @param PromotionRequest $promotionRequest
     * @return array|mixed
     */
    public function store( $theProduct, PromotionRequest $promotionRequest ) : array
    {
        return $this -> theRepository -> store( $theProduct, $promotionRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param $theProduct
     * @param $thePromotion
     * @return array|mixed
     */
    public function show( $theProduct, $thePromotion ) : array
    {
        return $this -> theRepository -> show( $theProduct, $thePromotion );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $theProduct
     * @param PromotionRequest $promotionRequest
     * @param $thePromotion
     * @return array|mixed
     */
    public function update( $theProduct, PromotionRequest $promotionRequest, $thePromotion ) : array
    {
        return $this -> theRepository -> update( $theProduct, $promotionRequest, $thePromotion );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $theProduct
     * @param $thePromotion
     * @return array|mixed
     */
    public function destroy( $theProduct, $thePromotion ) : array
    {
        return $this -> theRepository -> destroy( $theProduct, $thePromotion );
    }
}
