<?php

namespace App\Repositories\ProductService\Product\Category;

interface CategoryRepositoryInterface
{
    /**
     * @return array|mixed
     */
    public function index(): array;

    /**
     * @param $theCategory
     * @return array|mixed
     */
    public function show($theCategory): array;
}
