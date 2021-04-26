<?php

namespace App\Repositories\ProductService\Product\Review;

use App\Http\Requests\ProductService\Product\Review\ReviewRequest;

interface ReviewRepositoryInterface
{
    /**
     * @param $theProduct
     * @return array
     */
    public function index( $theProduct ) : array;

    /**
     * @param $theProduct
     * @param ReviewRequest $reviewRequest
     * @return array
     */
    public function store( $theProduct, ReviewRequest $reviewRequest ) : array;

    /**
     * @param $theProduct
     * @param $theReview
     * @return array
     */
    public function show( $theProduct, $theReview ) : array;

    /**
     * @param $theProduct
     * @param ReviewRequest $reviewRequest
     * @param $theReview
     * @return array
     */
    public function update( $theProduct, ReviewRequest $reviewRequest, $theReview ) : array;

    /**
     * @param $theProduct
     * @param $theReview
     * @return array
     */
    public function destroy( $theProduct, $theReview ) : array;
}
