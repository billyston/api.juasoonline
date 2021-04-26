<?php

namespace App\Http\Controllers\ProductService\Product\Review;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductService\Product\Review\ReviewRequest;
use App\Repositories\ProductService\Product\Review\ReviewRepositoryInterface;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    private $theRepository;

    /**
     * ReviewController constructor.
     * @param ReviewRepositoryInterface $reviewRepository
     */
    public function __construct( ReviewRepositoryInterface $reviewRepository )
    {
        $this -> theRepository = $reviewRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param $theProduct
     * @return array
     */
    public function index( $theProduct ) : array
    {
        return $this -> theRepository -> index( $theProduct );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $theProduct
     * @param ReviewRequest $reviewRequest
     * @return array
     */
    public function store( $theProduct, ReviewRequest $reviewRequest ) : array
    {
        return $this -> theRepository -> store( $theProduct, $reviewRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param $theProduct
     * @param $theReview
     * @return array
     */
    public function show( $theProduct, $theReview ) : array
    {
        return $this -> theRepository -> show( $theProduct, $theReview );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $theProduct
     * @param ReviewRequest $reviewRequest
     * @param $theReview
     * @return array
     */
    public function update( $theProduct, ReviewRequest $reviewRequest, $theReview ) : array
    {
        return $this -> theRepository -> update( $theProduct, $reviewRequest, $theReview );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $theProduct
     * @param $theReview
     * @return array
     */
    public function destroy( $theProduct, $theReview ) : array
    {
        return $this -> theRepository -> destroy( $theProduct, $theReview );
    }
}
