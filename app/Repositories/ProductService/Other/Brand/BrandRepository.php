<?php

namespace App\Repositories\ProductService\Other\Brand;

use App\Services\ProductService\Other\Brand\BrandService;

class BrandRepository implements BrandRepositoryInterface
{
    private $brandService;

    /**
     * BrandRepository constructor.
     * @param BrandService $brandService
     */
    public function __construct( BrandService $brandService )
    {
        $this -> brandService = $brandService;
    }

    /**
     * @return array|mixed
     */
    public function index() : array
    {
        return $this -> brandService -> getAll();
    }

    /**
     * @param $theBrand
     * @return array|mixed
     */
    public function show( $theBrand ) : array
    {
        return $this -> brandService -> getRequest( $theBrand );
    }
}
