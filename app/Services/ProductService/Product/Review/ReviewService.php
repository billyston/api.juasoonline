<?php

namespace App\Services\ProductService\Product\Review;

use App\Traits\ExternalService;

class ReviewService
{
    use ExternalService;
    private $baseURL;

    /**
     * ReviewService constructor.
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
        return $this -> getAllRequest( $this -> baseURL . $theProduct . '/reviews' );
    }

    /**
     * @param $theRequest
     * @param $theProduct
     * @return array|mixed
     */
    public function createReview( $theProduct, $theRequest ) : array
    {
        return $this -> postRequest( $this -> baseURL . $theProduct . '/reviews', $theRequest );
    }

    /**
     * @param $theProduct
     * @param $theReview
     * @return array|mixed
     */
    public function getReview( $theProduct, $theReview ) : array
    {
        return $this -> getRequest( $this -> baseURL . $theProduct . '/reviews/' . $theReview  );
    }

    /**
     * @param $theProduct
     * @param $theRequest
     * @param $theReview
     * @return array|mixed
     */
    public function updateReview( $theProduct, $theRequest, $theReview ) : array
    {
        return $this -> putRequest( $this -> baseURL . $theProduct . '/reviews/' . $theReview, $theRequest  );
    }

    /**
     * @param $theProduct
     * @param $theReview
     * @return array|mixed
     */
    public function deleteReview( $theProduct, $theReview ) : array
    {
        return $this -> deleteRequest( $this -> baseURL . $theProduct . '/reviews/' . $theReview  );
    }
}
