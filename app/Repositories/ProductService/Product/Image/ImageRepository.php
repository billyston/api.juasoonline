<?php

namespace App\Repositories\ProductService\Product\Image;

use App\Http\Requests\ProductService\Product\Image\ImageRequest;
use App\Services\ProductService\Product\Image\ImageService;

class ImageRepository implements ImageRepositoryInterface
{
    private $theService;

    /**
     * ImageService constructor.
     * @param ImageService $imageService
     */
    public function __construct( ImageService $imageService )
    {
        $this -> theService = $imageService;
    }

    /**
     * @param $theProduct
     * @return array|mixed
     */
    public function index ( $theProduct ) : array
    {
        return $this -> theService -> getAll( $theProduct );
    }

    /**
     * @param $theProduct
     * @param ImageRequest $imageRequest
     * @return array|mixed
     */
    public function store ( $theProduct, ImageRequest $imageRequest ) : array
    {
        $data = array( 'type' => 'Image', 'images' => array( 'data' => []), 'relationships' => array( 'product' => array( 'product_id' => $imageRequest['product_id'] )));
        for( $i = 0; $i <  count( $imageRequest['description'] ); $i++  )
        {
            $file =  $imageRequest['file'][$i] -> store('products/images/products');
            array_push( $data['images']['data'], array( 'description' => $imageRequest['description'][$i], 'file' => $file ) );
        }
        return $this -> theService -> createImage( $data, $theProduct );
    }

    /**
     * @param $theProduct
     * @param $theImage
     * @return array|mixed
     */
    public function show ( $theProduct, $theImage ) : array
    {}

    /**
     * @param $theProduct
     * @param ImageRequest $imageRequest
     * @param $theImage
     * @return array|mixed
     */
    public function update ( $theProduct, ImageRequest $imageRequest, $theImage ) : array
    {}

    /**
     * @param $theProduct
     * @param $theImage
     * @return array|mixed
     */
    public function destroy ( $theProduct, $theImage ) : array
    {}
}
