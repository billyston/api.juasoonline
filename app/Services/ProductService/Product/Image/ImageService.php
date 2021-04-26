<?php

namespace App\Services\ProductService\Product\Image;

use App\Traits\ExternalService;

class ImageService
{
    use ExternalService;
    private $baseURL;

    /**
     * ImageService constructor.
     */
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
        return $this -> getAllRequest( $this -> baseURL . $product . '/images' );
    }

    /**
     * @param $theRequest
     * @param $product
     * @return array|mixed
     */
    public function createImage( $theRequest, $product ) : array
    {
        return $this -> postWithFiles( $this -> baseURL . $product . '/images', $theRequest );
    }

    /**
     * @param $product
     * @param $theImage
     * @return array|mixed
     */
    public function getImage( $product, $theImage ) : array
    {
        return $this -> getRequest( $this -> baseURL . $product . '/' . $theImage  );
    }

    /**
     * @param $theRequest
     * @param $theImage
     * @return array|mixed
     */
    public function updateImage( $product, $theRequest, $theImage ) : array
    {
        return $this -> putRequest( $this -> baseURL . $product . '/' . $theImage,  $theRequest  );
    }

    /**
     * @param $theImage
     * @return array|mixed
     */
    public function deleteImage( $product, $theImage ) : array
    {
        return $this -> deleteRequest( $this -> baseURL . $product . '/' . $theImage  );
    }
}
