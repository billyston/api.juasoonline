<?php

namespace App\Repositories\ProductService\Other\Category;

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
    public function show( $theCategory ): array;
}
