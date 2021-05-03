<?php

namespace App\Repositories\ProductService\Other\Brand;

interface BrandRepositoryInterface
{
    /**
     * @return array|mixed
     */
    public function index(): array;

    /**
     * @param $theBrand
     * @return array|mixed
     */
    public function show( $theBrand ): array;
}
