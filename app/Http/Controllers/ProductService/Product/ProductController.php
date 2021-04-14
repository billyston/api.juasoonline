<?php

namespace App\Http\Controllers\ProductService\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductService\Product\ProductRequest;
use App\Repositories\ProductService\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    private $theRepository;

    /**
     * ProductController constructor.
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct( ProductRepositoryInterface $productRepository )
    {
        $this -> theRepository = $productRepository;
    }

    /**
     * Display a listing of the resource.
     * @param $theStore
     * @return array|mixed
     */
    public function index( $theStore ) : array
    {
        return $this -> theRepository -> index( $theStore );
    }

    /**
     * Store a newly created resource in storage.
     * @param ProductRequest $productRequest
     * @param $theStore
     * @return array|mixed
     */
    public function store( ProductRequest $productRequest, $theStore ) : array
    {
        return $this -> theRepository -> store( $productRequest, $theStore );
    }

    /**
     * Display the specified resource.
     * @param $theStore
     * @param $theProduct
     * @return array|mixed
     */
    public function show( $theStore, $theProduct ) : array
    {
        return $this -> theRepository -> show( $theStore, $theProduct );
    }

    /**
     * Update the specified resource in storage.
     * @param ProductRequest $productRequest
     * @param $Product
     * @return array|mixed
     */
    public function update( ProductRequest $productRequest, $Product ) : array
    {
        return $this -> theRepository -> update( $productRequest, $Product );
    }

    /**
     * Remove the specified resource from storage.
     * @param $Product
     * @return array|mixed
     */
    public function destroy( $Product ) : array
    {
        return $this -> theRepository -> destroy( $Product );
    }
}
