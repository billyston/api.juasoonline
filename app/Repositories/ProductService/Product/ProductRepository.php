<?php

namespace App\Repositories\ProductService\Product;

use App\Http\Requests\ProductService\Product\ProductRequest;
use App\Services\ProductService\Product\ProductService;

class ProductRepository implements ProductRepositoryInterface
{
    private $productService;

    /**
     * StoreRepository constructor.
     * @param ProductService $productService
     */
    public function __construct( ProductService $productService )
    {
        return $this -> productService = $productService;
    }

    /**
     * @return array|mixed
     */
    public function index() : array
    {
        return $this -> productService -> getAll();
    }

    /**
     * @param ProductRequest $productRequest
     * @return array|mixed
     */
    public function store( ProductRequest $productRequest ) : array
    {
        return $this -> productService -> createProduct( $productRequest );
    }

    /**
     * @param $Product
     * @return array|mixed
     */
    public function show( $Product ) : array
    {
        return $this -> productService -> getProduct( $Product );
    }

    /**
     * @param ProductRequest $productRequest
     * @param $Product
     * @return array|mixed
     */
    public function update( ProductRequest $productRequest, $Product ) : array
    {
        return $this -> productService -> updateProduct( $productRequest, $Product );
    }

    /**
     * @param $Product
     * @return array|mixed
     */
    public function destroy( $Product ) : array
    {
        return $this -> productService -> deleteProduct( $Product );
    }
}
