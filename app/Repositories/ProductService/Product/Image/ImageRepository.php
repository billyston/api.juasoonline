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
     * @param $product
     * @return array|mixed
     */
    public function index ( $product ) : array
    {
        return $this -> theService -> getAll( $product );
    }

    /**
     * @param ImageRequest $imageRequest
     * @param $product
     * @return array|mixed
     */
    public function store ( ImageRequest $imageRequest, $product ) : array
    {
        $data = array( 'type' => 'Image', 'images' => array( 'data' => []), 'relationships' => array( 'product' => array( 'product_id' => $imageRequest['product_id'] )));
        for( $i = 0; $i <  count( $imageRequest['description'] ); $i++  )
        {
            $file =  $imageRequest['file'][$i] -> store('products/images/products');
            array_push( $data['images']['data'], array( 'description' => $imageRequest['description'][$i], 'file' => $file ) );
        }
        return $this -> theService -> createImage( $data, $product );
    }

    /**
     * @param $theImage
     * @return array|mixed
     */
    public function show ( $theImage ) : array
    {}

    /**
     * @param ImageRequest $imageRequest
     * @param $theImage
     * @return array|mixed
     */
    public function update ( ImageRequest $imageRequest, $theImage ) : array
    {}

    /**
     * @param $theImage
     * @return array|mixed
     */
    public function destroy ( $theImage ) : array
    {}
}
