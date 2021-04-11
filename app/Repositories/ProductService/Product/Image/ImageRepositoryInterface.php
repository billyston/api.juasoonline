<?php

namespace App\Repositories\ProductService\Product\Image;

use App\Http\Requests\ProductService\Product\Image\ImageRequest;

interface ImageRepositoryInterface
{
    /**
     * @param $product
     * @return array|mixed
     */
    public function index( $product ) : array;

    /**
     * @param ImageRequest $imageRequest
     * @param $product
     * @return array|mixed
     */
    public function store( ImageRequest $imageRequest, $product ): array;

    /**
     * @param $theImage
     * @return array|mixed
     */
    public function show( $theImage ): array;

    /**
     * @param ImageRequest $imageRequest
     * @param $theImage
     * @return array|mixed
     */
    public function update( ImageRequest $imageRequest, $theImage ): array;

    /**
     * @param $theImage
     * @return array
     */
    public function destroy( $theImage ): array;
}
