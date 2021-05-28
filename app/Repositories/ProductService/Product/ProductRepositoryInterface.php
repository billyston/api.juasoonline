<?php

namespace App\Repositories\ProductService\Product;

use App\Http\Requests\ProductService\Product\ProductRequest;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

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
    public function store( $theStore, ProductRequest $productRequest ): array;

    /**
     * @param $theStore
     * @param $theProduct
     * @return array|mixed
     */
    public function show( $theStore, $theProduct ): array;

    /**
     * @param $theStore
     * @param ProductRequest $productRequest
     * @param $Product
     * @return array|mixed
     */
    public function update( $theStore, ProductRequest $productRequest, $Product ): array;

    /**
     * @param $theStore
     * @param $Product
     * @return array|mixed
     */
    public function destroy( $theStore, $Product ): array;

    /**
     * @return array|mixed
     */
    public function products() : array;
}
