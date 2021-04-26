<?php

namespace App\Repositories\ProductService\Product\Size;

use App\Http\Requests\ProductService\Product\Size\SizeRequest;

interface SizeRepositoryInterface
{
    /**
     * Display a listing of the resource.
     *
     * @param $theProduct
     * @return array
     */
    public function index( $theProduct ) : array;

    /**
     * Store a newly created resource in storage.
     *
     * @param $theProduct
     * @param SizeRequest $sizeRequest
     * @return array
     */
    public function store( $theProduct, SizeRequest $sizeRequest ) : array;

    /**
     * Display the specified resource.
     *
     * @param $theProduct
     * @param $theSize
     * @return array
     */
    public function show( $theProduct, $theSize ) : array;

    /**
     * Update the specified resource in storage.
     *
     * @param $theProduct
     * @param SizeRequest $sizeRequest
     * @param $theSize
     * @return array
     */
    public function update( $theProduct, SizeRequest $sizeRequest, $theSize ) : array;

    /**
     * Remove the specified resource from storage.
     *
     * @param $theProduct
     * @param $theSize
     * @return array
     */
    public function destroy( $theProduct, $theSize ) : array;
}
