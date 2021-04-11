<?php

namespace App\Services\ProductService\Product\Image;

use App\Traits\ExternalService;

class ImageService
{
    use ExternalService;
    private $baseURL;

    public function __construct()
    {
        $this -> baseURL = env('PRODUCT_SERVICE_URL') . 'product/';
    }

    /**
     * @param $product
     * @return array|mixed
     */
    public function getAll( $product ) : array
    {
        return $this -> getAllRequest( $this -> baseURL.$product."/images" );
    }

    /**
     * @param $theRequest
     * @param $product
     * @return array|mixed
     */
    public function createImage( $theRequest, $product ) : array
    {
        return $this -> postWithFiles( $this -> baseURL.$product."/images", $theRequest );
    }

    /**
     * @param $theImage
     * @return array|mixed
     */
    public function getImage( $theImage ) : array
    {
        return $this -> getRequest( $this -> baseURL, $theImage  );
    }

    /**
     * @param $theRequest
     * @param $theImage
     * @return array|mixed
     */
    public function updateImage( $theRequest, $theImage ) : array
    {
        return $this -> putRequest( $this -> baseURL, $theRequest, $theImage  );
    }

    /**
     * @param $theImage
     * @return array|mixed
     */
    public function deleteImage( $theImage ) : array
    {
        return $this -> deleteRequest( $this -> baseURL, $theImage  );
    }
}
