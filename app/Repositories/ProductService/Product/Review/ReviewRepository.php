<?php

namespace App\Repositories\ProductService\Product\Review;

use App\Http\Requests\ProductService\Product\Review\ReviewRequest;
use App\Services\ProductService\Product\Review\ReviewService;

class ReviewRepository implements ReviewRepositoryInterface
{
    private $theService;

    /**
     * ReviewRepository constructor.
     * @param ReviewService $reviewService
     */
    public function __construct( ReviewService $reviewService )
    {
        return $this -> theService = $reviewService;
    }

    /**
     * @param $theProduct
     * @return array
     */
    public function index( $theProduct ) : array
    {
        return $this -> theService -> getAll( $theProduct );
    }

    /**
     * @param $theProduct
     * @param ReviewRequest $reviewRequest
     * @return array
     */
    public function store( $theProduct, ReviewRequest $reviewRequest ) : array
    {
        return $this -> theService -> createReview( $theProduct, $reviewRequest );
    }

    /**
     * @param $theProduct
     * @param $theReview
     * @return array
     */
    public function show( $theProduct, $theReview ) : array
    {
        return $this -> theService -> getReview( $theProduct, $theReview );
    }

    /**
     * @param $theProduct
     * @param ReviewRequest $reviewRequest
     * @param $theReview
     * @return array
     */
    public function update( $theProduct, ReviewRequest $reviewRequest, $theReview ) : array
    {
        return $this -> theService -> updateReview( $theProduct, $reviewRequest, $theReview );
    }

    /**
     * @param $theProduct
     * @param $theReview
     * @return array
     */
    public function destroy( $theProduct, $theReview ) : array
    {
        return $this -> theService -> deleteReview( $theProduct, $theReview );
    }
}
