<?php

namespace App\Repositories\ProductService\Product;

use App\Http\Requests\ProductService\Product\ProductRequest;

interface ProductRepositoryInterface
{
    /**
     * @param $theStore
     * @return array|mixed
     */
    public function index( $theStore ): array;

    /**
     * @param ProductRequest $productRequest
     * @param $theStore
     * @return array|mixed
     */
    public function store( ProductRequest $productRequest, $theStore ): array;

    /**
     * @param $theStore
     * @param $theProduct
     * @return array|mixed
     */
    public function show( $theStore, $theProduct ): array;

    /**
     * @param ProductRequest $productRequest
     * @param $Product
     * @return array|mixed
     */
    public function update( ProductRequest $productRequest, $Product ): array;

    /**
     * @param $Product
     * @return array|mixed
     */
    public function destroy( $Product ): array;
}
