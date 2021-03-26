<?php

namespace App\Repositories\ProductService\Product;

use App\Http\Requests\ProductService\Product\ProductRequest;

interface ProductRepositoryInterface
{
    /**
     * @return array|mixed
     */
    public function index(): array;

    /**
     * @param ProductRequest $productRequest
     * @return array|mixed
     */
    public function store( ProductRequest $productRequest ): array;

    /**
     * @param $Product
     * @return array|mixed
     */
    public function show( $Product ): array;

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
