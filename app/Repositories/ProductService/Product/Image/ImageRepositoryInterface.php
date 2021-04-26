<?php

namespace App\Repositories\ProductService\Product\Image;

use App\Http\Requests\ProductService\Product\Image\ImageRequest;

interface ImageRepositoryInterface
{
    /**
     * @param $theProduct
     * @return array|mixed
     */
    public function index( $theProduct ) : array;

    /**
     * @param $theProduct
     * @param ImageRequest $imageRequest
     * @return array|mixed
     */
    public function store( $theProduct, ImageRequest $imageRequest ): array;

    /**
     * @param $theProduct
     * @param $theImage
     * @return array|mixed
     */
    public function show( $theProduct, $theImage ): array;

    /**
     * @param $theProduct
     * @param ImageRequest $imageRequest
     * @param $theImage
     * @return array|mixed
     */
    public function update( $theProduct, ImageRequest $imageRequest, $theImage ): array;

    /**
     * @param $theProduct
     * @param $theImage
     * @return array
     */
    public function destroy( $theProduct, $theImage ): array;
}
