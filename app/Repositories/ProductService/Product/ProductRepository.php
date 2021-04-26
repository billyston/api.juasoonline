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
     * @param $theStore
     * @return array|mixed
     */
    public function index( $theStore ) : array
    {
        return $this -> productService -> getAll( $theStore );
    }

    /**
     * @param ProductRequest $productRequest
     * @param $theStore
     * @return array|mixed
     */
    public function store( $theStore, ProductRequest $productRequest ) : array
    {
        return $this -> productService -> createProduct( $theStore, $productRequest );
    }

    /**
     * @param $theStore
     * @param $theProduct
     * @return array|mixed
     */
    public function show( $theStore, $theProduct ) : array
    {
        return $this -> productService -> getProduct( $theStore, $theProduct );
    }

    /**
     * @param $theStore
     * @param ProductRequest $productRequest
     * @param $Product
     * @return array|mixed
     */
    public function update( $theStore, ProductRequest $productRequest, $Product ) : array
    {
        return $this -> productService -> updateProduct( $theStore, $productRequest, $Product );
    }

    /**
     * @param $theStore
     * @param $Product
     * @return array|mixed
     */
    public function destroy( $theStore, $Product ) : array
    {
        return $this -> productService -> deleteProduct( $theStore, $Product );
    }
}
